<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title-block')</title>
    <meta name="description" content="Дорамастар-это портал о дорамах">
    <meta name="keywords" content="дорамы, дорамы онлайн, hd">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>

<div class="main">

    @include('inc.header')

    <div class="site_content">
        @include('inc.aside')

       @yield('content')

    </div>


    @include('inc.footer')
</div>
</body>
</html>
