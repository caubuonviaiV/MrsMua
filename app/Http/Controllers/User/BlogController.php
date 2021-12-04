<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Http\Services\Post\PostService;
use App\Models\Post;

class BlogController extends Controller
{
    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }
    //Trang chủ
    public function index()
    {
        $postnew = $this->postService->postnew();
        return view('user.blog.list', [
            'title' => 'Trang Blog - Cửa hàng Cà Phê NT',
            'posts' => $this->postService->PostList(),
            'postnew' => $postnew
            
        ]);
    }
    // Trang chi tiết
    public function detail($id = '', $slug = '')
    {
        $post = $this->postService->show($id);
        $postnew = $this->postService->postnew(); 
        return view('user.blog.detail', [
            'title' => $post->title, 
            'post' => $post,
            'postnew' => $postnew
        ]);
    }
    // Tìm kiếm 
    public function search()
    {
        $tukhoa = $_GET['tukhoa'];
        $getpost =  Post::where('title', 'LIKE', '%' .$tukhoa. '%')
        ->OrWhere('description', 'LIKE', '%' .$tukhoa. '%')
        ->get();

        $postnew = $this->postService->postnew();
        return view('user.blog.search', [
            'title' => 'Trang Blog - Cửa hàng Cà Phê NT',
            'posts' => $this->postService->PostList(),
            'postnew' => $postnew,
            'tukhoa' ,
            'getpost' => $getpost
        ]);
    }

}
