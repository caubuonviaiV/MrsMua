<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CatBlogController extends Controller
{
    
    public function index($id)
    {
        return view('user.Blog.detail', [
            'title' => 'Trang Blog chi tiết - Cửa hàng Cà Phê NT'
        ]);
    }
}
