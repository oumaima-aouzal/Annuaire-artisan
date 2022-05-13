@extends('master2')
@section('contents')
<style>
    .dropbtn {
    color: #fe9445;

    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    width: 300px;
    height: 50px;
    }

    .dropbtn:hover, .dropbtn:focus {
    background-color:#fe9445;
    color: #fff;

    }
    .dropbtn2 {
    color: #5f4be2;

    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    width: 300px;
    height: 50px;
    }

    .dropbtn2:hover, .dropbtn2:focus {
    background-color:#5f4be2;
    color: #fff;

    }

    #myInput,#myInput2,#myInput3,#myInput4 {
    box-sizing: border-box;
    background-image: url('searchicon.png');
    background-position: 14px 12px;
    background-repeat: no-repeat;
    font-size: 16px;
    padding: 14px 20px 12px 45px;
    border: none;
    border-bottom: 1px solid #ddd;
    width: 300px;
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
   {{-- content --}}
<div class="map-page">
    <div class="main-wrapper">
        <div class="breadcrumb-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-8 col-12">
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Mentee List</li>
                            </ol>
                        </nav>
                        <h2 class="breadcrumb-title">Are you looking to join online institutions ? </h2>
                    </div>
                    {{-- <div class="col-md-4 col-12">
                    </div> --}}
                </div>
            </div>
        </div>

<section class="section path-section">
                <div class="section-header text-center" style=" margin-bottom: 0px;">
                    <div class="container">
                        <span>Choose the</span>
                        <h2>Different All Learning Paths</h2>
                        <p class="sub-title">Are you looking to join online institutions? Now it's very simple, Sign up with mentoring
                        Are you looking to join online institutions? Now it's very simple, Sign up with mentoringAre you looking to join online institutions? Now it's very simple, Sign up with mentoring
                        Are you looking to join online institutions? Now it's very simple, Sign up with mentoringAre you looking to join online institutions? Now it's very simple, Sign up with mentoring
                        Are you looking to join online institutions? Now it's very simple, Sign up with mentoring
                        </p>
                    </div>
                </div>
</section>
 <div class="content" style=" padding-top: 40px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-8 col-lg-12 order-md-last order-sm-last order-last map-left">
            <div class="row align-items-center mb-4">
                <div class="col-md-6 col-auto mx-auto">
                    <form class="search-form custom-search-form load-more text-center" >
                        <div class="input-group">
                            <input type="text" placeholder="Search Favourites..." class="form-control">
                            <div class="input-group-append ">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form> 
                </div>
                
                <div class="col-md-6 col load-more text-center">
                    <div class="view-icons">
                        <a href="#" class="grid-view active"><i class="fas fa-th-large"></i></a>
                    </div>
                </div>
            </div>

            <div class="row">
            <div class="col-sm-6 col-md-4 col-xl-4 ">
                <div class="card widget-profile user-widget-profile">
                    <div class="card-body">
                        <div class="pro-widget-content">
                            <div class="profile-info-widget">
                                <a href="#" class="booking-user-img">
                                    <img src="assets\img\user\user3.jpg" alt="User Image">
                                </a>
                                <div class="profile-det-info">
                                    <h3><a href="#">Spécialité</a></h3>
                                    <p style="font-weight: bold;"> 12 "Nombre des professionnels de chaque spécialité"</p>
                                    <div class="row row-sm">
                                        <div class="col-6 mx-auto">
                                            <a href="profile.html" class="btn view-btn">Cherche</a>
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
            <div class="col-sm-6 col-md-4 col-xl-4 ">
                <div class="card widget-profile user-widget-profile">
                    <div class="card-body">
                        <div class="pro-widget-content">
                            <div class="profile-info-widget">
                                <a href="#" class="booking-user-img">
                                 <img src="assets\img\user\user3.jpg" alt="User Image">
                                </a>
                                <div class="profile-det-info">
                                    <h3><a href="#">Spécialité</a></h3>
                                    <p style="font-weight: bold;"> 12 "Nombre des professionnels de chaque spécialité"</p>
                                    <div class="row row-sm">
                                        <div class="col-6 mx-auto">
                                            <a href="profile.html" class="btn view-btn">Cherche</a>
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
            <div class="col-sm-6 col-md-4 col-xl-4 ">
                <div class="card widget-profile user-widget-profile">
                    <div class="card-body">
                        <div class="pro-widget-content">
                            <div class="profile-info-widget">
                                <a href="#" class="booking-user-img">
                                 <img src="assets\img\user\user3.jpg" alt="User Image">
                                </a>
                                <div class="profile-det-info">
                                    <h3><a href="#">Spécialité</a></h3>
                                        <p style="font-weight: bold;"> 12 "Nombre des professionnels de chaque spécialité"</p>
                                    <div class="row row-sm">
                                        <div class="col-6 mx-auto">
                                         <a href="profile.html" class="btn view-btn">Cherche</a>
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
            <div class="load-more text-center">
                <div class="blog-pagination mt-4">
                    <nav>
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-double-left"></i></a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item ">
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
            
            <div class="col-xl-4 col-lg-12 theiaStickySidebar">
                <div class="card search-filter">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Search Filter</h4>
                        </div>
                        <br><br><br>
                    <center>
                        <select class="js-example-basic-multiple col-sm-10 mx-auto" name="states[]">
                            <option value="">Choisir département</option>
                            <option value="">omayma</option>
                            <option value="">Wyoming</option>
                        </select>
                    </center>
                    <br><br>
                    <center>
                        <select class="js-example-basic-multiple col-sm-10 mx-auto" name="states[]" >
                            <option value="">Choisir Ville</option>
                            <option value="">omayma</option>
                            <option value="">Wyoming</option>
                        </select>
                    </center>
                    <br><br>
                    <center>
                        <select class="js-example-basic-multiple col-sm-10 mx-auto" name="states[]">
                            <option value="">Choisir Catégorie</option>
                            <option value="">omayma</option>
                            <option value="">Wyoming</option>
                        </select>
                    </center>
                    <br><br>
                    <center>
                        <select class="js-example-basic-multiple col-sm-10 mx-auto" name="states[]" >
                            <option value="">Choisissez Spécialté</option>
                            <option value="">omayma</option>
                            <option value="">omayma</option>
                            <option value="">omayma</option>
                            <option value="">omayma</option>
                            <option value="">Wyoming</option>
                        </select>
                    </center>
                    <script>
                        $(document).ready(function() {
                        $('.js-example-basic-multiple').select2();
                        });
                    </script>
                    <div class="load-more text-center mt-4">
                        <a class="btn btn-primary btn-sm" href="javascript:void(0);" style="width: 200px; height: 35px; text-align: center; font-size: 15px;border: none; background-color:#757575;">Cherche </a>
                    </div>
                </div>
            </div>
        </div>
   </div>
 </div>
    
{{-- end --}} 

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
    <a href="/cdn-cgi/l/email-protection" class="_cf_email_" data-cfemail="224f474c564d504b4c4562475a434f524e470c414d4f">[email&#160;protected]</a>
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
@stop