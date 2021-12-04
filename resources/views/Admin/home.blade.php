@extends('admin.layout.main')

@section('content')
    <div class="card mb-3">
        <div class="card-header d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
            <h6 class="m-0 fw-bold">Thống kê</h6>
        </div>
        <div class="card-body" style="position: relative;">
            <div class="row g-3 mb-3 row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-4 row-cols-xxl-4">
                <div class="col">
                    <div class="card bg-primary">
                        <div class="card-body text-white d-flex align-items-center">
                            <i class="icofont-paperclip fs-3"></i>
                            <div class="d-flex flex-column ms-3">
                                <h6 class="mb-0">Tổng số hóa đơn</h6>
                                <span class="text-white">{{ $order_count }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-primary">
                        <div class="card-body text-white d-flex align-items-center">
                            <i class="icofont-chart-flow fs-3"></i>
                            <div class="d-flex flex-column ms-3">
                                <h6 class="mb-0">Tổng số sản phẩm</h6>
                                <span class="text-white">{{ $product_count }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-primary">
                        <div class="card-body text-white d-flex align-items-center">
                            <i class="icofont-coins fs-3"></i>
                            <div class="d-flex flex-column ms-3">
                                <h6 class="mb-0">Tổng số bài viết</h6>
                                <span class="text-white">{{ $post_count }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-primary">
                        <div class="card-body text-white d-flex align-items-center">
                            <i class="icofont-coins fs-3"></i>
                            <div class="d-flex flex-column ms-3">
                                <h6 class="mb-0">Tổng số người dùng</h6>
                                <span class="text-white">{{ $acc_count }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
