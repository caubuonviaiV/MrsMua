@section('head')
        <!-- BASE CSS -->
        <link href="../teamplate/css/vendors.min.css" rel="stylesheet">
        <link href="../teamplate/css/style.css" rel="stylesheet">
        <!-- YOUR CUSTOM CSS -->
        <link href="../teamplate/css/custom.css" rel="stylesheet">
        <!-- BLOG CSS -->
        <link href="../teamplate/css/blog.css" rel="stylesheet">
@endsection

@extends('user.layout.main')
    @section('content')
        <main> 
            <div class="container margin_60_40">			
                <div class="row">
                    <div class="col-lg-9">
                        <div class="singlepost">
                            <figure><img alt="" class="img-fluid" src="{{ $post->thumb }}"></figure>
                            <h1>{{ $post->title }}</h1>
                            <div class="postmeta">
                                <ul>
                                    <li><a href="#"><i class="icon_folder-alt"></i> Category</a></li>
                                    <li><i class="icon_calendar"></i> {{ date('d-m-Y', strtotime($post->created_at)) }}</li>
                                    {{-- <li><a href="#"><i class="icon_pencil-edit"></i> Admin</a></li> --}}
                                </ul>
                            </div>
                            <!-- /post meta -->
                            <div class="post-content">
                                <div class="dropcaps">
                                    <p>{{ $post->description }}</p>
                                </div>

                                <p>{!! $post->content !!}</p>
                            </div>
                            <!-- /post -->
                        </div>
                        <!-- /single-post -->

                    </div>
                    <!-- /col -->
                    <div class="fb-comments" data-href="{{($post->id )}}-{{ \Str::slug($post->title, '-') }}.html" data-width="" data-numposts="5"></div>

                    <aside class="col-lg-3">
                        <div class="widget">
                            <div class="widget-title first">
                                <h4>Bài đăng Mới nhất</h4>
                            </div>
                            <ul class="comments-list">
                                @foreach ($postnew as $post)
                                <li>
                                    <div class="alignleft">
                                        <a href="{{($post->id )}}-{{ \Str::slug($post->title, '-') }}.html"><img src="{{ $post->thumb}}" alt=""></a>
                                    </div>
                                    <small>Thể loại - {{ date('d/m/Y', strtotime($post->created_at)) }}</small>
                                    <h3><a href="{{($post->id )}}-{{ \Str::slug($post->title, '-') }}.html" title="">{{ $post->title }}</a></h3>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- /widget -->
                        <div class="widget">
                            <div class="widget-title">
                                <h4>Thể loại</h4>
                            </div>
                            <ul class="cats">
                                <li><a href="#">Food <span>(12)</span></a></li>
                            </ul>
                        </div>
                        <!-- /widget -->
                        {{-- <div class="widget">
                            <div class="widget-title">
                                <h4>Popular Tags</h4>
                            </div>
                            <div class="tags">
                                <a href="#">Food</a>
                                <a href="#">Bars</a>
                                <a href="#">Cooktails</a>
                                <a href="#">Shops</a>
                                <a href="#">Best Offers</a>
                                <a href="#">Transports</a>
                                <a href="#">Restaurants</a>
                            </div>
                        </div> --}}
                        <!-- /widget -->
                    </aside>
                    <!-- /aside -->
                </div>
                <!-- /row -->	
            </div>
            <!-- /container -->
        </main>
    @endsection


    @section('script')
    <script src="../teamplate/js/common_scripts.min.js"></script>
    <script src="../teamplate/js/common_func.js"></script>
    <script src="../teamplate/phpmailer/validate.js"></script>
@endsection
