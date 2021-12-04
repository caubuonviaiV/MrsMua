<?php

namespace App\Http\Controllers\User;

use App\Http\Services\ProductCategory\ProductCategoryService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    protected $productcategoryService;

    public function __construct(ProductCategoryService $categoryproductService)
    {
        $this->categoryproductService = $categoryproductService;
    }

    public function index(Request $request, $id, $slug = '')
    {
        $category = $this->categoryproductService->getId($id);
        $products = $this->categoryproductService->getProduct($category, $request);
        // dd($products);

        return view('user.category', [
            'title' => $category->name,
            'products' => $products, 
            'postcategory'  => $category
        ]);
    }
}
