<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Mentoring</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

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
		<a href="" class="logo">
		<img src="{{asset('admin\assets\img\logo.png')}}" alt="Logo">
		</a>
		<a href="" class="logo logo-small">
		<img src="{{asset('admin\assets\img\logo-small.png')}}" alt="Logo" width="30" height="30">
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


<br><br>
<div class="content">
<div class="container-fluid">
<div class="row">
<div class="col-md-5 col-lg-3" >
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
                    <li class="submenu active">
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
</div>
    <div class="col-md-7 col-lg-9" >
        <div class="card">
            <div class="card-body">
                <form action="{{route('update_prof')}}"> 
                 @csrf
                    <div class="row form-row">
                        <div class="col-12 col-md-12">
                            <div class="form-group">
                                <div class="change-avatar">
                                    <div class="profile-img">
                                        <img src="{{asset('assets\img\user\user.jpg')}}" alt="User Image" style="width: 120px; height:120px;border-radius:4px;"><br><br>
                                    </div>
                                    <div class="upload-img">
                                        <div class="change-photo-btn">
                                            <span><i class="fa fa-upload"></i> Upload Photo</span>
                                            <input type="file" class="upload">
                                        </div>
                                        <small class="form-text text-muted">Allowed JPG, GIF or PNG. Max size of 2MB</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12">
                            <hr>
                                <h5> Details Personnel</h5>
                            <hr>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Nom</label>
                                <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Prénom</label>
                                <input type="text" class="form-control" name="prenom" value="{{\Auth::user()->prenom}}">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Email ID</label>
                                <input type="email" class="form-control" name="email" value="{{\Auth::user()->email}}">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Telephone</label>
                                <input type="text" value="{{\Auth::user()->tel}}" name="tel" class="form-control">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" name="adress" value="{{\Auth::user()->adress}}">
                            </div>
                        </div>
                        <div class="col-12 col-md-12">
                            <hr>
                            <h5 > Details Professionnel</h5>
                            <hr>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Nom entreprise</label>
                                <input type="text" class="form-control" name="nom_societe" value=" {{\Auth::user()->nom_societe}}">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Telephone </label>
                                <input type="text" value="{{\Auth::user()->tel2}}"  name="tel2" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Fix</label>
                                <input type="text" value="{{\Auth::user()->Fix}}" name="Fix" class="form-control">
                        </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Ville</label>
                                <input type="text" class="form-control" name="ville" value="{{\Auth::user()->ville}}">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>code postal</label>
                                <input type="text" class="form-control" name="code_postal" value="{{\Auth::user()->code_postal}}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Adresse entreprise</label>
                                <input type="text" class="form-control" value="{{\Auth::user()->adresse_entreprise}}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" name="description" id="" cols="10" rows="5" >{{\Auth::user()->description}}</textarea>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Heure début</label>
                                <input type="time" class="form-control" name="heure_debut" value="{{\Auth::user()->heure_debut}}">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Heure fin</label>
                                <input type="time" class="form-control" name="heure_fin" value="{{\Auth::user()->heure_fin}}" >
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Numero siret</label>
                                <input type="text" class="form-control" name="seret" value="{{\Auth::user()->seret}}">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Numero Naf</label>
                                <input type="text" class="form-control" name="code_naf" value="{{\Auth::user()->code_naf}}">
                            </div>
                        </div>
                        <div class="col-12 col-md-12">
                            <div class="form-group">
                                <label> libelle</label>
                                <input type="text" class="form-control" name="libelle" value="{{\Auth::user()->libelle}}">
                            </div>
                        </div>
                        <div class="col-12 col-md-12">
                            <hr>
                                <h5> Liens utils</h5>
                            <hr>
                        </div>
                        <div class="col-12 col-md-12">
                            <div class="form-group">
                                <label>Site Internet</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3" style="font-size: 12px;">https://</span>
                                    </div>
                                    <input type="text" class="form-control" id="basic-url" name="siteweb" aria-describedby="basic-addon3" value="{{\Auth::user()->siteweb}}">
                                </div>      
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Site Instagram</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3" style="font-size: 12px;">https://</span>
                                    </div>
                                    <input type="text" name="instagram" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{\Auth::user()->instagram}}">
                                </div>      
                        </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Facebook</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3" style="font-size: 12px;">https://</span>
                                    </div>
                                    <input type="text" name="facebook" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{\Auth::user()->facebook}}" >
                                </div>      
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Linkedin</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3" style="font-size: 12px;">https://</span>
                                    </div>
                                    <input type="text" name="linkdin" class="form-control" id="basic-url" aria-describedby="basic-addon3"value="{{\Auth::user()->linkdin}}" >
                                </div>      
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Google My business</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3" style="font-size: 12px;">https://</span>
                                    </div>
                                    <input type="text" name="google" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{\Auth::user()->google}}">
                                </div>      
                            </div>
                        </div>
                        </div>
                        <div class="submit-section">
                            <button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>



</div>


<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets\js\jquery-3.5.1.min.js"></script>

<script src="{{asset('assets\js\bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('assets\plugins\select2\js\select2.min.js')}}"></script>

<script src="{{asset('assets\js\moment.min.js')}}"></script>
<script src="{{asset('assets\js\bootstrap-datetimepicker.min.js')}}"></script>

<script src="{{asset('assets\plugins\theia-sticky-sidebar\ResizeSensor.js')}}"></script>
<script src="{{asset('assets\plugins\theia-sticky-sidebar\theia-sticky-sidebar.js')}}"></script>

<script src="{{asset('assets\js\script.js')}}"></script>


<script src="{{asset('admin\assets\js\jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('admin\assets\js\feather.min.js')}}"></script>

<script src="{{asset('admin\assets\plugins\slimscroll\jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('admin\assets\plugins\raphael\raphael.min.js')}}"></script>
<script src="{{asset('admin\assets\plugins\morris\morris.min.js')}}"></script>
<script src="{{asset('admin\assets\js\chart.morris.js')}}"></script>

<script src="{{asset('admin\assets\js\script.js')}}"></script>
</body>
</html>