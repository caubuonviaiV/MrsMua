@section('head')
    <!-- SPECIFIC CSS -->
    <link href="teamplate/css/order-food.css" rel="stylesheet">
@endsection

@extends('user.layout.main')
@section('content')

@endsection

<main class="pattern_2">
    <form action="" method="post">
    @csrf
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="box_booking_2 style_2">
                    <div class="head">
                        <div class="title">
                            <h3>Thông tin cá nhân </h3>
                        </div>
                    </div>
                    <!-- /head -->
                    <div class="main">
                        <div class="form-group">
                            <label>Họ và tên</label>
                            <input class="form-control" name="name" placeholder="Họ và tên">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Địa chỉ email</label>
                                    <input class="form-control" name="email" placeholder="Địa chỉ email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Điện thoại</label>
                                    <input class="form-control" name="phone" placeholder="Điện thoại">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ đầy đủ</label>
                            <input class="form-control" name="address" placeholder="Địa chỉ đầy đủ">
                        </div>
                        <div class="row">
                            <label>Nội dung ghi chú :</label>
                            <textarea cols="30" rows="10" 
                            class="form-control" name="content" placeholder="Nội dung"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /col -->
            <div class="col-xl-4 col-lg-4" id="sidebar_fixed">
                <div class="box_booking">
                    <div class="head">
                        <h3>Tóm tắt theo thứ tự</h3>
                    </div>
                    <!-- /head -->
                    @php
                        $total = 0;
                        $ship = 15000;
                        $totals = 0;
                    @endphp
                    <div class="main">
                        <ul class="clearfix">
                            @foreach ($products as $key => $product)
                                @php
                                    $price = $product->price_sale != 0 ? $product->price_sale : $product->price;
                                    $priceEnd = $price * $carts[$product->id];
                                    $total += $priceEnd;
                                    $totals = $total + $ship;
                                @endphp
                                <li>
                                    <a>{{ $product->name }} x {{ $carts[$product->id] }}</a>
                                    <span>{{ number_format($price, 0, '', '.') }}Đ</span>
                                </li>
                            @endforeach
                        </ul>

                        <ul class="clearfix">
                            <li>Tổng phụ<span>{{ number_format($total, 0, '', '.')}}Đ</span></li>
                            <li>Phí giao hàng<span>15.000 Đ</span></li>
                            <li class="total">TOÀN BỘ<span>{{ number_format($totals, 0, '', '.') }}Đ</span></li>
                        </ul>

                        <!--End row -->
                        <div class="payment_select" id="paypal">
                            <label class="container_radio">Thanh toán khi nhận
                                <input type="radio" value="pay_later" name="payment_type" checked>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="payment_select">
                            <label class="container_radio">Thanh toán trực tuyến
                                <input type="radio" value="online_payment" name="payment_type">
                                <span class="checkmark"></span>
                            </label>
                            <i class="icon_wallet"></i>
                        </div>
                       
                        <button class="btn_1 full-width mb_5">
                            Đặt Hàng
                         </button>
                         
                        <div class="text-center">
                            <small>Hoặc gọi cho chúng tôi theo số <strong>043248432854</strong></small>
                        </div>
                    </div>
                </div>
            
                <!-- /box_booking -->
            </div>
        
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</form>
</main>
@section('script')
    <!-- SPECIFIC SCRIPTS -->
    <script src="teamplate/js/sticky_sidebar.min.js"></script>
    <script src="teamplate/js/shop_order_func.js"></script>
@endsection
