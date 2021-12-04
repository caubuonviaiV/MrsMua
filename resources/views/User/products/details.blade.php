@section('head')
        <!-- BASE CSS -->
        <link href="../teamplate/css/vendors.min.css" rel="stylesheet">
        <link href="../teamplate/css/style.css" rel="stylesheet">
    
        <!-- YOUR CUSTOM CSS -->
        <link href="../teamplate/css/custom.css" rel="stylesheet">

        <!-- SHOP CSS -->
        <link href="../teamplate/css/shop.css" rel="stylesheet">
@endsection

@extends('user.layout.main')
    @section('content')
    <main>
        <div class="container margin_60_40">
            <div class="row">
                <div class="col-lg-6 magnific-gallery">
                    <p>
                        <a href="{{ $product->thumb }}" title="Photo title" data-effect="mfp-zoom-in"><img
                                src="{{ $product->thumb }}" alt="" class="img-fluid"></a>
                    </p>
                    {{-- <p>
                        <a href="img/shop/2-small.jpg" title="Photo title" data-effect="mfp-zoom-in"><img
                                src="img/shop/2-small.jpg" alt="" class="img-fluid lazy"></a>
                    </p> --}}
                </div>
                <div class="col-lg-6" id="sidebar_fixed">
                    <div class="prod_info">
                        <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i
                                class="icon_star voted"></i><i class="icon_star voted"></i><i
                                class="icon_star"></i><em>4 Đánh giá</em>
                        </span>
                        <h1>{{ $title }}</h1>
                        <p>{{ $product->description }}</p>
                        <div class="col-lg-5 col-md-6">
                            <div class="price_main">
                                <span class="new_price">{{ $product->price }}</span>
                                <span class="old_price">{{ $product->price_sale }}</span>
                            </div>
                        </div>

                        <form action="/gio-hang/them-gio-hang" method="post">
                            @if ($product->price !== null)
                                {{-- Số lượng --}}
                                <div class="prod_options">
                                    <div class="row">
                                        <label class="col-xl-5 col-lg-5  col-md-6 col-6">
                                            <strong>Số lượng</strong>
                                        </label>
                                        <div class="col-xl-4 col-lg-5 col-md-6 col-6">
                                            <div class="numbers-row">
                                                <input type="text" value="1" id="quantity_1" class="qty2"
                                                    name="num_product">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Thêm vô giỏ hàng --}}
                                <div class="row">

                                    <div class="col-lg-4 col-md-6">
                                        <button type="submit" class="btn_add_to_cart btn_1">
                                            Thêm vô giỏ hàng
                                        </button>
                                    </div>
                                </div>
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                            @endif
                            @csrf
                        </form>
                    </div>
                    <!-- /prod_info -->
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->

        <div class="tabs_product">
            <div class="container">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a id="tab-A" href="#pane-A" class="nav-link active" data-toggle="tab"
                            role="tab">Miêu tả</a>
                    </li>
                    <li class="nav-item">
                        <a id="tab-B" href="#pane-B" class="nav-link" data-toggle="tab" role="tab">Nhận xét</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /tabs_product -->
        <div class="tab_content_wrapper">
            <div class="container">
                <div class="tab-content" role="tablist">
                    <div id="pane-A" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">
                        <div class="card-header" role="tab" id="heading-A">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapse-A"
                                    aria-expanded="false" aria-controls="collapse-A">
                                    Description
                                </a>
                            </h5>
                        </div>
                        <div id="collapse-A" class="collapse" role="tabpanel" aria-labelledby="heading-A">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        {{ $product->content }}
                                    </div>
                                    <div class="col-md-6">
                                        {!! $product->description !!}
                                        <!-- /table-responsive -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
                        <div class="card-header" role="tab" id="heading-B">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapse-B" aria-expanded="false"
                                    aria-controls="collapse-B">
                                    Reviews
                                </a>
                            </h5>
                        </div>
                        <div id="collapse-B" class="collapse" role="tabpanel" aria-labelledby="heading-B">
                            <div class="card-body">
                                <div class="row justify-content-between">
                                    <div class="col-lg-6">
                                        <div class="review_content">
                                            <div class="clearfix add_bottom_10">
                                                <span class="rating"><i class="icon_star"></i><i
                                                        class="icon_star"></i><i class="icon_star"></i><i
                                                        class="icon_star"></i><i
                                                        class="icon_star empty"></i><em>4.5/5.0</em></span>
                                                <em>Published 3 days ago</em>
                                            </div>
                                            <h4>"Outstanding"</h4>
                                            <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea.
                                                Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere
                                                fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer
                                                petentium cu his.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /row -->
                                <p class="text-right"><a href="leave-review.html" class="btn_1">Leave a
                                        review</a></p>
                            </div>
                            <!-- /card-body -->
                        </div>
                    </div>
                </div>
                <!-- /tab-content -->
            </div>
        </div>

        <!-- Đồ uống liên quan -->
        <div class="container margin_60_40">
            <h2>Đồ uống liên quan</h2>
            <div class="row small-gutters">
                @foreach ($repproduct as $key => $rep)
                <div class="col-6 col-md-4 col-xl-3" data-cue="slideInUp">
                    <div class="grid_item">
                        <figure>
                            <a href="{{ $rep->id }}-{{ \Str::slug($rep->name, '-') }}">
                                <img class="img-fluid lazy" src="{{$rep->thumb}}"
                                    data-src="{{$rep->thumb}}" alt="loihinh">
                                <div class="add_cart"><span class="btn_1">Thêm vô giỏ hàng</span></div>
                            </a>
                        </figure>
                        <div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i
                                class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                        </div>   
                        <a href="{{$rep->id}}-{{ \Str::slug($rep->name, '-') }}">
                            <h3>{{$rep->name}}</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">{{$rep->price}}Đ</span>
                            <span class="old_price">{{$rep->price_sale}}Đ</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </main>
    @endsection

    @section('script')
    <script src="../teamplate/js/common_scripts.min.js"></script>
    <script src="../teamplate/js/common_func.js"></script>
    <script src="../teamplate/phpmailer/validate.js"></script>
    <!-- Shop SCRIPTS -->
    <script src="../teamplate/js/specific_shop.js"></script>
    <script src="../teamplate/js/sticky_sidebar.min.js"></script>
    <script>
        // Sticky sidebar
        $('#sidebar_fixed').theiaStickySidebar({
            minWidth: 991,
            updateSidebarHeight: true,
            additionalMarginTop: 90
        });
    </script>
    @endsection

    

    
