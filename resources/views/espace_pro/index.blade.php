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
<div class="col-sm-12">
<h3 class="page-title">Welcome {{\Auth::user()->name}}</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item active">Dashboard</li>
</ul>
</div>
</div>
</div>

<div class="row">
<div class="col-xl-3 col-sm-6 col-12">
<div class="card">
<div class="card-body">
<div class="dash-widget-header">
<span class="dash-widget-icon text-primary bg-primary">
<i class="fe fe-user"></i>
</span>
<div class="dash-count">
<h5>Profile</h5>
</div>
</div>
<div class="dash-widget-info">
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12">
<div class="card">
<div class="card-body">
<div class="dash-widget-header">
<span class="dash-widget-icon text-success bg-success">
<i class="fe-text-align-left"></i>
</span>
<div class="dash-count">
<h5>Villes</h5>
</div>
</div>
<div class="dash-widget-info">


</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12">
<div class="card">
<div class="card-body">
<div class="dash-widget-header">
<span class="dash-widget-icon text-danger bg-danger">
<i class=" fe fe-credit-card"></i>
</span>
<div class="dash-count">
<h5>Catégories</h5>
</div>
</div>
<div class="dash-widget-info">


</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12">
<div class="card">
<div class="card-body">
<div class="dash-widget-header">
<span class="dash-widget-icon text-warning bg-warning">
<i class="fe fe-folder"></i>
</span>
<div class="dash-count">
<h5>Projets</h5>
</div>
</div>
<div class="dash-widget-info">

</div>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-md-6 d-flex">

<div class="card card-table flex-fill">
<div class="card-header">
<h4 class="card-title">List sous Categorie</h4>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-hover table-center mb-0">
<thead>
<tr>
<th>Nom sous Categorie</th>
<th>Nom categorie</th>
<th>Actions</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<h2 class="table-avatar">
<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{asset('admin\assets\img\profiles\avatar-08.jpg')}}" alt="User Image"></a>
<a href="profile.html">James Amen</a>
</h2>
</td>
<td>Maths</td>
<td class="text-center"><a href="profile.html" class="btn btn-sm bg-info-light"><i class="far fa-eye"></i>Consulter</a></td>
</tr>


<tr>
<td>
<h2 class="table-avatar">
<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{asset('admin\assets\img\profiles\avatar-14.jpg')}}" alt="User Image"></a>
<a href="profile.html">Marvin Campbell</a>
</h2>
</td>
<td>Flow chart</td>
<td class="text-center"><a href="profile.html" class="btn btn-sm bg-info-light"><i class="far fa-eye"></i>Consulter</a></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>

</div>
<div class="col-md-6 d-flex">

<div class="card  card-table flex-fill">
<div class="card-header">
<h4 class="card-title">Liste Departement</h4>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-hover table-center mb-0">
<thead>
<tr>
<th>Nom Departement</th>
<th>Nombre ville</th>
<th>Actions</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<h2 class="table-avatar">
<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{asset('admin\assets\img\user\user.jpg')}}" alt="User Image"></a>
<a href="profile.html">Jonathan Doe </a>
</h2>
</td>
<td>256</td>
<td class="text-center"><a href="profile.html" class="btn btn-sm bg-info-light"><i class="far fa-eye"></i> Consulter</a></td>
</tr>
<tr>
<td>
<h2 class="table-avatar">
<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{asset('admin\assets\img\user\user1.jpg')}}" alt="User Image"></a>
<a href="profile.html">Julie Pennington </a>
</h2>
</td>
<td>567</td>
<td class="text-center"><a href="profile.html" class="btn btn-sm bg-info-light"><i class="far fa-eye"></i> Consulter</a></td>
</tr>


<tr>
<td>
<h2 class="table-avatar">
<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{asset('admin\assets\img\user\user4.jpg')}}" alt="User Image"></a>
<a href="profile.html">Patricia Manzi </a>
</h2>
</td>
<td>9548207887</td>
<td class="text-center"><a href="profile.html" class="btn btn-sm bg-info-light"><i class="far fa-eye"></i> Consulter</a></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>

</div>
</div>

</div>
</div>
</div>
<link rel="stylesheet"  href="{{ asset('admin\assets\css\style2.css') }}">

<script src="{{ asset('admin\assets\js\jquery-3.5.1.min.js') }}"></script>

<script src="{{ asset('admin\assets\js\bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('admin\assets\js\feather.min.js') }}"></script>

<script src="{{ asset('admin\assets\plugins\slimscroll\jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('admin\assets\plugins\raphael\raphael.min.js') }}"></script>
<script src="{{ asset('admin\assets\plugins\morris\morris.min.js') }}"></script>
<script src="{{ asset('admin\assets\js\chart.morris.js') }}"></script>

<script src="{{ asset('admin\assets\js\script.js') }}"></script>
</body>
</html>