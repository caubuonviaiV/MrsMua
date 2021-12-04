    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- <title> {{ $title }} </title> --}}
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon"> 
    <!-- project css file  -->
    <link rel="stylesheet" href="/teamplate/admin/assets/css/my-task.style.min.css">

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">

@yield('head')