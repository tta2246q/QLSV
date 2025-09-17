<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title-user')</title>
    <link rel="stylesheet" href="{{ asset('/access/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/access/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('/access/css/bootstrap.css') }}">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

</head>
<body>
    @include('layout.header')
    <main>
        @yield('content-user')
    </main>
    @include('layout.footer')


  <script type="text/javascript" src="/access/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="/access/js/bootstrap.js"></script>
  <script type="text/javascript" src="/access/js/custom.js"></script>
</body>
</html>
