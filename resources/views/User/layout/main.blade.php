<!DOCTYPE html>
<html lang="en">

<head>
    @include('User.layout.head')
    @yield('head')
</head>

<body>
    <!-- Page Preload -->
    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div>

    <!-- header -->
    @include('User.layout.header')

    <!-- main -->
    @yield('content')

    <!-- footer-->
    <footer>
        @include('User.layout.footer')
    </footer>

    <!-- Back to top button -->
    <div id="toTop"></div>
    <!-- Sign In Modal -->
    <div id="login" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-body">
                    <button data-dismiss="modal" class="close">&times;</button>
                    <div class="container" id="container">
                        <div class="form-container sign-up-container">
                            <form action="#">
                                <h1>Đăng nhập</h1>
                                <div class="social-container">
                                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                                <span>hoặc sử dụng tài khoản của bạn</span>
                                <input type="text" placeholder="Name" />
                                <input type="email" placeholder="Email" />
                                <input type="password" placeholder="Password" />
                                <button>Sign Up</button>
                            </form>
                        </div>
                        <div class="form-container sign-in-container">
                            <form action="#" class="formls">
                                <h1>Tạo Tài khoản</h1>
                                <div class="social-container">
                                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                                <span>or use your account</span>
                                <input type="email" placeholder="Email" />
                                <input type="password" placeholder="Password" />
                                <a href="#">Forgot your password?</a>
                                <button>Sign In</button>
                            </form>
                        </div>
                        <div class="overlay-container">
                            <div class="overlay">
                                <div class="overlay-panel overlay-left">
                                    <h1>Welcome Back!</h1>
                                    <p>To keep connected with us please login with your personal info</p>
                                    <button class="ghost" id="signIn">Sign In</button>
                                </div>
                                <div class="overlay-panel overlay-right">
                                    <h1>Hello, Friend!</h1>
                                    <p>Enter your personal details and start journey with us</p>
                                    <button class="ghost" id="signUp">Sign Up</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Sign In Modal -->
    <!-- layout-->
    @include('User.layout.script')
    @yield('script')
</body>

</html>
