
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Mentoring</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    
    <link href="assets\img\favicon.png" rel="icon">
    
    <link rel="stylesheet" href="assets\css\bootstrap.min.css">
    
    <link rel="stylesheet" href="{{asset('assets\plugins\fontawesome\css\fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets\plugins\fontawesome\css\all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets\plugins\select2\css\select2.min.css')}}">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="{{asset('assets\css\style2.css')}}">
    <link rel="stylesheet" href="{{asset('assets\css\style.css')}}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    
    <style>
        a{
        text-decoration: none;
        color: #5f4be2;
        }
        h2{
        color: #fe9445;
        }
        .dropbtn {
        color: #fe9445;
    
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
        width: 270px;
        height: 50px;
        }
    
    
    
        #myInput,#myInput2,#myInput3,#myInput4,#myInput1 {
        box-sizing: border-box;
        background-image: url('searchicon.png');
        background-position: 14px 12px;
        background-repeat: no-repeat;
        font-size: 16px;
        padding: 14px 20px 12px 45px;
        border: none;
        border-bottom: 1px solid #ddd;
        width: 270px;
        }
    
        #myInput:focus {outline: 3px solid #ddd;}
        #myInput2:focus {outline: 3px solid #ddd;}
        #myInput3:focus {outline: 3px solid #ddd;}
        #myInput4:focus {outline: 3px solid #ddd;}
    
    
    
    
        .dropdown {
        position: relative;
        display: inline-block;
        }
    
        .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f6f6f6;
        min-width: 230px;
        overflow: auto;
        border: 1px solid #ddd;
        z-index: 1;
        }
    
        .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        }
    
        .dropdown a:hover {background-color: #ddd;}
    
        .show {display: block;}
    </style>
</head>
<body>

<div class="main-wrapper">
    <header class="header">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
                <span class="bar-icon">
                <span></span>
                <span></span>
                <span></span>
                </span>
                </a>
                <a href="{{url('/')}}" class="navbar-brand logo">
                <img src="assets\img\logo.png" class="img-fluid" alt="Logo">
                </a>
             </div>
        <div class="main-menu-wrapper">
        <div class="menu-header">
        <a href="index.html" class="menu-logo">
        <img src="assets\img\logo.png" class="img-fluid" alt="Logo">
        </a>
        <a id="menu_close" class="menu-close" href="javascript:void(0);">
        <i class="fas fa-times"></i>
        </a>
        </div>
        <ul class="main-nav">
        <li>
        <a href="{{url('/')}}">Acceuil</a>
        </li>
        <li>
          <a href="#">Qui nous sommes</a>
        </li>
        <li class="has-submenu">
            <a href="">Categogrie <i class="fas fa-chevron-circle-down"></i></a>
            <ul class="submenu">
                <li><a href="">Blog List</a></li>
                <li><a href="">Blog Grid</a></li>
                <li><a href="">Blog Details</a></li>
            </ul>
         </li>
        <li class="has-submenu">
            <a href="">Spécialité <i class="fas fa-chevron-circle-down"></i></a>
            <ul class="submenu">
                <li><a href="">Blog List</a></li>
                <li><a href="">Blog Grid</a></li>
                <li><a href="">Blog Details</a></li>
            </ul>
        </li>
        <li>
          <a href="#">Blog</a>
        </li>
        <li>
          <a href="{{url('/devis')}}" target="_blank">Devis</a>
        </li>
        <li>
          <a href="{{url('/contact')}}" target="_blank">Contact</a>
        </li>
        </ul>
        </div>
        <ul class="nav header-navbar-rht">
          <li class="nav-item">
          <a class="nav-link btn-login btn-dark" href="login.html"><i class="fas fa-sign-in-alt"></i> Sign up</a>
          </li>
          <li class="nav-item">
          <a class="nav-link btn-login btn-secondary" href="register.html"><i class="fas fa-lock"></i> Sign in</a>
          </li>
          </ul>
        </nav>
    </header>
    {{-- search bar --}}

<section class="section section-search">
<div class="banner-wrapper m-auto text-center">
<div class="search-box" style="margin-left: 50px;">
<form action="#">
<div class="form-search">
<div class="form-inner">
<div class="form-group search-location">
<img src="assets/img/depart.png" style="width: 30px;height:30px;">
<select class="form-control select js-example-basic-single" name="states[]">
<option> Département</option>
<option>Paris 75</option>
<option>Seine et Marne 77</option>
<option>.......</option>
</select>
</div>

<div class="form-group search-location">
<img src="assets/img/ville.png" style="width: 30px;height:30px;">
<select class="form-control select js-example-basic-single" name="states[]">
<option> Ville</option>
<option>Paris</option>
<option>Orly</option>
<option>Melun</option>
</select>
</div>

<div class="form-group search-location">
<img src="assets/img/convertir.png" style="width: 30px;height:30px;">
<select class="form-control select js-example-basic-single" name="states[]">
<option>Spécialité</option>
<option>Plombier</option>
<option>Electricité</option>
<option>Revêtement de sol</option>
</select>
</div>


<button type="submit" class="btn btn-secondary search-btn mt-0">Chercher <i class="fas fa-long-arrow-alt-right"></i></button>

</div>
</div>

<script>
$(document).ready(function() {
$('.js-example-basic-single').select2();
});
</script>
</form>
</div>


</div>

</div>
</div>
</section>
<br><br>
<section class="section path-section">

<div class="section-header text-center" style=" margin-bottom: 0px;">
<div class="container">
<span>Choose the</span>
<h2>Les Spécialités les plus recherchées</h2>
<p class="sub-title">Are you looking to join online institutions? Now it's very simple, Sign up with mentoring
Are you looking to join online institutions? Now it's very simple, Sign up with mentoringAre you looking to join online institutions? Now it's very simple, Sign up with mentoring
Are you looking to join online institutions? Now it's very simple, Sign up with mentoringAre you looking to join online institutions? Now it's very simple, Sign up with mentoring
Are you looking to join online institutions? Now it's very simple, Sign up with mentoring
</p>
</div>
</div>
</section>

<div class="row">
<div class="col-md-3 col-lg-3 ">
<div class="card widget-profile user-widget-profile">
<div class="card-body">
<div class="pro-widget-content">
<div class="profile-info-widget">
<a href="#" class="booking-user-img">
<img src="assets\img\user\user.jpg" alt="User Image">
</a>
<div class="profile-det-info">
<h3><a href="#">Spécialité</a></h3>
<p style="font-weight: bold;"> 12 Inscrits</p>
<div class="row row-sm">
<div class="col-6 mx-auto">
<a href="profile.html" class="btn view-btn">Chercher</a>
</div>
</div>
</div>
</div>
</div>
<div class="mentee-info">
<ul>

</ul>
</div>
</div>
</div>
</div>




<div class="col-md-3 col-lg-3 ">
<div class="card widget-profile user-widget-profile">
<div class="card-body">
<div class="pro-widget-content">
<div class="profile-info-widget">
<a href="#" class="booking-user-img">
<img src="assets\img\user\user9.jpg" alt="User Image">
</a>
<div class="profile-det-info">
<h3><a href="#">Spécialité</a></h3>
<p style="font-weight: bold;"> 12 "Nombre des professionnels de chaque spécialité"</p>
<div class="row row-sm">
<div class="col-6 mx-auto">
<a href="profile.html" class="btn view-btn">Chercher</a>
</div>
</div>

<div class="mentee-details">
</div>
</div>
</div>
</div>
<div class="mentee-info">
<ul>
</ul>
</div>
</div>
</div>
</div>
<div class="col-md-3 col-lg-3 ">
<div class="card widget-profile user-widget-profile">
<div class="card-body">
 <div class="pro-widget-content">
<div class="profile-info-widget">
<a href="#" class="booking-user-img">
<img src="assets\img\user\user10.jpg" alt="User Image">
</a>
<div class="profile-det-info">
<h3><a href="#">Spécialité</a></h3>
<p style="font-weight: bold;"> 12 "Nombre des professionnels de chaque spécialité"</p>
<div class="row row-sm">
<div class="col-6 mx-auto">
<a href="profile.html" class="btn view-btn">Chercher</a>
</div>
</div>

<div class="mentee-details">
</div>
</div>
</div>
</div>
<div class="mentee-info">
<ul>
</ul>
</div>
</div>
</div>
</div>
<div class="col-md-3 col-lg-3 ">
<div class="card widget-profile user-widget-profile">
<div class="card-body">
<div class="pro-widget-content">
<div class="profile-info-widget">
<a href="#" class="booking-user-img">
<img src="assets\img\user\user11.jpg" alt="User Image">
</a>
<div class="profile-det-info">
<h3><a href="#">Spécialité</a></h3>
<p style="font-weight: bold;"> 12 "Nombre des professionnels de chaque spécialité"</p>
<div class="row row-sm">
<div class="col-6 mx-auto">
<a href="profile.html" class="btn view-btn">Chercher</a>
</div>
</div>
<div class="mentee-details">
</div>
</div>
</div>
</div>
<div class="mentee-info">
<ul>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="blog-pagination mt-4">
<nav>
<ul class="pagination justify-content-center">
<li class="page-item disabled">
<a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-double-left"></i></a>
</li>
<li class="page-item">
<a class="page-link" href="#">1</a>
</li>
<li class="page-item active">
<a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
</li>
<li class="page-item">
<a class="page-link" href="#">3</a>
</li>
<li class="page-item">
<a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a>
</li>
</ul>
</nav>
</div>
</div>
</div>
</div>
</div>

</div>
</div>

</div>

<br>
</div>
</div

<br>
<center>
<H3> PUBLICITE</H3>
</center>
<section class="section -mendors">
<div class="mendor-title">
<div class="section-header text-center ">
<div class="container">



</div>
</div>
</div>
</div>
<div class="mendor-list">
<div class="container">
<div class="mendor-slider slick">

<div class="mendor-box">
<div class="mendor-img">
<a href="profile.html">
<img class="img-fluid" alt="" src="assets\img\mendor\mendor-01.jpg">
</a>
<div class="country"><i class="fas fa-map-marker-alt"></i> Paris, France</div>
</div>
<div class="mendor-content">
<h3 class="title"><a href="profile.html">Donna Yancey</a></h3>
<div class="course">
UNIX, Calculus, Trigonometry
</div>
<div class="price-list">
<div class="price">$500 <span>/ hr</span></div>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
</div>
</div>
</div>
</div>


<div class="mendor-box">
<div class="mendor-img">
<a href="profile.html">
<img class="img-fluid" alt="" src="assets\img\mendor\mendor-02.jpg">
</a>
<div class="country"><i class="fas fa-map-marker-alt"></i> Paris, France</div>
</div>
<div class="mendor-content">
<h3 class="title"><a href="profile.html">Donna Yancey</a></h3>
<div class="course">
UNIX, Calculus, Trigonometry
</div>
<div class="price-list">
<div class="price">$500 <span>/ hr</span></div>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
</div>
</div>
 </div>
</div>


<div class="mendor-box">
<div class="mendor-img">
<a href="profile.html">
<img class="img-fluid" alt="" src="assets\img\mendor\mendor-03.jpg">
</a>
<div class="country"><i class="fas fa-map-marker-alt"></i> Paris, France</div>
</div>
<div class="mendor-content">
<h3 class="title"><a href="profile.html">Donna Yancey</a></h3>
<div class="course">
UNIX, Calculus, Trigonometry
</div>
<div class="price-list">
<div class="price">$500 <span>/ hr</span></div>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
</div>
</div>
</div>
</div>


<div class="mendor-box">
<div class="mendor-img">
<a href="profile.html">
<img class="img-fluid" alt="" src="assets\img\mendor\mendor-04.jpg">
</a>
<div class="country"><i class="fas fa-map-marker-alt"></i> Paris, France</div>
</div>
<div class="mendor-content">
<h3 class="title"><a href="profile.html">Donna Yancey</a></h3>
<div class="course">
UNIX, Calculus, Trigonometry
</div>
<div class="price-list">
<div class="price">$500 <span>/ hr</span></div>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
</div>
</div>
</div>
</div>

<center>
<div class="mendor-box">
<div class="mendor-img">
<a href="profile.html">
<img class="img-fluid" alt="" src="assets\img\mendor\mendor-03.jpg">
</a>
<div class="country"><i class="fas fa-map-marker-alt"></i> Paris, France</div>
</div>
<div class="mendor-content">
<h3 class="title"><a href="profile.html">Donna Yancey</a></h3>
<div class="course">
UNIX, Calculus, Trigonometry
</div>
<div class="price-list">
<div class="price">$500 <span>/ hr</span></div>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
</section>

<footer class="footer">

    <div class="footer-top">
    <div class="container-fluid">
    <div class="row">
    <div class="col-lg-3 col-md-6">
    
    <div class="footer-widget footer-about">
    <div class="footer-logo">
    <img src="assets\img\logo-white.png" alt="logo">
    </div>
    <div class="footer-about-content">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
    </div>
    </div>
    
    </div>
    <div class="col-lg-3 col-md-6">
    
    <div class="footer-widget footer-menu">
    <h2 class="footer-title">For Mentee</h2>
    <ul>
    <li><a href="search.html">Search Mentors</a></li>
    <li><a href="login.html">Login</a></li>
    <li><a href="register.html">Register</a></li>
    <li><a href="booking.html">Booking</a></li>
    <li><a href="dashboard-mentee.html">Mentee Dashboard</a></li>
    </ul>
    </div>
    
    </div>
    <div class="col-lg-3 col-md-6">
    
    <div class="footer-widget footer-menu">
    <h2 class="footer-title">For Mentors</h2>
    <ul>
    <li><a href="appointments.html">Appointments</a></li>
    <li><a href="chat.html">Chat</a></li>
    <li><a href="login.html">Login</a></li>
    <li><a href="register.html">Register</a></li>
    <li><a href="dashboard.html">Mentor Dashboard</a></li>
    </ul>
    </div>
    
    </div>
    <div class="col-lg-3 col-md-6">
    
    <div class="footer-widget footer-contact">
    <h2 class="footer-title">Contact Us</h2>
    <div class="footer-contact-info">
    <div class="footer-address">
    <p> 3556 Beech Street, San Francisco,<br> California, CA 94108 </p>
    </div>
    <p>
    +1 315 369 5943
    </p>
    <p class="mb-0">
    <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="224f474c564d504b4c4562475a434f524e470c414d4f">[email&#160;protected]</a>
    </p>
    </div>
    </div>
    
    </div>
    </div>
    </div>
    </div>
    
    
    <div class="footer-bottom">
    <div class="container-fluid">
    
    <div class="copyright">
    <div class="row">
    <div class="col-md-6">
    <div class="copyright-text">
    <p class="mb-0">&copy; 2020 Mentoring. All rights reserved.</p>
    </div>
    </div>
    <div class="col-md-6">
    <div class="social-icon text-md-right">
    <ul>
    <li>
    <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
    </li>
    <li>
    <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
    </li>
    <li>
    <a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    
    </div>
    </div>
    
    </footer>



<!-- LES SCRIPTS-->
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
</script><script src="assets\js\jquery-3.5.1.min.js"></script>

<script src="{{asset('assets\js\bootstrap.bundle.min.js')}}"></script>



<script src="{{asset('assets\js\slick.js')}}"></script>
<script src="{{asset('assets\js\script.js')}}"></script>
</div>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{asset('assets\js\jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('assets\js\bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('assets\plugins\theia-sticky-sidebar\ResizeSensor.js')}}"></script>
<script src="{{asset('assets\plugins\theia-sticky-sidebar\theia-sticky-sidebar.js')}}"></script>

<script src="{{asset('assets\js\script.js')}}"></script>
<script src="{{asset('assets\js\slick.js')}}"></script>
<script src="{{asset('assets\plugins\select2\js\select2.min.js')}}"></script>
<script src="{{asset('assets\js\script.js')}}"></script>



</body>
</html>
