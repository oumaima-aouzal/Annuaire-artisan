<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Mentoring - Dashboard</title>

<link rel="stylesheet"  href="{{ asset('admin\assets\css\bootstrap.min.css') }}">

<link rel="stylesheet"   href="{{ asset('admin\assets\plugins\fontawesome\css\fontawesome.min.css') }}">
<link rel="stylesheet"  href="{{ asset('admin\assets\plugins\fontawesome\css\all.min.css') }}">

<link rel="stylesheet"  href="{{ asset('admin\assets\css\feathericon.min.css') }}">
<link rel="stylesheet"  href="{{ asset('admin\assets\plugins\morris\morris.css') }}">

<link rel="stylesheet"  href="{{ asset('admin\assets\css\style2.css') }}">
<!--[if lt IE 9]>
			<script src="admin\assets/js/html5shiv.min.js"></script>
			<script src="admin\assets/js/respond.min.js"></script>
		<![endif]-->
</head>
<body style="font-family: poppins,sans-serif"> 
    @include('espace_pro.navfoot.navbar')
    <div style="min-height: 100vh; ">
      @yield('content')  
    </div>
</body>

<link rel="stylesheet"  href="{{ asset('admin\assets\css\style2.css') }}">

<script src="{{ asset('admin\assets\js\jquery-3.5.1.min.js') }}"></script>

<script src="{{ asset('admin\assets\js\bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('admin\assets\js\feather.min.js') }}"></script>

<script src="{{ asset('admin\assets\plugins\slimscroll\jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('admin\assets\plugins\raphael\raphael.min.js') }}"></script>
<script src="{{ asset('admin\assets\plugins\morris\morris.min.js') }}"></script>
<script src="{{ asset('admin\assets\js\chart.morris.js') }}"></script>

<script src="{{ asset('admin\assets\js\script.js') }}"></script>
</html>