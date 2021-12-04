<div class="sidebar px-4 py-4 py-md-5 me-0">
    <div class="d-flex flex-column h-100">
        <a href="/admin/" class="mb-0 brand-icon">
            <span class="logo-icon">
                <svg  width="35" height="35" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                    <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                    <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                </svg>
            </span>
            <span class="logo-text">Quản Lý Cửa Hàng Bà Mua</span>
        </a>
        <!-- Menu: main ul -->
        <ul class="menu-list flex-grow-1 mt-3">
            <!-- Menu: Quản lý danh mục -->
            <li class="collapsed">
                <a class="m-link" href="/admin/menus/list">
                    <i class="icofont-align-right"></i> <span>Quản lý Danh mục</span>
                </a>
            </li>
            <!-- Menu: Quản lý Bài viết giới thiệu -->
            <li class="collapsed">
                <a class="m-link" href="/admin/abouts/list">
                    <i class="icofont-certificate-alt-1"></i><span>Bài viết giới thiệu</span> 
                </a>
            </li>

            <!-- Menu: Quản lý Sản phẩm soup-bowl -->
            <li class="collapsed">
                <a class="m-link" data-bs-toggle="collapse" data-bs-target="#products" href="#">
                <i class="icofont-tea"></i><span>Quản lý Sản phẩm</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                <ul class="sub-menu collapse" id="products">
                    <li><a class="ms-link" href="/admin/products/list"><span>Quản lý sản phẩm</span> </a></li>
                    <li><a class="ms-link" href="/admin/productcategories/list"><span>Quản lý loại sản phẩm</span> </a></li>
                </ul>
            </li>

            <!-- Menu: Quản lý Slider -->
            <li class="collapsed">
                <a class="m-link" href="/admin/sliders/list">
                    <i class="icofont-file-tiff"></i><span>Quản lý Slider</span> 
                </a>
            </li>

            <!-- Menu: Quản lý Blog -->
            <li class="collapsed">
                <a class="m-link"  data-bs-toggle="collapse" data-bs-target="#Blogs" href="#">
                    <i class="icofont-blogger"></i><span>Quản lý Blog</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                <ul class="sub-menu collapse" id="Blogs">
                    <li><a class="ms-link" href="/admin/posts/list"><span>Bài viết</span> </a></li>
                    <li><a class="ms-link" href="/admin/postcategories/list"><span>Danh mục bài viết</span> </a></li>
                </ul>
            </li>

            <!-- Menu: Quản lý Đơn hàng -->
            <li class="collapsed">
                <a class="m-link" href="/admin/customers/">
                    <i class="icofont-document-folder"></i><span>Quản lý Đơn hàng</span> 
                </a>
            </li>

            <!-- Menu: Thống kê -->
            {{-- <li class="collapsed">
                <a class="m-link" href="/admin/">
                    <i class="icofont-briefcase"></i><span>Thống kê</span> 
                </a>
            </li> --}}



        </ul>
        <!-- EndMenu: main ul -->

        

        <!-- Theme: Switch Theme -->
        {{-- <ul class="list-unstyled mb-0">
            <li class="d-flex align-items-center justify-content-center">
                <div class="form-check form-switch theme-switch">
                    <input class="form-check-input" type="checkbox" id="theme-switch">
                    <label class="form-check-label" for="theme-switch">Enable Dark Mode!</label>
                </div>
            </li>
            <li class="d-flex align-items-center justify-content-center">
                <div class="form-check form-switch theme-rtl">
                    <input class="form-check-input" type="checkbox" id="theme-rtl">
                    <label class="form-check-label" for="theme-rtl">Enable RTL Mode!</label>
                </div>
            </li>
        </ul> --}}
        
        <!-- Menu: menu collepce btn -->
        <button type="button" class="btn btn-link sidebar-mini-btn text-light">
            <span class="ms-2"><i class="icofont-bubble-right"></i></span>
        </button>
    </div>
</div>