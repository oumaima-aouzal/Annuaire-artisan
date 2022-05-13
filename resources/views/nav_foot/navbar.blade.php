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
      <a class="nav-link btn-login btn-dark" href="{{url('/login')}}"><i class="fas fa-sign-in-alt"></i> Connexion</a>
      </li>
      <li class="nav-item">
      <a class="nav-link btn-login btn-secondary" href="{{url('/register')}}"><i class="fas fa-lock"></i> Inscrire</a>
      </li>
      </ul>
    </nav>
</header>