<!doctype html>
<html lang="en">

<head>
    <title>{{ $title }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- font  --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="/teamplate/admin/login/css/style.css">

</head>

<body class="img js-fullheight" style="background-image: url(/teamplate/admin/login/images/01.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Đăng Nhập</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Vui lòng nhập tài khoản và mật khẩu!</h3>
                        @include('admin.alert')
                        <form action="/admin/login/store"  method="POST" class="signin-form">
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Tên người dùng" required>
                            </div>
                            <div class="form-group">
                                <input id="password-field" type="password" name="password" class="form-control" placeholder="Mật khẩu"
                                    required>
                                <span toggle="#password-field"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Đăng
                                    Nhập</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">Remember Me
                                        <input name="remember" type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                {{-- <div class="w-50 text-md-right">
                                        <a href="#" style="color: #fff">Forgot Password</a>
                                    </div> --}}
                            </div>
                            @csrf
                        </form>
                        {{-- <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
                        <div class="social d-flex text-center">
                            <a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span>
                                Facebook</a>
                            <a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span>
                                Twitter</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="/teamplate/admin/login/js/jquery.min.js"></script>
    <script src="/teamplate/admin/login/js/popper.js"></script>
    <script src="/teamplate/admin/login/js/bootstrap.min.js"></script>
    <script src="/teamplate/admin/login/js/main.js"></script>

</body>

</html>
