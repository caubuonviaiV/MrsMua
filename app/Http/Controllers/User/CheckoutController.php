<?php

namespace App\Http\Controllers\User;

use App\Http\Services\CartService;
use App\Models\Cart;
use App\Models\Customer;
use App\Models\Product;
use App\Utilities\VNPay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{

    protected $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function index()
    {

        $products = $this->cartService->getProduct();

        return view('user.checkout.index', [
            'title' => 'Giỏ Hàng',
            'products' => $products,
            'carts' => Session::get('carts')
        ]);
    }

    public function addOrder(Request $request)
    {
        if ($request->payment_type == 'pay_later') {
            //01. Thêm đơn hàng
            $carts = Session::get('carts');
            $customer = Customer::create($request->all());
            //02. Thêm chi tiết đơn hàng
            $this->infoProductCart($carts, $customer->id);

            // $total = Cart::Rice();
            // $subtatal = Cart::subtatal();
            $this->sendEmail($customer);
        }

        // if ($request->payment_type == 'online_payment') {
        //     //01. Lấy URL thanh toán VNPay
        //     $data_url = VNPay::vnpay_create_payment([
        //         // 'vnp_TxnRef' => $products->id,
        //         'vnp_OrderInfo' => 'Moo ta don hang',
        //         'vnp_Acount' =>  Product::total(0, '', '') * 23000,
        //     ]);
        //     //02. Chuyển hướng tới URL lấy được
        //     return redirect()->to($data_url);

        // } else {
        //     return "is not";
        // }
    }




    protected function infoProductCart($carts, $customer_id)
    {
        $productId = array_keys($carts);
        $products = Product::select('id', 'name', 'price', 'price_sale', 'thumb')
            ->where('active', 1)
            ->whereIn('id', $productId)
            ->get();

        $data = [];
        foreach ($products as $product) {
            $data[] = [
                'customer_id' => $customer_id,
                'product_id' => $product->id,
                'pty'   => $carts[$product->id],
                'price' => $product->price_sale != 0 ? $product->price_sale : $product->price
            ];
        }

        return Cart::insert($data);
    }


    public function addOrders(Request $request)
    {
          // Them don hang 
          $carts = Session::get('carts');
          $customer = Customer::create($request->all());

          // them chi tiet don hang
          $productId = array_keys($carts);
          $products = Product::select('id', 'name', 'price', 'price_sale', 'thumb')
              ->where('active', 1)
              ->whereIn('id', $productId)
              ->get();

          foreach ($products as $product) {
              $data = [
                  'customer_id' => $customer->id,
                  'product_id' => $product->id,
                  'pty'   => $carts[$product->id],
                  'price' => $product->price_sale != 0 ? $product->price_sale : $product->price
              ];
              Cart::insert($data);
          }

        if ($request->payment_type == 'pay_later') {
          

            // return redirect()->back();
    
            //03 gui meo
            $this->sendEmail($customer);


            //04 Xoa gio hang
            Cart::destroy($customer);

            //05 tra ve kq
            return "Success!!";
        } 

        if ($request->payment_type == 'online_payment') {
            //01. Lấy URL thanh toán VNPay
            $data_url = VNPay::vnpay_create_payment([
                'vnp_TxnRef' => $customer->id,
                'vnp_OrderInfo' => 'Mo ta don hang',
                'vnp_Acount' => $product->price_sale != 0 ? $product->price_sale : $product->price * 23000,
            ]);
            //02. Chuyển hướng tới URL lấy được
            return redirect()->to($data_url);
        }
        else {
            return "online payment";
        }
    }

    public function vnPayCheck(Request $request)
    {
        $vnp_ResponseCode = $request->get('vnp_ResponseCode');
        $vnp_TxnRef = $request->get('vnp_TxnRef');
        $vnp_Acount = $request->get('vnp_Acount');

        if ($vnp_ResponseCode == 00 ) {
            $customer = Customer::find($vnp_TxnRef);
            $this->sendEmail($customer);

             //04 Xoa gio hang
             Cart::destroy($customer);

             return "success";

        } else {
            Customer::find($vnp_TxnRef)->delete();
            return 'ERROR: failed';
        }
    }


    private function sendEmail($customer)
    {
        $email_to = $customer->email;

        Mail::send('checkout.index', compact('customer'), function ($message) use ($email_to) {
            $message->from('trungdao10a1@gmail.com', 'Nö Diary of');
            $message->to($email_to, $email_to);
            $message->subject('order noti');
        });
    }
}
