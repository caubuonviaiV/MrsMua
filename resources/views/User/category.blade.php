@extends('main')

@section('content')
        <!--/phần 1-->
        <div id="carousel-home-2">
            <div class="owl-carousel owl-theme">

                @foreach($sliders as $slider)
                <div class="owl-slide cover lazy" data-bg="url({{ $slider->thumb }})">
                    <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                        <div class="container">
                            <div class="row justify-content-center justify-content-md-start">
                                <div class="col-lg-12 static">
                                    <div class="slide-text text-center white">
                                        <h2 class="owl-slide-animated owl-slide-title">{{ $slider->name }}</h2>
                                        <p class="owl-slide-animated owl-slide-subtitle">
                                            {{ $slider->description }}
                                        </p>
                                        <div class="owl-slide-animated owl-slide-cta"><a class="btn_1"
                                                href="{{ $slider->url }}" role="button">{{ $slider->button }}</a></div>
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
            <div class="frame white"></div>
        </div>
        <!--/ hết phần 1-->



         <!-- menu banner-->
        <ul class="clearfix" id="banners_grid">
            @foreach($menus as $menu)
			<li>
				<a href="{{ $menu->id }}-{{ \Str::slug($menu->name, '-') }}.html" class="img_container">
					<img src="{{ $menu->thumb }}" data-src="{{ $menu->thumb }}" alt="" class="lazy loaded" data-was-processed="true">
					<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)" style="background-color: rgba(0, 0, 0, 0.5);">
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
                            <img src="img/home_1_placeholder.png" data-src="img/home_1.jpg" width="354" height="440"
                                alt="" class="img-fluid lazy">
                            <a href="https://www.youtube.com/watch?v=MO7Hi_kBBBg" class="btn_play"
                                data-cue="zoomIn" data-delay="500"><span class="pulse_bt"><i
                                        class="arrow_triangle-right"></i></span></a>
                        </figure>
                    </div>
                    <div class="col-lg-5 pt-lg-4" data-cue="slideInUp" data-delay="500">
                        <div class="main_title">
                            <span><em></em></span>
                            <h2>Some words about us</h2>
                            <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                        </div>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <p><img src="img/signature.png" width="140" height="50" alt="" class="mt-3"></p>
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
                            <small>Special Offer</small>
                            <h3>Burgher Menu $18 only</h3>
                            <p>Hamburgher, Chips, Mix Sausages, Beer, Muffin</p>
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
                        <h1>
                            What will <span class="primary-color">you</span> eat today?
                        </h1>
                        <p>
                            modsa 
                        </p>

                        <!-- product category -->
                        <!-- <div class="food-category">
                            <div class="zoom play-on-scroll">
                                <button class="active" data-food-type="all">
                                    All food
                                </button>
                            </div>
                            <div class="zoom play-on-scroll delay-2">
                                <button data-food-type="salad">
                                    Salad
                                </button>
                            </div>
                            <div class="zoom play-on-scroll delay-4">
                                <button data-food-type="lorem">
                                    Lorem
                                </button>
                            </div>
                            <div class="zoom play-on-scroll delay-6">
                                <button data-food-type="ipsum">
                                    Ipsum
                                </button>
                            </div>
                            <div class="zoom play-on-scroll delay-8">
                                <button data-food-type="dolor">
                                    Dolor
                                </button>
                            </div>
                        </div> -->
                        <!--end product category -->
        
                        <div class="food-item-wrap all">
                            @foreach($products as $key => $product)
                            <div class="food-item salad-type">
                                <div class="item-wrap bottom-up play-on-scroll">
                                    <div class="item-img">
                                        <div class="img-holder bg-img"
                                        style="background-image: url({{ $product->thumb }});"></div>
                                    </div>
                                    <div class="item-info">
                                        <div>
                                            <a href="{{ $product->id }}-{{ \Str::slug($product->name, '-') }}.html">
                                                <h3>
                                                    {{ $product->name }}
                                                </h3>
                                            </a>
                                            <span>
                                                {!!  \App\Helpers\Helper::price($product->price, $product->price_sale)  !!}
                                            </span>
                                        </div>
                                        <div class="cart-btn">
                                            <i class="bx bx-cart-alt"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                       <!--  <p class="text-center"><a href="#0" class="btn_1 outline" data-cue="zoomIn">Download Menu</a></p> -->
                    </div>
                </div>
            </div>
                <!-- /row -->
                <p class="text-center"><a href="#0" class="btn_1 outline" data-cue="zoomIn">Download Menu</a></p>
            </div>
            <!-- /container -->
        </div>
        <!--/phần 3-->

        <div class="call_section lazy" data-bg="url(img/bg_call_section.jpg)">
            <div class="container clearfix">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6 text-center">
                        <div class="box_1" data-cue="slideInUp">
                            <h2>Kỷ niệm<span>a Special Event with us!</span></h2>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                            <a href="contacts.html" class="btn_1 mt-3">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/call_section-->
@endsection