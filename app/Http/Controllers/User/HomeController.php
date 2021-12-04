<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Services\Slider\SliderService;
use App\Http\Services\Menu\MenuService;
use App\Http\Services\Post\PostService;
use App\Http\Services\Product\ProductService;
use App\Http\Controllers\Controller;
use App\Http\Services\About\AboutService;
class HomeController extends Controller
{
    protected $slider;
    protected $menu;
    protected $product;
    protected $post;
    protected $about;

    public function __construct(SliderService $slider, MenuService $menu,
        ProductService $product, PostService $post, AboutService $about)
    {
        $this->slider = $slider;
        $this->menu = $menu;
        $this->product = $product;
        $this->post = $post;
        $this->about = $about;
    }

    public function index()
    {
        return view('User.index', [
            'title' => 'Cửa hàng Cà Phê NT',
            'sliders' => $this->slider->show(),
            'menus' => $this->menu->show(),
            'products' => $this->product->newProduct(),
            'posts' => $this->post->postnew(),
            'about' => $this->about->abouthome(),
            'product' => $this->product->minprice()
        ]);
    }
}
