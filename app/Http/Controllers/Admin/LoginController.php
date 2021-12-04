<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\User\UserService;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller {

    protected $userSevice;

    public function __construct(UserService $userSevice)
    {
        $this->userSevice = $userSevice;
    }

    public function index() {
        return view('admin.account.login', [
            'title' => 'Đăng nhập hệ thống quản trị'
        ]);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'email' => 'required|email:filter',
            'password' => 'required'
        ]);

        if (Auth::attempt([
                'email' => $request->input('email'),
                'password' => $request->input('password')
            ], $request->input('remember'))) {

            return redirect()->route('admin');
        }

        Session::flash('error', 'Email hoặc Password không đúng');
        return redirect()->back();
    }
     // End Login 

    // Thêm tk admin
    public function AddAdmin() {
        return view('Admin.account.addadmin', [
            'title' => 'Tạo tài khoản Quản trị'
        ]);
    }
    // xử lý Thêm tk admin
    public function postAddAdmin(Request $request)
     {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        if ($user->id) {
            return redirect()->route('admin');
        }
        return redirect()->back();
    }


    //Quản lý User
    public function indexUser()
    {
        return view('admin.account.list', [
            'title' => 'Danh Sách người dùng',
            'admins' => $this->userSevice->get()
        ]);
    }

    public function showUser(Admin $admin)
    {
        return view('admin.account.edit', [
            'title' => 'Chỉnh Sửa user',
            'admin' => $admin
        ]);
    }

    public function updateUser(Request $request, Admin $admin)
    {

        $this->userSevice->update($request, $admin);

        return redirect('/admin/members/list');
    }

    public function destroyUser(Request $request)
    {
        $result = $this->userSevice->destroy($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa người dùng thành công'
            ]);
        }

        return response()->json([
            'error' => true
        ]);
    }

}
