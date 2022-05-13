<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Mentoring - Profile</title>

<link rel="shortcut icon" type="image/x-icon" href="{{asset('admin\assets\img\favicon.png')}}">

<link rel="stylesheet" href="{{asset('admin\assets\css\bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset('admin\assets\plugins\fontawesome\css\fontawesome.min.css')}}">
<link rel="stylesheet" href="{{asset('admin\assets\plugins\fontawesome\css\all.min.css')}}">

<link rel="stylesheet" href="{{asset('admin\assets\css\feathericon.min.css')}}">

<link rel="stylesheet" href="{{ asset('admin\assets\css\style2.css') }}">

<!--jquery -->
 <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
 <!-- end jquery -->
</head>
<body>

<div class="main-wrapper">

	<div class="header">
        <div class="header-left">
        <a href="index.html" class="logo">
        <img src="{{asset('admin\assets\img\logo.png') }}" alt="Logo">
        </a>
        <a href="index.html" class="logo logo-small">
        <img src="{{asset('admin\assets\img\logo-small.png') }}" alt="Logo" width="30" height="30">
        </a>
        </div>
        
        
        <a href="javascript:void(0);" id="toggle_btn">
          <i class="fe fe-text-align-left"></i>
        </a>
        <a class="mobile_btn" id="mobile_btn">
          <i class="fa fa-bars"></i>
        </a>
        
        
        <ul class="nav user-menu">
            <li class="nav-item dropdown has-arrow">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <span class="user-img"><img class="rounded-circle" src="{{asset('admin\assets\img\profiles\avatar-12.jpg')}}" width="31" alt="Ryan Taylor"></span>
                </a>
                <div class="dropdown-menu">
                    <div class="user-header">
                        <div class="avatar avatar-sm">
                            <img src="{{asset('admin\assets\img\profiles\avatar-12.jpg')}}" alt="User Image" class="avatar-img rounded-circle">
                        </div>
                        <div class="user-text">
                            <h6>Allen Davis</h6>
                        </div>
                    </div>
                    <a class="dropdown-item" href={{url('/espace_pro/profil')}}>Gestion de Profile</a>
                    <a class="dropdown-item" href={{url('/')}}>Visiter le site</a>
                    <a style="margin-top: 11px" class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault();  document.getElementById('logout-form').submit();"> 
                        {{ __('déconnecter') }}
                    </a> 
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>    
    </div>
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="menu-title">
                        <span>Main</span>
                    </li>
                    <li class="active">
                    <a href="index.html"><i data-feather="home"></i> <span>Dashboard</span></a>
                    </li>
                    <li class="submenu">
                        <a href="#"><i data-feather="user-plus"></i> <span>Profile</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="{{url('/espace_pro/profil')}}"> Consulter Profile </a></li>
                            <li><a href="{{url('/espace_pro/modificationprofil')}}"> Modifier Profile </a></li>
                            <li><a href="{{url('/espace_pro/modifictionprofil#password_tab')}}"> Changer mot de passe </a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i data-feather="package"></i> <span> Categories </span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="{{url('/espace_pro/gestioncat')}}">Consulter liste categorie </a></li>
                            <li><a href="{{url('/espace_pro/gestioncat')}}"> Ajouter Categorie </a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i data-feather="file"></i> <span> Villes </span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="{{url('/espace_pro/gestionville')}}">Consulter liste Villes </a></li>
                            <li><a href="{{url('/espace_pro/gestionville')}}">Ajouter ville </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="blank-page.html"><i data-feather="file"></i> <span>Projets</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="#">Consulter liste projet </a></li>
                            <li><a href="#">Ajouter prjet </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>



	
<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col">
<h3 class="page-title">My Profile</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">tableau de bord</a></li>
<li class="breadcrumb-item active">Mon Profil</li>
</ul>
</div>
</div>
</div>

<div class="row">
<div class="col-md-12">
<div class="profile-header">
<div class="row align-items-center">
<div class="col-auto profile-image">
<a href="#">
<img class="rounded-circle" alt="User Image" src="{{asset('admin\assets\img\profiles\avatar-12.jpg')}}">
</a>
</div>
<div class="col ml-md-n2 profile-user-info">
<h4 class="user-name mb-0">{{\Auth::user()->name}}</h4>
<h6 class="text-muted"><a href="" class="__cf_email__" data-cfemail="086964646d666c697e617b48696c656166266b6765">{{\Auth::user()->email}}</a></h6>
<div class="pb-3"><i class="fa fa-map-marker"></i> {{\Auth::user()->adress}}</div>
 <div class="about-text">{{\Auth::user()->description}}.</div>
</div>
<div class="col-auto profile-btn">
</div>
</div>
</div>
<div class="profile-menu">
<ul class="nav nav-tabs nav-tabs-solid">
<li class="nav-item">
<a class="nav-link active" data-toggle="tab" href="#per_details_tab" id="btnper">Info Personnel</a>
</li>
<li class="nav-item">
	<a class="nav-link " data-toggle="tab" href="#pro_details_tab" id="btnpro"> Info Professionnel</a>
</li>
<li class="nav-item">
	<a class="nav-link " data-toggle="tab" href="#links_utils" id="btnlinks">Liens utils</a>
</li>
<li class="nav-item">
	<a class="nav-link" data-toggle="tab" href="#password_tab" id="btnpasse">Changer mot de passe</a>
</li>
</ul>
</div>

<div class="tab-content profile-tab-cont">
<div class="tab-pane fade show active" id="per_details_tab">
<div class="row">
<div class="col-lg-12">
<div class="card">
<div class="card-body">
<h5 class="card-title d-flex justify-content-between">
<span>Infos personnel</span>
<button class="btn btn-primary" ><a class="edit-link" style="color:#fff;"><i class="fa fa-edit mr-1"></i>Modifier</a></button>
</h5>
<div class="row">
<p class="col-sm-2 text-muted mb-0 mb-sm-3">Name</p>
<p class="col-sm-10">{{\Auth::user()->name}}</p>
</div>
<div class="row">
<p class="col-sm-2 text-muted mb-0 mb-sm-3">Prenom</p>
<p class="col-sm-10"> {{\Auth::user()->prenom}}</p>
</div>
<div class="row">
<p class="col-sm-2 text-muted mb-0 mb-sm-3">Email</p>
<p class="col-sm-10">{{\Auth::user()->email}}</p>
</div>
<div class="row">
<p class="col-sm-2 text-muted mb-0 mb-sm-3">Telephone</p>
<p class="col-sm-10">{{\Auth::user()->tel}}</p>
</div>
<div class="row">
<p class="col-sm-2 text-muted mb-0 mb-sm-3">Address</p>
<p class="col-sm-10 ">{{\Auth::user()->adress}}</p>

</div>
</div>
</div>
</div>
</div>

</div>
</div>

<div class="tab-pane fade " id="pro_details_tab">
	
	<div class="row">
	<div class="col-lg-12">
	<div class="card">
	<div class="card-body">
	<h5 class="card-title d-flex justify-content-between">
	<span>Infos Professionnel</span>
	<button class="btn btn-primary" ><a class="edit-link" style="color:#fff;" ><i class="fa fa-edit mr-1" ></i>Modifier</a></button>
	</h5>
	<div class="row">
	<p class="col-sm-2 text-muted mb-0 mb-sm-3">Nom entreprise</p>
	<p class="col-sm-10">{{\Auth::user()->nom_societe}}</p>
	</div>
	<div class="row">
	<p class="col-sm-2 text-muted mb-0 mb-sm-3">Telephone entreprise</p>
	<p class="col-sm-10">{{\Auth::user()->tel2}}</p>
	</div>
	<div class="row">
	<p class="col-sm-2 text-muted mb-0 mb-sm-3">Fix</p>
	<p class="col-sm-10">{{\Auth::user()->Fix}}</p>
	</div>
	<div class="row">
	<p class="col-sm-2 text-muted mb-0 mb-sm-3">Code postal</p>
	<p class="col-sm-10">{{\Auth::user()->code_postal}}</p>
	</div>
	<div class="row">
	<p class="col-sm-2 text-muted mb-0 mb-sm-3">ville</p>
	<p class="col-sm-10 "> {{\Auth::user()->ville}}</p>
	</div>
	<div class="row">
		<p class="col-sm-2 text-muted mb-0 mb-sm-3">Adresse</p>
		<p class="col-sm-10 "> {{\Auth::user()->adress}}</p>
	</div>
	<div class="row">
		<p class="col-sm-2 text-muted mb-0 mb-sm-3">Heure debut</p>
		<p class="col-sm-10 ">{{\Auth::user()->heure_debut}}</p>
	</div>
	<div class="row">
		<p class="col-sm-2 text-muted mb-0 mb-sm-3">Heure fin</p>
		<p class="col-sm-10 ">{{\Auth::user()->heure_fin}}</p>
	</div>
	<div class="row">
	<p class="col-sm-2 text-muted mb-0 mb-sm-3"> No Siret</p>
		<p class="col-sm-10 "> {{\Auth::user()->seret}}</p>
	</div>
	<div class="row">
		<p class="col-sm-2 text-muted mb-0 mb-sm-3">Code Naf</p>
		<p class="col-sm-10 "> {{\Auth::user()->code_naf}}</p>
	</div>
	</div>
	</div>
	</div>
	</div>
	
</div>
	
<div class="tab-content profile-tab-cont">
	<div class="tab-pane fade show active" id="links_utils">
	<div class="row">
	<div class="col-lg-12">
	<div class="card">
	<div class="card-body">
	<h5 class="card-title d-flex justify-content-between">
	<span>Liens utils</span>
	<button class="btn btn-primary" ><a class="edit-link" style="color:#fff;" ><i class="fa fa-edit mr-1"></i>Modifier</a></button>
	</h5>
	<div class="row">
	<p class="col-sm-2 text-muted mb-0 mb-sm-3">Site Internet</p>
	<a href=""><p class="col-sm-10">{{\Auth::user()->facebook}}</p></a>
	</div>
	<div class="row">
	<p class="col-sm-2 text-muted mb-0 mb-sm-3">Google my business</p>
	<a href=""><p class="col-sm-10">{{\Auth::user()->google}}</p></a>
	</div>
	<div class="row">
	<p class="col-sm-2 text-muted mb-0 mb-sm-3">Linkedin</p>
	<a href=""><p class="col-sm-10">{{\Auth::user()->linkdin}}</p></a>
	</div>
	<div class="row">
	<p class="col-sm-2 text-muted mb-0 mb-sm-3">Instagram</p>
	<a href=""><p class="col-sm-10">{{\Auth::user()->instagram}}</p></a>
	</div>
	</div>
	</div>
	</div>
	</div>
	
	</div>

<form action="{{route('updatePasse')}}" method="post">
	@csrf
	<div id="password_tab" class="tab-pane fade">
		<div class="card">
			<div class="card-body">
			<h5 class="card-title">Change Password</h5>
			<div class="row">
			<div class="col-md-10 col-lg-6">
			<form>

			<div class="form-group">
				<label>Old Password</label>
				<div class="row">
					<div class="col-md-10">
					    <input type="password" class="form-control" name="oldpasse">
					</div>
					<div class="col-md-2">
					    <center><span class="fas fa-eye toggle-password" id="eye" onclick="toggles()" ></span><center>
					</div>
				</div>
			</div>

			<div class="form-group">
			<label>New Password</label>
			<input type="password" class="form-control" name="newpasse">
			</div>
			<div class="form-group">
			<label>Confirm Password</label>
			<input type="password" class="form-control" name="newpassetwo">
			</div>
			<button class="btn btn-primary" type="submit">Save Changes</button>
			</form>
			</div>
			</div>
			</div>
		</div>
	</div>
</form>		


</div>
</div>
</div>
</div>
</div>
<script>
	$(document).ready(function(){
		$('body').on('click','#btnpasse',function(){
			$('#password_tab').show();
			$('#per_details_tab').hide();
			$('#links_utils').hide();
			$('#pro_details_tab').hide();
		})
		$('body').on('click','#btnper',function(){
			$('#password_tab').hide();
			$('#per_details_tab').show();
			$('#links_utils').hide();
			$('#pro_details_tab').hide();
		})
		$('body').on('click','#btnpro',function(){
			$('#password_tab').hide();
			$('#per_details_tab').hide();
			$('#links_utils').hide();
			$('#pro_details_tab').show();
		})
		$('body').on('click','#btnlinks',function(){
			$('#password_tab').hide();
			$('#per_details_tab').hide();
			$('#links_utils').show();
			$('#pro_details_tab').hide();
		})

	})

</script>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets\js\jquery-3.5.1.min.js"></script>

<script src="{{asset('admin\assets\js\bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('admin\assets\js\feather.min.js')}}"></script>

<script src="{{asset('admin\assets\plugins\slimscroll\jquery.slimscroll.min.js')}}"></script>

<script src="{{asset('admin\assets\js\script.js')}}"></script>
</body>
</html>