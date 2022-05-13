
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!--jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- end jquery -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{('assets\css\bootstrap.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets\plugins\fontawesome\css\fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets\plugins\fontawesome\css\all.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets\plugins\select2\css\select2.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets\css\style.css')}}">

 
</head>

<body style="font-family: poppins,sans-serif">
    
    @include('nav_foot.navbar')
    <div style="min-height: 100vh; ">
      @yield('content')  
    </div>
    @include('nav_foot.footer')
   

</body>

    <!-- JS -->
	<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets\js\jquery-3.5.1.min.js"></script>

<script src="{{asset('assets\js\bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('assets\plugins\select2\js\select2.min.js')}}"></script>

<script src="{{asset('assets\js\slick.js')}}"></script>

<script src="{{asset('assets\js\script.js')}}"></script>
</html>