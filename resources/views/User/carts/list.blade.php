@section('head')
    <!-- SPECIFIC CSS -->
    <link href="teamplate/css/shop.css" rel="stylesheet">
@endsection

@extends('user.layout.main')
@section('content')

@endsection
<main>
        @if (count($products) > 0)
        <form method="post">
            @include('admin.alert')
            <div class="bg_gray">
                <div class="container margin_60_40">
                    @php
                        $total = 0;
                        $ship = 20000;
                    @endphp
                    <table class="table table-striped cart-list">
                        <thead>
                            <tr>
                                <th>SẢN PHẨM</th>
                                <th>GIÁ</th>
                                <th>SỐ LƯỢNG</th>
                                <th>Tổng phụ</th>
                                <th> &nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $key => $product)
                                @php
                                    $price = $product->price_sale != 0 ? $product->price_sale : $product->price;
                                    $priceEnd = $price * $carts[$product->id];
                                    $total += $priceEnd;
                                    $totalss = $total + $ship;
                                    
                                @endphp
                                <tr>
                                    <td>
                                        <div class="thumb_cart">
                                            <img src="{{ $product->thumb }}" data-src="{{ $product->thumb }}"
                                                class="lazy" alt="Image">
                                        </div>
                                        <span class="item_cart">{{ $product->name }}</span>
                                    </td>
                                    <td>
                                        <strong>{{ number_format($price, 0, '', '.') }}Đ</strong>
                                    </td>
                                    <td>
                                        <div class="numbers-row">
                                            <input type="text" id="quantity_1" class="qty2"
                                                name="num_product[{{ $product->id }}]"
                                                value="{{ $carts[$product->id] }}">
                                            <div class="inc button_inc">+</div>
                                            <div class="dec button_inc">-</div>
                                        </div>
                                    </td>
                                    <td>
                                        <strong>{{ number_format($priceEnd, 0, '', '.') }}</strong>
                                    </td>
                                    <td class="p-r-15">
                                        <a href="/gio-hang/xoa/{{ $product->id }}" class="action">
                                            <i class="icon_trash_alt"></i></a>
                                    </td>
                                    <td class="options">
                                        <a href="#"><i class="ti-trash"></i></a>
                                    </td>
                                </tr>
                                    
                                @endforeach
                        </tbody>
                    </table>
                    <div class="row add_top_30 flex-sm-row-reverse cart_actions">
                        <div class="col-sm-4 text-right">
                            <input type="submit" class="btn_1 outline" value="Cập nhật giỏ hàng"
                                formaction="/gio-hang/cap-nhat">
                            @csrf
                        </div>
                    </div>
                    <!-- /cart_actions -->
                </div>
            </div>
            <!-- box_cart -->
            <div class="box_cart">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <ul>
                                <li>
                                    <span>Tổng phụ</span> {{ number_format($total, 0, '', '.') }}
                                </li>
                                <li>
                                    <span>Phí giao hàng</span> 20.000đ
                                </li>
                                <li>
                                    <span>TẤT CẢ</span> {{ number_format($totalss, 0, '', '.') }}
                                </li>
                            </ul>
                            <a href="thanh-toan" class="btn_1 full-width cart">Thực hiện thanh toán</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        @else
            <div class="text-center"><h2>Giỏ hàng trống</h2></div>
        @endif
</main>
@section('script')
    <!-- SPECIFIC SCRIPTS -->
    <script src="teamplate/js/specific_shop.js"></script>
@endsection






