@section('head')
    <!--Font-Awesome cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <!-- Tailwind -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.0.4/tailwind.min.css">
@endsection

@extends('user.layout.main')

@section('content')
   <main>
    {{-- <div class="container w-1/2 text-center mx-auto">
        <h1 class="tracking-wider w-full font-bolder mt-12 mb-0">
            <i class="fa fa-id-card" aria-hidden="true"> Log in</i>
        </h1>
        <p class="mt-0 pt-1">Bạn đã có tài khoản? <a href="#" class="text-black underline">Đăng nhập ngay</a></p>
        <button class="mt-5 bg-gray-500 rounded-full w-full h-12 tracking-wide border-black border-solid border-1 focus:outline-none font-                        bold"><i
                class="fa fa-github" aria-hidden="true">
            </i> Đăng nhập với GitHub
            </button>
    </div>

    <div class="container w-1/2 mx-auto  mt-5">
        <form class="text-xl">
            <div class="mt-2">
                <label for="username">Không có tài khoản? Đăng ký</label>
                <input type="text" id="username" name="email"
                    class="w-full h-8 bg-gray-200 border-solid border-2 border-black rounded block mt-2 tracking-                                                     widest pl-2">
            </div>

            <div class="mt-2">
                <label for="password" class="tracking-wide">Mật khẩu</label>
                <input type="password" id="password" name="password"
                    class="w-full h-8 bg-gray-200 border-solid border-2 border-black rounded block mt-2">                                                           tracking-widest pl-2">
            </div>

            <div class="mt-10">
                <button class="btn p-1 outline-none bg-gray-800 text-white w-full rounded-full h-12 font-bold outline-none tracking-wide">
                    Đăng ký</button>
            </div>
        </form>
        {{-- <p class="mt-2 pt-1 text-center"><a href="#" class="text-black underline">Forgot your password?</a></p> --}}
    </div> --}}




    <br> <br> <br>
     <div class="min-h-screen flex flex-col items-center justify-center bg-gray-100">
        <div
            class="
          flex flex-col
          bg-white
          shadow-md
          px-4
          sm:px-6
          md:px-8
          lg:px-10
          py-8
          rounded-3xl
          w-50
          max-w-md
        ">
            {{-- <div class="font-medium self-center text-xl sm:text-3xl text-gray-800">
                Tham gia ngay với chúng tôi
            </div>
            <div class="mt-4 self-center text-xl sm:text-sm text-gray-800">
                Nhập thông tin đăng nhập của bạn để có được tài khoản truy cập
            </div> --}}

            {{-- <div class="container w-1/2 text-center mx-auto">
                <h1 class="tracking-wider w-full font-bolder mt-12 mb-0">
                    <i class="fa fa-id-card" aria-hidden="true"> Log in</i>
                </h1>
                <p class="mt-0 pt-1">Bạn đã có tài khoản? <a href="#" class="text-black underline">Đăng nhập ngay</a></p>
                <button class="mt-5 bg-gray-500 rounded-full w-full h-12 tracking-wide border-black border-solid border-1 focus:outline-none font-                        bold"><i
                        class="fa fa-github" aria-hidden="true">
                    </i> Đăng nhập với GitHub
                    </button>
            </div> --}}

            <div class="mt-10">
                <form action="#" method="POST">
                    @csrf
                    <div class="flex flex-col mb-5">
                        <label for="email" class="mb-1 text-xs tracking-wide text-gray-600">Địa chỉ Email:</label>
                        <div class="relative">
                            <div
                                class="inline-flex
                                items-center
                                justify-center
                                absolute
                                left-0
                                top-0
                                h-full
                                w-10
                                text-gray-400">
                                <i class="fas fa-at text-blue-500"></i>
                            </div>

                            <input id="email" type="email" name="email"
                                class="
                                text-sm
                                placeholder-gray-500
                                pl-10
                                pr-4
                                rounded-2xl
                                border border-gray-400
                                w-full
                                py-2
                                focus:outline-none focus:border-blue-400" placeholder="Nhập Email của bạn" />
                        </div>
                    </div>

                    

                    <div class="flex flex-col mb-6">
                        <label for="password" class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600">Mật khẩu:</label>
                        <div class="relative">
                            <div class="
                                inline-flex
                                items-center
                                justify-center
                                absolute
                                left-0
                                top-0
                                h-full
                                w-10
                                text-gray-400">
                                <span>
                                    <i class="fas fa-lock text-blue-500"></i>
                                </span>
                            </div>

                            <input id="password" type="password" name="password" class="
                                text-sm
                                placeholder-gray-500
                                pl-10
                                pr-4
                                rounded-2xl
                                border border-gray-400
                                w-full
                                py-2
                                focus:outline-none focus:border-blue-400 "
                                placeholder="Enter your password" />
                        </div>
                    </div>

                    <div class="flex w-full">
                        <button type="submit" class="
                            flex
                            mt-2
                            items-center
                            justify-center
                            focus:outline-none
                            text-white text-sm
                            sm:text-base
                            bg-blue-500
                            hover:bg-blue-600
                            rounded-2xl
                            py-2
                            w-full
                            transition
                            duration-150
                            ease-in">
                            <span class="mr-2 uppercase">Đăng nhập</span>
                            <span>
                                <svg class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="flex justify-center items-center mt-6">
            <a href="#" target="_blank"
                class="
            inline-flex
            items-center
            text-gray-700
            font-medium
            text-xs text-center
          ">
                <span class="ml-2">Bạn chưa có tài khoản? <a href="/dang-ky" class="text-xs ml-2 text-blue-500 font-semibold">Đăng nhập ngay</a></span>
            </a>
        </div>
    </div>
   </main>
@endsection
