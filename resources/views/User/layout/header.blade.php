<header class="header header_in is_sticky clearfix element_to_stick">
    <div class="layer"></div><!-- Opacity Mask Menu Mobile -->
    <div class="container-fluid">
        <div id="logo">
            <a href="index.html">
                <img src="teamplate/img/logo.png" width="140" height="35" alt="" class="logo_normal">
				<img src="teamplate/img/alternative-logo.png" width="140" height="35" alt="" class="logo_sticky">
            </a>
        </div>
        <!-- /cart -->
        <ul id="top_menu">
           
            <li><a href="#0" class="search-overlay-menu-btn"></a></li>
            {{-- @if (Auth::check()) --}}
            <li>
                
                {{-- <li><a class="btn_top" href="/dang-xuat">Đăng xuất</a></li> --}}
                <div class="dropdown dropdown-cart">
                    <a href="/shop-cart"
                        class="cart_bt"><strong>{{ !is_null(\Session::get('carts')) ? count(\Session::get('carts')) : 0 }}</strong></a>
                    @include('User.layout.cart')
                </div>
            </li>
            
            {{-- @else   
            <li><a class="btn_top" href="/dang-nhap">Đăng nhập</a></li> --}}
            {{-- @endif --}}
              
           

        </ul>
        <!-- /top_menu -->
        <a href="#0" class="open_close">
            <i class="icon_menu"></i><span>Menu</span>
        </a>
        <nav class="main-menu">
            <div id="header_menu">
                <a href="#0" class="open_close">
                    <i class="icon_close"></i><span>Menu</span>
                </a>
                <a href="/"><img src="img/logo.svg" width="140" height="35" alt=""></a>
            </div>
            <!-- nav -->
            <ul>

                <li class="active-menu">
                    <a href="/" class="show-submenu">Trang chủ</a>
                </li>
                <li class="active-menu">
                    <a href="thuc-don" class="show-submenu">Thực đơn</a>
                </li>
                <li class="active-menu">
                    <a href="/blog" class="show-submenu">Blog</a>
                </li>
                <li class="active-menu">
                    <a href="/lien-he" class="show-submenu">Liên hệ</a>
                </li>
                <li><a href="/dat-ban" class="btn_top">Đặt bàn</a></li>
               
            </ul>
        </nav>
        <!-- End nav -->
    </div>
<!-- Search -->
<div class="search-overlay-menu">
    <span class="search-overlay-close"><span class="closebt"><i class="icon_close"></i></span></span>
    <form role="search" id="searchform" action="/thuc-don" method="get">
        <input value="{{ request('search')}}" name="search" type="search" placeholder="Nhập từ khóa đồ uống cần tìm kiếm..." />
        <button type="submit"><i class="icon_search"></i></button>
    </form>
</div><!-- End Search -->
</header>
