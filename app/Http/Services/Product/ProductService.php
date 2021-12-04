<?php


namespace App\Http\Services\Product;


use App\Models\Product;

class ProductService
{
    // List đồ uống
    public function showlist()
    {
        return Product::select('id', 'name', 'price', 'price_sale', 'thumb')
            ->where('active', 1)
            ->paginate(12);
    }

    // Chi tiết đồ uống
    public function showdetail($id)
    {
        return Product::where('id', $id)
            ->where('active', 1)
            ->with('productCategory')
            ->firstOrFail();
    }
    // List Đồ uống liên quan
    public function relatedProduct($id)
    {
        $product = Product::where('id', $id)
        ->where('active', 1)
        ->with('productCategory')
        ->firstOrFail();
        return Product::where('cat_id', $product->cat_id)->limit(4)->whereNotIn('id', [$id])->get();
    }

    // List Đồ uống mới nhất
    public function newProduct()
    {
        return Product::OrderBy('id', 'desc')->limit('4')->get();
    }

    public function minprice() {
        return Product::min('price_sale');
    }
    // public function more($id)
    // {
    //     return Product::select('id', 'name', 'price', 'price_sale', 'thumb')
    //         ->where('active', 1)
    //         ->where('id', '!=', $id)
    //         ->orderByDesc('id')
    //         ->limit(8)
    //         ->get();
    // }
}
