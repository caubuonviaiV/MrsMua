<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Services\Product\ProductService;
use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Models\ProductCategory;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index(Request $request)
    {
        $count_cat = Product::where('id', '=', 'cat_id')->count();
        $categories = ProductCategory::where('active', 1)->get();
        $sortBy = $request->sort_by ?? 'latest';
        $search = $request->search ?? '';

        $products = Product::where('name', 'like', '%' .$search. '%');
        $products = $this->sortandPagination($products, $sortBy, $search);

        return view('user.products.list', compact( 'products', 'categories', 'count_cat'));
    }

    // List danh muc sp
    public function category($categoryName, Request $request) {
        $categories = ProductCategory::all();

        $search = $request->search ?? '';
        $categories = ProductCategory::where('active', 1)->get();
        $sortBy = $request->sort_by ?? 'latest';
       

        $products = ProductCategory::where('name', $categoryName)->first()->products->toQuery();

        $products = $this->sortandPagination($products, $sortBy, $search);

        return view('user.products.list', compact( 'products', 'categories', 'count_cat'));
    }



    
    public function details($id = '', $slug = '')
    {
        $product = $this->productService->showdetail($id);
        // $productsMore = $this->productService->more($id);


        return view('user.products.details', [
            'title' => $product->name,
            'product' => $product,
            // 'products' => $productsMore,
            'repproduct' => $this->productService->relatedProduct($id)
        ]);
    }

    public function sortandPagination($products, $sortBy, $search)
    {
      

        switch ($sortBy) {
            case 'latest':
                $products = $products->orderBy('id');
                break;
            case 'oldest':
                $products = $products->orderByDesc('id');
                break;
            case 'name-ascending':
                $products = $products->orderBy('name');
                break;
            case 'name-descending':
                $products = $products->orderByDesc('name');
                break;
            case 'price-ascending':
                $products = $products->orderBy('price'); 
                break;
            case 'price-descending':
                $products = $products->orderByDesc('price');
                break;

            default:
                $products = $products->orderBy('id');
        }

        $title = 'Danh sách sản phẩm';
        $products = $products ->where('active', 1)->paginate(12);
        $products->appends(['sort_by' => $sortBy]);

        return $products;
    }
}

