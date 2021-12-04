<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Cart;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index() {
        $product_count = Product::count();
        $order_count = Cart::count();
        $post_count = Post::count();
        $acc_count = Admin::count();
        return view('admin.home', compact('product_count', 'order_count', 'post_count', 'acc_count'));
    }

    public function logout() 
    {
        Auth::logout();
        return redirect()->route('login');
    }
    

}
