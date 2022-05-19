<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Mentoring - Mentee List Page</title>

<link rel="shortcut icon" type="image/x-icon" href="{{asset('admin\assets\img\favicon.png')}}">

<link rel="stylesheet" href="{{asset('admin\assets\css\bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset('admin\assets\plugins\fontawesome\css\fontawesome.min.css')}}">
<link rel="stylesheet" href="{{asset('admin\assets\plugins\fontawesome\css\all.min.css')}}">

<link rel="stylesheet" href="{{asset('admin\assets\css\feathericon.min.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" integrity="sha384-ejwKkLla8gPP8t2u0eQyL0Q/4ItcnyveF505U0NIobD/SMsNyXrLti6CWaD0L52l" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('admin\assets\plugins\datatables\datatables.min.css')}}">
<link rel="stylesheet" href="{{asset('admin\assets\css\style2.css')}}">
<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
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
        <span class="user-img"><img class="rounded-circle" src="{{asset('admin\assets\img\profiles\avatar-12.jpg')}}"width="31" alt="Ryan Taylor"></span>
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
        <a class="dropdown-item" href="profile.html">Gestion de Profile</a>
        <a class="dropdown-item" href="settings.html">Visiter le site</a>
        <a class="dropdown-item" href="login.html">Déconnexion</a>
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
                  <li>
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
                  <li class="submenu ">
                      <a href="#"><i data-feather="package"></i> <span> Categories </span> <span class="menu-arrow"></span></a>
                      <ul>
                          <li><a href="{{url('/espace_pro/gestioncat')}}">Consulter liste categorie </a></li>
                          <li><a href="{{url('/espace_pro/gestioncat')}}"> Ajouter Categorie </a></li>
                      </ul>
                  </li>
                  <li class="submenu active">
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
<h3 class="page-title">Gestion des Catégories</h3>
</div>
</div>
</div>
<form action="{{route('afficher')}}">
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
<div class="table-responsive">
<table class="datatable table table-hover table-center mb-0">
<thead>
	<button type="button" class="btn btn-default btn-sm " style="margin-left: 900px; background-color: #5f4be2; color: aliceblue; float: right; "  href="javascript:void(0);" onclick="tst();" >
		<i class="fa fa-plus "></i> Ajouter
	  </button>
	  <script>
		  function tst(){

			alert("cette fonctionnalité est en train de développement");
		  }
	  </script>

<th> Specialité</th>
<th>Catégorie</th>
<th>Action</th>

</tr>
</thead>
<tbody>
@foreach ($result as $item)
<tr>
<td>
<h2 class="table-avatar">
<a href="" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="{{asset('assets/img/'.$item->image_categorie )}}"></a>
<a href="">{{$item->nom_ville}}</a>
</h2>
</td>
<td>{{$item->nom_departement}}</td>

<td><a data-toggle="modal"  class="btn btn-sm bg-danger-light" href="#delete_modal{{$item->id}}">
	<i class="fe fe-trash"></i> Supprimer
	</a></td>
</td>
</tr>
<div class="modal fade" id="delete_modal{{$item->id}}" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="form-content p-2">
                    <h4 class="modal-title">Supprimer</h4>
                    <p class="mb-4">Voule-vous vraiment supprimer?</p>
                    <a type="" href="{{route('delete_ville',[$item->id])}}" class="btn btn-primary" >Supprimer </a> 
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
<script src="{{asset('admin\assets\js\jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('admin\assets\js\bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('admin\assets\js\feather.min.js')}}"></script>
<script src="{{asset('admin\assets\plugins\slimscroll\jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('admin\assets\plugins\datatables\jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin\assets\plugins\datatables\datatables.min.js')}}"></script>
<script src="{{asset('admin\assets\js\script.js')}}"></script>
</body>
</html>