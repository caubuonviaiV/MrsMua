@section('head')
    <!-- SPECIFIC CSS -->
    <link href="teamplate/css/shop.css" rel="stylesheet">
@endsection

@extends('user.layout.main')
@section('content')
    <main>
        <br><br><br><br><br><br>

        <div class="filters_full clearfix">
            <div class="container">
                <form action="">
                    <div class="sort_select">
                        <select name="sort_by" onchange="this.form.submit();">
                            <option {{ request('sort_by') == 'latest' ? 'selected' : ''}} value="latest">Sắp xếp từ trên</option>
                            <option {{ request('sort_by') == 'oldest' ? 'selected' : ''}} value="oldest">Sắp xếp từ dưới</option>
                            <option {{ request('sort_by') == 'name-ascending' ? 'selected' : ''}} value="name-ascending">Sắp xếp tên : A-Z</option>
                            <option {{ request('sort_by') == 'name-descending' ? 'selected' : ''}} value="name-descending">Sắp xếp theo tên : Z-A</option>
                            <option {{ request('sort_by') == 'price-ascending' ? 'selected' : ''}} value="price-ascending">Sắp xếp theo giá : tăng </option>
                            <option {{ request('sort_by') == 'price-descending' ? 'selected' : ''}} value="price-descending">Sắp xếp giá : giảm</option>
                        </select>
                    </div>
                </form>
                <a href="#collapseFilters" data-toggle="collapse" class="btn_filters"><i
                        class="icon_adjust-vert"></i><span>Filters</span></a>
            </div>
        </div>


        <!-- filters_full -->
        <div class="collapse filters_2" id="collapseFilters">
            <div class="container margin_detail">
                <div class="row">
                    <div class="col-md-4">
                        {{-- Categories --}}
                        <div class="filter_type">
                            <h6>Danh mục</h6>
                            <ul>
                                @foreach ($categories as $category)
                                <li>
                                    <label class="container_check">{{$category->name}}<small>{{$count_cat}}</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="filter_type">
                            <h6>Rating</h6>
                            <ul>
                                <li>
                                    <label class="container_check">Superb 9+ <small>06</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">Very Good 8+ <small>12</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">Good 7+ <small>17</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">Pleasant 6+ <small>43</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="filter_type">
                            <h6>Price</h6>
                            <ul>
                                <li>
                                    <label class="container_check">$0 — $50<small>11</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="container_check">$50 — $100<small>08</small>
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
        </div>
        <!-- /filters -->
        {{-- Danh sách sp --}}
        <div class="container margin_60_40">
            <div class="row small-gutters">
                @foreach ($products as $key => $product)
                    <div class="col-6 col-md-4 col-xl-3" data-cue="slideInUp">
                        <div class="grid_item">
                            <figure>
                                <a href="{{ 'thuc-don/' . $product->id }}-{{ \Str::slug($product->name, '-') }}">
                                    <img class="img-fluid lazy" src="{{ $product->thumb }}"
                                        data-src="{{ $product->thumb }}" alt="">
                                    <div class="add_cart"><span class="btn_1">Thêm vô giỏ hàng</span></div>
                                </a>
                            </figure>
                            <div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i
                                    class="icon_star voted"></i><i class="icon_star voted"></i><i
                                    class="icon_star"></i>
                            </div>
                            <a href="{{ $product->id }}-{{ \Str::slug($product->name, '-') }}">
                                <h3>{{ $product->name }}</h3>
                            </a>
                            <div class="price_box">
                                <span class="new_price">{{ $product->price }}</span>
                                <span class="old_price">{{ $product->price_sale }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- pagination --}}
            {!! $products->links() !!}
        </div>
    </main>
@endsection
