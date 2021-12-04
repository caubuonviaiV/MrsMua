<?php


namespace App\Http\Services\ProductCategory;


use App\Models\ProductCategory;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class ProductCategoryService
{
    public function show()
    {
        return ProductCategory::select('name', 'id')->orderbyDesc('id')->get();
    }

    public function getAll()
    {
        return ProductCategory::orderbyDesc('id')->paginate(5);
    }

    public function create($request)
    {
        try {
            ProductCategory::create([
                'name' => (string)$request->input('name'),
                'active' => (string)$request->input('active')
            ]);

            Session::flash('success', 'Tạo Danh Mục Thành Công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;
        }

        return true;
    }

    public function update($request, $categoryproduct): bool
    {
        $categoryproduct->name = (string)$request->input('name');
        $categoryproduct->active = (string)$request->input('active');
        $categoryproduct->save();

        Session::flash('success', 'Cập nhật thành công Danh mục'); 
        return true;
    }

    public function destroy($request)
    {
        $id = (int)$request->input('id');
        $categorypost = ProductCategory::where('id', $id)->first();
        if ($categorypost) {
            return ProductCategory::where('id', $id)->delete();
        }

        return false;
    }


    // home

    public function getId($id)
    {
        return ProductCategory::where('id', $id)->where('active', 1)->firstOrFail();
    }
    public function getProduct($categoryproduct) {
        return $categoryproduct->products()->select('id', 'name', 'price', 'price_sale', 'thumb')
        ->where('active', 1)
        ->orderByDesc('id')
        ->paginate(8);
    }
}
