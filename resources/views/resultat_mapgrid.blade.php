@extends('master')
@section('content')

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!--jquery -->
 <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
 <!-- end jquery -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
 <!-- Main css -->
 <link rel="stylesheet" href="{{asset('assets/css/style.css') }}">
 <link rel="stylesheet" href="assets\css\bootstrap.min.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <link rel="stylesheet" href="assets\plugins\fontawesome\css\fontawesome.min.css">
 <link rel="stylesheet" href="assets\plugins\fontawesome\css\all.min.css">

 <link rel="stylesheet" href="assets\plugins\select2\css\select2.min.css">

 <link rel="stylesheet" href="assets\css\style.css">
<title>Annuaire Travaux Généraux </title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta
name="viewport"
content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
/>
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
        </div>
    </div>
</div>
<div class="section-header text-center" style=" margin-bottom: 0px;">
    <div class="container">
    <br><br>
    <span>Choose the</span>
    <h2>Different All Learning Paths</h2>
       <p class="sub-title">Are you looking to join online institutions? Now it's very simple, Sign up with mentoring
          Are you looking to join online institutions? Now it's very simple, Sign up with mentoringAre you looking to join online institutions? Now it's very simple, Sign up with mentoring
          Are you looking to join online institutions? Now it's very simple, Sign up with mentoringAre you looking to join online institutions? Now it's very simple, Sign up with mentoring
          Are you looking to join online institutions? Now it's very simple, Sign up with mentoring
       </p>
    </div>
</div>
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
							<a href="{{url('/resultat')}}" class="grid-view active"><i class="fas fa-th-large"></i></a>
							<a href="{{url('/resultat_list')}}" class="list-view "><i class="fas fa-bars"></i></a>
						</div>
						<div class="sort-by">
							<span class="sort-title">Nombre 2245</span>
							<span class="sortby-fliter">
								<select class="select">
									  <option>Select</option>
									  <option class="sorting">Rating</option>
									  <option class="sorting">Popular</option>
									  <option class="sorting">Latest</option>
									  <option class="sorting">Free</option>
								</select>
							</span>
						</div>
					</div>
				</div>
					<div class="row">
						<div class="col-sm-6 col-md-4 col-xl-4 ">
                            <div class="profile-widget">
                                <div class="user-avatar">
                                    <a href="{{url('/profile')}}">
                                        <img class="img-fluid" alt="User Image" src="assets\img\user\user10.jpg">
                                    </a>
                                    <a href="javascript:void(0)" class="fav-btn">
                                        <i class="far fa-bookmark"></i>
                                    </a>
                                </div>
                                <div class="pro-content">
                                    <h3 class="title">
                                        <a href="{{url('/profile')}}">Julia Washington</a>
                                        <i class="fas fa-check-circle verified"></i>
                                    </h3>
                                    <p class="speciality">DM - Endocrinology</p>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="d-inline-block average-rating">(5)</span>
                                    </div>
                                    <ul class="available-info">
                                        <li>
                                            <i class="fas fa-map-marker-alt"></i> Oklahoma, USA
                                        </li>
                                        <li>
                                             <i class="far fa-clock"></i> Available on Fri, 22 Mar
                                        </li>
                                        <li>
                                            <i class="far fa-money-bill-alt"></i> $275 - $450
                                            <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
                                        </li>
                                    </ul>
                                    <div class="row row-sm">
                                        <div class="col-6">
                                            <a href="#" class="btn view-btn">Telephone</a>
                                        </div>
                                        <div class="col-6">
                                            <a class="btn book-btn" onclick="document.getElementById('id01').style.display='block'">Devis</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
						<div class="col-sm-6 col-md-4 col-xl-4 ">
						<div class="profile-widget">
						<div class="user-avatar">
						<a href="{{url('/profile')}}">
						<img class="img-fluid" alt="User Image" src="assets\img\user\user10.jpg">
						</a>
						<a href="javascript:void(0)" class="fav-btn">
						<i class="far fa-bookmark"></i>
						</a>
						</div>
						<div class="pro-content">
						<h3 class="title">
						<a href="{{url('/profile')}}">Julia Washington</a>
						<i class="fas fa-check-circle verified"></i>
						</h3>
						<p class="speciality">DM - Endocrinology</p>
						<div class="rating">
						<i class="fas fa-star filled"></i>
						<i class="fas fa-star filled"></i>
						<i class="fas fa-star filled"></i>
						<i class="fas fa-star filled"></i>
						<i class="fas fa-star"></i>
						<span class="d-inline-block average-rating">(5)</span>
						</div>
						<ul class="available-info">
						<li>
						<i class="fas fa-map-marker-alt"></i> Oklahoma, USA
						</li>
						<li>
						<i class="far fa-clock"></i> Available on Fri, 22 Mar
						</li>
						<li>
						<i class="far fa-money-bill-alt"></i> $275 - $450
						<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
						</li>
						</ul>
						<div class="row row-sm">
							<div class="col-6">
								<a href="#" class="btn view-btn">Telephone</a>
							</div>
							<div class="col-6">
								<a class="btn book-btn" onclick="document.getElementById('id01').style.display='block'">Devis</a>
							</div>
						</div>
						</div>
						</div>
						</div>
						<div class="col-sm-6 col-md-4 col-xl-4 ">
						<div class="profile-widget">
						<div class="user-avatar">
						<a href="{{url('/profile')}}">
						<img class="img-fluid" alt="User Image" src="assets\img\user\user11.jpg">
						</a>
						<a href="javascript:void(0)" class="fav-btn">
						<i class="far fa-bookmark"></i>
						</a>
						</div>
						<div class="pro-content">
						<h3 class="title">
						<a href="{{url('/profile')}}">Shaun Aponte</a>
						<i class="fas fa-check-circle verified"></i>
						</h3>
						<p class="speciality">UNIX,Calculus,Trigonometry</p>
						<div class="rating">
						<i class="fas fa-star filled"></i>
						<i class="fas fa-star filled"></i>
						<i class="fas fa-star filled"></i>
						<i class="fas fa-star filled"></i>
						<i class="fas fa-star"></i>
						<span class="d-inline-block average-rating">(5)</span>
						</div>
						<ul class="available-info">
						<li>
						<i class="fas fa-map-marker-alt"></i> Indiana, USA
						</li>
						<li>
						<i class="far fa-clock"></i> Available on Fri, 22 Mar
						</li>
						<li>
						<i class="far fa-money-bill-alt"></i> $150 - $350
						<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
						</li>
						</ul>
						<div class="row row-sm">
							<div class="col-6">
								<a href="" class="btn view-btn">Telephone</a>
							</div>
							<div class="col-6">
								<a href="#" class="btn book-btn" onclick="document.getElementById('id01').style.display='block'">Devis</a>
							</div>
						</div>
						</div>
						</div>
						</div>
					</div>
					<div class="load-more text-center">
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

		<div class="row" >
			<div class="col-xl-12 col-lg-12 order-md-last order-sm-last order-last map-left" >
				<div class="row align-items-center mb-4">
					<div class="col-md-6 col-auto mx-auto">
						<div class="section-header text-center" style=" margin-bottom: 0px;">
							<div class="container">
							<br><br>
							<h2>Recommendation pour vous :</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-md-3 col-xl-3 ">
						<div class="profile-widget">
							<div class="user-avatar">
								<a href="{{url('/profile')}}">
									<img class="img-fluid" alt="User Image" src="assets\img\user\user10.jpg">
								</a>
								<a href="javascript:void(0)" class="fav-btn">
									<i class="far fa-bookmark"></i>
								</a>
							</div>
							<div class="pro-content">
								<h3 class="title">
									<a href="{{url('/profile')}}">Julia Washington</a>
									<i class="fas fa-check-circle verified"></i>
								</h3>
								<p class="speciality">DM - Endocrinology</p>
								<div class="rating">
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star"></i>
									<span class="d-inline-block average-rating">(5)</span>
								</div>
								<ul class="available-info">
									<li>
										<i class="fas fa-map-marker-alt"></i> Oklahoma, USA
									</li>
									<li>
										 <i class="far fa-clock"></i> Available on Fri, 22 Mar
									</li>
									<li>
										<i class="far fa-money-bill-alt"></i> $275 - $450
										<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
									</li>
								</ul>
								<div class="row row-sm">
									<div class="col-6">
										<a href="#" class="btn view-btn">Telephone</a>
									</div>
									<div class="col-6">
										<a class="btn book-btn" onclick="document.getElementById('id01').style.display='block'">Devis</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 col-xl-3 ">
						<div class="profile-widget">
							<div class="user-avatar">
								<a href="{{url('/profile')}}">
									<img class="img-fluid" alt="User Image" src="assets\img\user\user10.jpg">
								</a>
								<a href="javascript:void(0)" class="fav-btn">
									<i class="far fa-bookmark"></i>
								</a>
							</div>
							<div class="pro-content">
								<h3 class="title">
									<a href="{{url('/profile')}}">Julia Washington</a>
									<i class="fas fa-check-circle verified"></i>
								</h3>
								<p class="speciality">DM - Endocrinology</p>
								<div class="rating">
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star filled"></i>
									<i class="fas fa-star"></i>
									<span class="d-inline-block average-rating">(5)</span>
								</div>
								<ul class="available-info">
									<li>
										<i class="fas fa-map-marker-alt"></i> Oklahoma, USA
									</li>
									<li>
										 <i class="far fa-clock"></i> Available on Fri, 22 Mar
									</li>
									<li>
										<i class="far fa-money-bill-alt"></i> $275 - $450
										<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
									</li>
								</ul>
								<div class="row row-sm">
									<div class="col-6">
										<a href="#" class="btn view-btn">Telephone</a>
									</div>
									<div class="col-6">
										<a class="btn book-btn" onclick="document.getElementById('id01').style.display='block'">Devis</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 col-xl-3 ">
					<div class="profile-widget">
					<div class="user-avatar">
					<a href="{{url('/profile')}}">
					<img class="img-fluid" alt="User Image" src="assets\img\user\user10.jpg">
					</a>
					<a href="javascript:void(0)" class="fav-btn">
					<i class="far fa-bookmark"></i>
					</a>
					</div>
					<div class="pro-content">
					<h3 class="title">
					<a href="{{url('/profile')}}">Julia Washington</a>
					<i class="fas fa-check-circle verified"></i>
					</h3>
					<p class="speciality">DM - Endocrinology</p>
					<div class="rating">
					<i class="fas fa-star filled"></i>
					<i class="fas fa-star filled"></i>
					<i class="fas fa-star filled"></i>
					<i class="fas fa-star filled"></i>
					<i class="fas fa-star"></i>
					<span class="d-inline-block average-rating">(5)</span>
					</div>
					<ul class="available-info">
					<li>
					<i class="fas fa-map-marker-alt"></i> Oklahoma, USA
					</li>
					<li>
					<i class="far fa-clock"></i> Available on Fri, 22 Mar
					</li>
					<li>
					<i class="far fa-money-bill-alt"></i> $275 - $450
					<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
					</li>
					</ul>
					<div class="row row-sm">
						<div class="col-6">
							<a href="#" class="btn view-btn">Telephone</a>
						</div>
						<div class="col-6">
							<a class="btn book-btn" onclick="document.getElementById('id01').style.display='block'">Devis</a>
						</div>
					</div>
					</div>
					</div>
					</div>
					<div class="col-sm-6 col-md-3 col-xl-3 ">
					<div class="profile-widget">
					<div class="user-avatar">
					<a href="{{url('/profile')}}">
					<img class="img-fluid" alt="User Image" src="assets\img\user\user11.jpg">
					</a>
					<a href="javascript:void(0)" class="fav-btn">
					<i class="far fa-bookmark"></i>
					</a>
					</div>
					<div class="pro-content">
					<h3 class="title">
					<a href="{{url('/profile')}}">Shaun Aponte</a>
					<i class="fas fa-check-circle verified"></i>
					</h3>
					<p class="speciality">UNIX,Calculus,Trigonometry</p>
					<div class="rating">
					<i class="fas fa-star filled"></i>
					<i class="fas fa-star filled"></i>
					<i class="fas fa-star filled"></i>
					<i class="fas fa-star filled"></i>
					<i class="fas fa-star"></i>
					<span class="d-inline-block average-rating">(5)</span>
					</div>
					<ul class="available-info">
					<li>
					<i class="fas fa-map-marker-alt"></i> Indiana, USA
					</li>
					<li>
					<i class="far fa-clock"></i> Available on Fri, 22 Mar
					</li>
					<li>
					<i class="far fa-money-bill-alt"></i> $150 - $350
					<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
					</li>
					</ul>
					<div class="row row-sm">
						<div class="col-6">
							<a href="" class="btn view-btn">Telephone</a>
						</div>
						<div class="col-6">
							<a href="#" class="btn book-btn" onclick="document.getElementById('id01').style.display='block'">Devis</a>
						</div>
					</div>
					</div>
					</div>
					</div>
				</div>
				
				<div class="load-more text-center">
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
			</div>
		   </div>
    </div>
</div>

<div id="id01" class="w3-modal" >
	<div class="w3-modal-content">
	  <div class="w3-container" style="margin-top: 80px;">
	<span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
	 
	  
	<h5  style="font-size: 20px;">Demandez votre devis par ici</h5>
	<button type="button" class="close" aria-label="Close">
	
	</button>
	</div>
	<div class="modal-body">
	<form >
	<div class="row form-row">
	<div class="col-12 col-sm-6">
	<div class="form-group">
	<label>Nom</label>
	<input type="text" class="form-control" >
	</div>
	</div>
	<div class="col-12 col-sm-6">
	<div class="form-group">
	<label>Prenom</label>
	<input type="text" class="form-control" >
	</div>
	</div>
	
	<div class="col-12 col-sm-6">
	<div class="form-group">
	<label>Téléphone</label>
	<input type="email" class="form-control" >
	</div>
	</div>
	<div class="col-12 col-sm-6">
	<div class="form-group">
	<label>Email</label>
	<input type="text"  class="form-control">
	</div>
	</div>
	<div class="col-12 col-sm-6">
	<div class="form-group">
	<label>Code postal</label>
	<input type="text" class="form-control">
	</div>
	</div>
	<div class="col-12 col-sm-6">
	<div class="form-group">
	<label>Ville</label>
	<input type="text" class="form-control" >
	</div>
	</div>
	<div class="col-12">
	  <div class="form-group">
	  <label>Adresse</label>
	  <input type="text" class="form-control" >
	  </div>
	  
	  </div>
	<div class="col-12">
	<div class="form-group">
	<label>Projets</label>
	<input type="text" class="form-control" >
	</div>
	
	</div>
	<div class="col-12">
	
	</div>
	<div class="col-12">
	<div class="from-group">
	  <label>Description</label>
	  <textarea cols="20" rows="3" class="form-control"></textarea>
	</div>
	</div>
	<center>
	  <br><br>
	<button type="submit" class="btn btn-primary  " style="width: 125px;">Sauvegarder</button></center> 
	</form>
	</div>
	</div>
</div>
@stop