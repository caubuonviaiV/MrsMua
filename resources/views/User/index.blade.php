@section('head')
    <!-- SPECIFIC CSS -->
    <link href="teamplate/css/wizard.css" rel="stylesheet">
    <!--==================== -bài viết mới nhất- ====================-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <style>
        .demo {
            width: 1131px;
            /* margin-top: 325px; */
            margin-right: auto;
            margin-bottom: 0px;
            margin-left: auto;
        }

        .post-slide {
            overflow: hidden;
            padding: 0 10px;
            margin-bottom: 3em;
        }

        .post-slide>.post-img {
            position: relative;
        }

        .post-slide>.post-img img {
            width: 100%;
            height: 15em;
        }

        .demo h2 {
            max-width: inherit;
            font-size: 34px;
            font-size: 2.125rem;
            margin: 20px 0 0 0;
        }

        .post-slide>.post-img>.da-thumbs a {
            display: block;
            position: relative;
        }

        .post-slide>.post-img>.da-thumbs a div {
            position: absolute;
            background: rgba(255, 255, 255, 0.5);
            width: 100%;
            height: 100%;
        }

        .post-slide>.post-img>.da-thumbs>a>div>i {
            font-size: 40px;
            position: absolute;
            top: 42%;
            left: 39%;
            color: #3498db;
        }

        .post-slide>.post-img>.icons {
            position: absolute;
            left: 17px;
            bottom: -19px;
            width: 41px;
            height: 41px;
            border-radius: 50%;
            background: #3498db;
            z-index: 2;
        }

        .post-slide>.post-img>.icons>i {
            position: absolute;
            left: 15px;
            top: 14px;
            color: #fff;
        }

        .post-slide>.post-img>.icons:before {
            content: "";
            width: 2px;
            height: 2px;
            background: #fff;
            position: absolute;
            top: 21px;
            left: 21px;
            border-radius: 30px;
            transform: scale(0, 0);
            transition: all 0.3s ease 0s;
        }

        .post-slide>.post-img>.icons:hover:before {
            transform: scale(1, 1);
            width: 37px;
            height: 37px;
            left: 2px;
            top: 2px;
        }

        .post-slide>.post-img>.icons:hover i {
            color: #3498db;
        }

        .post-slide>.post-review {
            border: 1px solid lightgray;
            border-top: none;
            padding: 35px 20px 25px;
            background: #ededed;
            position: relative;
            height: 21em;
        }

        .post-slide>.post-review>.post-bar,
        .post-slide>.post-review>.post-bar>li {
            font-size: 16px;
            font-family: serif, Arial;
            list-style: none;
            padding: 0;
            color: #555555;
            display: inline-block;
        }

        .post-slide>.post-review>.post-bar>li>i {
            color: #777777;
            margin-right: 8px;
        }

        .post-slide>.post-review>.post-bar>li>a {
            text-decoration: none;
            color: #555555;
            font-size: 18px;
        }

        .post-slide>.post-review>.post-bar>li>a:hover {
            color: #3498db;
        }

        .post-review>.post-bar li:after {
            content: "";
            margin-left: 7px;
            color: #221e20;
        }

        .post-review>.post-bar li:last-child:after {
            content: "";
        }

        .post-slide>.post-review>.post-title a {
            margin: 0 0 0px 0;
            color: #444444;
            font-weight: bold;
            font-size: 20px;
            text-decoration: none;
        }

        .post-slide>.post-review>.post-title a:hover {
            text-decoration: none;
            color: #e67e22;
        }

        .post-slide>.post-review>.post-description {
            font-size: 14px;
            line-height: 21px;
            color: #444454;
        }

        .post-slide>.post-review>.post-comment,
        .post-slide>.post-review>.post-comment>li {
            list-style: none;
            padding: 0;
            display: inline-block;
        }

        .post-slide>.post-review>.post-comment li,
        .post-slide>.post-review>.post-comment li a {
            text-decoration: none;
            color: #555555;
            text-transform: uppercase;
            font-size: 11px;
            font-weight: bold;
            transition: color 0.10s linear;
        }

        .post-slide>.post-review>.post-comment li:after {
            content: " |";
            margin: 0 0px;
            color: #3498db;
        }

        .post-slide>.post-review>.post-comment li:last-child:after {
            content: "";
        }

        .post-slide>.post-review>.post-comment li i {
            margin-right: 3px;
        }

        .post-slide>.post-review>.post-comment li a:hover {
            color: #3498db;
        }

        @media only screen and (max-width: 480px) {
            .post-slide {
                padding: 20px;
            }

            .demo {
                width: auto;
                margin-top: 20px;
                margin-right: auto;
                margin-bottom: 0px;
                margin-left: auto;
            }
        }

        @media only screen and (max-width: 990px) {
            .post-slide .post-img {
                width: 100%;
            }

            .post-slide .post-review {
                width: 100%;
                border-bottom: 4px solid #ec3c6a;
            }

            .post-slide .post-bar:before {
                left: 0;
            }

            .post-slide .post-bar:after {
                left: 25px;
            }

            .demo {
                width: 1131px;
                margin-top: 325px;
                margin-right: auto;
                margin-bottom: 0px;
                margin-left: auto;
            }
        }

    </style>
@endsection

@extends('User.layout.main')

@section('content')
    <main>
        <!--/phần 1-->
        <div id="carousel-home">
            <div class="owl-carousel owl-theme">
                @foreach ($sliders as $slider)
                    <div class="owl-slide cover lazy" data-bg="url({{ $slider->thumb }})">
                        <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                            <div class="container">
                                <div class="row justify-content-center justify-content-md-end">
                                    <div class="col-lg-6 static">
                                        <div class="slide-text text-right white">
                                            <h2 class="owl-slide-animated owl-slide-title">{{ $slider->name }}</h2>
                                            <p class="owl-slide-animated owl-slide-subtitle">
                                                {{ $slider->description }}
                                            </p>
                                            <div class="owl-slide-animated owl-slide-cta"><a class="btn_1 btn_scroll"
                                                    href="{{ $slider->url }}" role="button">{{ $slider->button }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!--/owl-slide-->
            </div>
            <div id="icon_drag_mobile"></div>
        </div>
        <!--/ hết phần 1-->

        <!-- menu banner-->
        <ul class="clearfix" id="banners_grid">
            @foreach ($menus as $menu)
                <li>
                    <a href="{{ $menu->id }}-{{ \Str::slug($menu->name, '-') }}.html" class="img_container">
                        <img src="{{ $menu->thumb }}" data-src="{{ $menu->thumb }}" alt="" class="lazy loaded"
                            data-was-processed="true">
                        <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)"
                            style="background-color: rgba(0, 0, 0, 0.5);">
                            <h3> {{ $menu->name }}</h3>
                            <p> {{ $menu->description }}</p>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>

        <!--/ hết phần menu banner-->

        <!--/phần 2--> 
        <div class="pattern_2">
            <div class="container margin_120_100 home_intro">
                <div class="row justify-content-center d-flex align-items-center">
                    <div class="col-lg-5 text-lg-center d-none d-lg-block" data-cue="slideInUp">
                        <figure>
                            <img src="{{ $about->thumb }}" data-src="{{ $about->thumb }}" width="354" height="440"
                                alt="" class="img-fluid lazy">
                            <a href="{{ $about->linkYT }}" class="btn_play" data-cue="zoomIn"
                                data-delay="500"><span class="pulse_bt"><i
                                        class="arrow_triangle-right"></i></span></a>
                        </figure>
                    </div>
                    <div class="col-lg-5 pt-lg-4" data-cue="slideInUp" data-delay="500">
                        <div class="main_title">
                            <span><em></em></span>
                            <h2>Một số lời về chúng tôi</h2>
                            <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                        </div>
                        <p>{!! $about->description !!}</p>
                        <p><img src="teamplate/img/signature.png" width="140" height="50" alt="" class="mt-3"></p>
                    </div>
                </div>
                <!--/row -->
            </div>
            <!--/container -->
        </div>
        <!--/phần 2-->

        <div class="bg_gray">
            <div class="container margin_120_100">
                <div class="row flex-lg-row-reverse">
                    <div class="col-lg-5 offset-lg-1 align-self-center mb-4 mb-md-0">
                        <div class="intro_txt" data-cue="slideInUp" data-delay="500">
                            <div class="main_title">
                                <span><em></em></span>
                                <h2>Why Choose Foore</h2>
                            </div>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                                imperdiet libero id nisi euismod, sed porta est consectetur deserunt.</p>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla pariatur.</p>
                            <p><a href="reservations.html" class="btn_1 mt-2">Reserve a table</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="box_how" data-cue="slideInUp">
                                    <figure><img src="img/lazy-placeholder-100-100-white.png" data-src="img/how_1.svg"
                                            alt="" width="100" height="110" class="lazy"></figure>
                                    <h3>For Every Taste</h3>
                                    <p>Faucibus ante, in porttitor tellus blandit et. Phasellus tincidunt metus lectus
                                        sollicitudin.</p>
                                </div>
                                <div class="box_how" data-cue="slideInUp">
                                    <figure><img src="img/lazy-placeholder-100-100-white.png" data-src="img/how_2.svg"
                                            alt="" width="100" height="110" class="lazy"></figure>
                                    <h3>Fresh Ingredients</h3>
                                    <p>Maecenas pulvinar, risus in facilisis dignissim, quam nisi hendrerit nulla, id
                                        vestibulum.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                                <div class="box_how" data-cue="slideInUp">
                                    <figure><img src="img/lazy-placeholder-100-100-white.png" data-src="img/how_3.svg"
                                            alt="" width="100" height="110" class="lazy"></figure>
                                    <h3>Experienced Chefs</h3>
                                    <p>Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a
                                        feugiat eros.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/container -->
        </div>
        <!--/pattern_2 -->

        <!--/phần 3-->
        <div class="bg_gray">
            <div class="container margin_120_100" data-cue="slideInUp">
                <div class="main_title center mb-5">
                    <span><em></em></span>
                    <h2>Our Daily Menu</h2>
                </div>
                <!-- /main_title -->
                <div class="banner lazy" data-bg="url(img/banner_bg.jpg)">
                    <div class="wrapper d-flex align-items-center justify-content-between opacity-mask"
                        data-opacity-mask="rgba(0, 0, 0, 0.5)">
                        <div>
                            <small>ƯU ĐÃI ĐẶC BIỆT</small>
                            <h3>Thưởng thức Cà phê chỉ với giá {{$product}}đ</h3>
                            <p>dsadsadasdas</p>
                            <a href="reservations.html" class="btn_1">Reserve now</a>
                        </div>
                        <figure class="d-none d-lg-block"><img src="img/banner.svg" alt="" width="200" height="200"
                                class="img-fluid"></figure>
                    </div>
                    <!-- /wrapper -->
                </div>
                <!-- /banner -->
                <div class="container">
                    <div class="food-menu">
                        <!-- Đồ uống mới -->
                        <div class="container margin_60_40">
                            <h2>Đồ uống liên quan</h2>
                            <div class="row small-gutters">
                                @foreach ($products as $key => $product)
                                    <div class="col-6 col-md-4 col-xl-3" data-cue="slideInUp">
                                        <div class="grid_item">
                                            <figure>
                                                <a href="{{ $product->id }}-{{ \Str::slug($product->name, '-') }}">
                                                    <img class="img-fluid lazy" src="{{ $product->thumb }}"
                                                        data-src="{{ $product->thumb }}" alt="loihinh">
                                                    <div class="add_cart"><span class="btn_1">Thêm vô giỏ
                                                            hàng</span></div>
                                                </a>
                                            </figure>
                                            <div class="rating"><i class="icon_star voted"></i><i
                                                    class="icon_star voted"></i><i class="icon_star voted"></i><i
                                                    class="icon_star voted"></i><i class="icon_star"></i>
                                            </div>
                                            <a href="{{ $product->id }}-{{ \Str::slug($product->name, '-') }}">
                                                <h3>{{ $product->name }}</h3>
                                            </a>
                                            <div class="price_box">
                                                <span class="new_price">{{ $product->price }}đ</span>
                                                <span class="old_price">{{ $product->price_sale }}đ</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /row -->
                <p class="text-center"><a href="#0" class="btn_1 outline" data-cue="zoomIn">Xem thêm thực đơn</a></p>
            </div>
            <!-- /container -->
        </div>
        <!--/phần 3-->



        <!--==================== -bài viết mới nhất- ====================-->
        <div class="container demo">
            <div class="row">
                <div class="col-md-12">
                    <div id="news-slider" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
                        <h2>Bài viết mới nhất</h2>
                        <div style="width: 2960px; left: 0px; display: block;">
                            @foreach ($posts as $post)
                                <div class="owl-item" style="width: 370px;">
                                    <div class="post-slide" style="width: 370px;">
                                        <div class="post-img">
                                            <div class="da-thumbs">
                                                <a
                                                    href="{{ 'blog/' . $post->id }}-{{ \Str::slug($post->title, '-') }}.html">
                                                    <img src="{{ $post->thumb }}" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="post-review">
                                            <ul class="post-bar">
                                                <li><i
                                                        class="fa fa-calendar"></i>{{ date('M d, y', strtotime($post->created_at)) }}
                                                </li>
                                                <li><i class="fa fa-user"></i> Người đăng</li>
                                            </ul>
                                            <h3 class="post-title"><a
                                                    href="{{ 'blog/' . $post->id }}-{{ \Str::slug($post->title, '-') }}">{{ $post->title }}</a>
                                            </h3>
                                            <p class="post-description">{{ $post->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!--==================== -End bài viết mới nhất- ====================-->
    </main>
@endsection

@section('script')
    <!-- SPECIFIC SCRIPTS (wizard form) -->
    <script src="teamplate/js/wizard/wizard_scripts.min.js"></script>
    <script src="teamplate/js/wizard/wizard_func.js"></script>

    <script src="teamplate/js/slider.js"></script>
@endsection
