@extends('master')
@section('content')

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--jquery -->
     <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
     <!-- end jquery -->
     <link href="https://transloadit.edgly.net/releases/uppy/v1.6.0/uppy.min.css" rel="stylesheet">
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" >
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" ></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
     
     <!-- Main css -->
     <link rel="stylesheet" href="{{asset('assets/css/style1.css') }}">
     <link rel="stylesheet" href="assets\css\bootstrap.min.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="stylesheet" href="assets\plugins\fontawesome\css\fontawesome.min.css">
     <link rel="stylesheet" href="assets\plugins\fontawesome\css\all.min.css">
     <meta
     name="viewport"
     content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
   />
   <!-- Link Swiper's CSS -->
   <link
     rel="stylesheet"
     href="https://unpkg.com/swiper/swiper-bundle.min.css"
   />
     <link rel="stylesheet" href="assets\plugins\select2\css\select2.min.css">
     <meta name="viewport"content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
     <!-- Link Swiper's CSS -->
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <!-- Link Swiper's CSS -->
   
     <link rel="stylesheet" href="assets/css/etole.css">
  

   <!-- Demo styles -->
<style>
  a{
    text-decoration: none;
  }
     body {
    position: relative;
    height: 100%;
        }

        body {
    background: #eee;
    font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
    font-size: 14px;
    color: #000;
    margin: 0;
    padding: 0;
        }

        .swiper {
    width: 100%;
    height: 100%;
        }

        .swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;

    /* Center slide text vertically */
    display: -webkit-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;
        }

        .swiper-slide img {
    display: block;
    width: 90%;
    height: 100%;
    object-fit: cover;
        }
</style>
<link rel="stylesheet" href="assets\css\style.css">
<title>Details-Projet</title>
<meta
name="viewport"
content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
/>


<div class="breadcrumb-bar">
    <div class="container-fluid">
    <div class="row align-items-center">
    <div class="col-md-12 col-12">
    <nav aria-label="breadcrumb" class="page-breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"> Categorie</li>
    <li class="breadcrumb-item " aria-current="page">Sous Catgeorie</li>
    <li class="breadcrumb-item " aria-current="page">Departement</li>
    <li class="breadcrumb-item" aria-current="page">Ville</li>
    </ol>
    </nav>
    <h2 class="breadcrumb-title">Name-societe : text</h2>
    </div>
    </div>
    </div>
    </div>
    
    
    <div class="content  ">
    <div class="container-fluid">
    <div class="row">
    <div class="col-md-5 col-lg-4">
        <div class="card booking-card">
      <div class="card-header">
      <h4 class="card-title">les Informations de l'Artisan</h4>
      </div>
      <div class="card-body">
      
        <div class="booking-user-info">
        <a href="payment-mentee.html" class="booking-user-img">
        <img src="assets\img\user\user2.jpg" alt="User Image">
        </a>
        <div class="booking-info">
        <h4><a href="payment-mentee.html">Nom_societe</a></h4>
        <div class="rating">
        <i class="fas fa-star "></i>
        <i class="fas fa-star filled"></i>
        <i class="fas fa-star filled"></i>
        <i class="fas fa-star filled"></i>
        <i class="fas fa-star filled"></i>
       <span class="d-inline-block average-rating">3 Avis</span>
        </div>
        <div class="mentor-details">
        <p class="user-location"><i class="fas fa-map-marker-alt"></i> Code postal, Ville</p>
        </div>
        </div>
        </div>
        
        
        <div class="booking-summary">
        <div class="booking-item-wrap">
    
      
    <ul class="booking-fee">
        <li>Téléphone 1 : <span><button class="btn btn-success" >Appelez-nous </button></span></li><br>
        <li><a onclick="document.getElementById('id02').style.display='block'">
      <img src="assets/img/email.png" alt="" srcset="" style="width: 25px;height: 25px;">
      Contactez-Nous :</a>
        </li>
        <li>Téléphone 2 : <span>06.12.45.67.89</span></li>
        <li>Fixe :<span>05.08.06.96.56</span></li>
        <li>Adresse :<span>Texte Adresse </span></li>
        <div class="w3-container">
    
          <li><button class="btn-login btn-primary"  onclick="document.getElementById('id01').style.display='block'">Devis</button><span><button class="btn-login btn-secondary" >Rediger un avis</button></span></li>  
    <div id="id01" class="w3-modal">
      <div class="w3-modal-content">
        <div class="w3-container" style="margin-top: 90px;">
    <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
       
        
      <h5 >Demandez votre devis par ici</h5>
      <button type="button" class="close" aria-label="Close">
     
      </button>
      </div>
      <div class="modal-body">
      <form>
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
      <br><br><br>
      <center>
      <button type="submit" class="btn btn-primary  " style="width: 125px;">Sauvegarder</button></center> 
      </form>
      </div>
      </div>
    </div>
    </div>
    
         
       
    
    
    
        <div class="booking-total">
    <ul class="booking-total-list">
        <ul class="btn-toolbar ">
         
        <li>
        
     
    </ul>
      </ul>
      </div>
        </li>
    
      </ul>
        
      
        </div>
        </div>
        
        </div>
      </div>
      <div class="card blog-share clearfix">
    <div class="card-header">
    <h4 class="card-title">Réseaux sociaux:</h4>
    </div>
    <div class="card-body">
    <ul class="social-share">
    <li><a href="#" title="Facebook"><i class="fab fa-facebook"></i></a></li>
    <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
    <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
    <li><a href="#" title="Google Plus"><i class="fab fa-google-plus"></i></a></li>
    <li><a href="#" title="Youtube"><i class="fab fa-youtube"></i></a></li>
    </ul>
    </div>
    </div>
    
    
    
    <div class="card tags-widget">
      <div class="card-header">
      <h4 class="card-title">Les métiers</h4>
      </div>
      <div class="card-body">
      <ul class="tags">
      <li><a href="#" class="tag">Plombier</a></li>
      <li><a href="#" class="tag">Electricité</a></li>
      <li><a href="#" class="tag">Revêtement de sol</a></li>
      <li><a href="#" class="tag">ISOLATION </a></li>
      <li><a href="#" class="tag">CLOISONS ET FAUX PLAFOND</a></li>
      <li><a href="#" class="tag">Serrurerie </a></li>
      </ul>
      </div>
      </div>
          
      <div class="card tags-widget">
        <div class="card-header">
        <h4 class="card-title">Zone d'intervention</h4>
        </div>
        <div class="card-body">
        <ul class="tags">
        <li><a href="#" class="tag">ville1</a></li>
        <li><a href="#" class="tag">ville2</a></li>
        <li><a href="#" class="tag">ville3</a></li>
        <li><a href="#" class="tag">ville4</a></li>
        <li><a href="#" class="tag">ville5</a></li>
        <li><a href="#" class="tag">ville6 </a></li>
        </ul>
        </div>
        </div>
                </div>  
    
      
        
    
    <div class="col-md-7 col-lg-8  sidebar-right theiaStickySidebar">
        <div class="blog-view">
      <div class="blog blog-single-post">
        <h4 class="card-title">Phrase</h4>
     <!-- Swiper -->
     <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
    <img src="assets/img/5.jpg" alt="" srcset="" style="max-width: 100%;height:100%;" class="img-fluid"  onclick="onClick(this)" class="w3-hover-opacity">
    
        </div>
        <div class="swiper-slide">     <img src="assets/img/5.jpg" alt="" srcset="" style="max-width: 100%;height:100%;" class="img-fluid"  onclick="onClick(this)" class="w3-hover-opacity">
        </div>
        <div class="swiper-slide">     <img src="assets/img/5.jpg" alt="" srcset="" style="max-width: 100%;height:100%;" class="img-fluid"  onclick="onClick(this)" class="w3-hover-opacity">
        </div>
        <div class="swiper-slide">     <img src="assets/img/5.jpg" alt="" srcset="" style="max-width: 100%;height:100%;" class="img-fluid"  onclick="onClick(this)" class="w3-hover-opacity">
        </div>
        <div class="swiper-slide">     <img src="assets/img/5.jpg" alt="" srcset="" style="max-width: 100%;height:100%;" class="img-fluid"  onclick="onClick(this)" class="w3-hover-opacity">
        </div>
        <div class="swiper-slide">     <img src="assets/img/5.jpg" alt="" srcset="" style="max-width: 100%;height:100%;" class="img-fluid"  onclick="onClick(this)" class="w3-hover-opacity">
        </div>
        <div class="swiper-slide">     <img src="assets/img/5.jpg" alt="" srcset="" style="max-width: 100%;height:100%;" class="img-fluid"  onclick="onClick(this)" class="w3-hover-opacity">
        </div>
        <div class="swiper-slide"   >  <img src="assets/img/5.jpg" alt="" srcset="" style="max-width: 100%;height:100%;" class="img-fluid"  onclick="onClick(this)" class="w3-hover-opacity">
        </div>
        <div class="swiper-slide">     <img src="assets/img/5.jpg" alt="" srcset="" style="max-width: 100%;height:100%;" class="img-fluid"  onclick="onClick(this)" class="w3-hover-opacity">
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
    
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
    el: ".swiper-pagination",
    clickable: true,
        },
        navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
        },
      });
    </script>
    
    
    <!-- Swiper JS -->
      <div class="blog-info clearfix">
      <br>
      <div class="post-left">
      <ul>
      <li>
      <div class="post-author" >
      <a href="profile.html"><img src="assets\img\globe.png" alt="Post Author" style="width:20px;height:20px;"> <span>Notre site</span></a>
      </div>
      </li>
      <li><i  class="fas fa-map-marker-alt"></i>Code Postal/Ville/Département</li>
      <li><i class="bi bi-calendar-check"></i>13-03-2021</li> 
    
      
      </ul>
      </div>
      </div>
      
      <div class="blog-content">
        <h3>Description du Projet:</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
      
     
    </div>
    <br><br>
    <a href="profile.html #section-projets">
    <button class="btn-login btn-primary" >Plus de Projets</button> </a><span><button class="btn-login btn-danger"  style="float: right;">signaler un probleme</button></span></li>  
    
    
      </div>
     
      
          </div>
    
     
      
      <div class="card blog-share clearfix">
      <div class="card-header">
      <h4 class="card-title">Partager ce profil:</h4>
      </div>
      <div class="card-body">
      <ul class="social-share">
      <li><a href="#" title="Facebook"><i class="fab fa-facebook"></i></a></li>
      <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
      <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
      <li><a href="#" title="Google Plus"><i class="fab fa-google-plus"></i></a></li>
      <li><a href="#" title="Youtube"><i class="fab fa-youtube"></i></a></li>
      </ul>
      </div>
      </div>
      
      <div class="card author-widget clearfix">
    <div class="card-header">
    
    </div>
    
    
    
    
    
    
    
    </div>
    
    </div>
    </div>
    </div>
     
        
       <!--  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      slidesPerGroup: 3,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
        
    function onClick(element) {
    document.getElementById("img01").src = element.src;
    document.getElementById("modal01").style.display = "block";
        }
    
        
        </script>-->
        
      
    
     
    
     <!--FOOTER-->
    
    
      
        
    
    
    <script src="assets\plugins\theia-sticky-sidebar\ResizeSensor.js"></script>
    <script src="assets\plugins\theia-sticky-sidebar\theia-sticky-sidebar.js"></script>
    
    <script src="assets\js\script.js"></script>
    <script src="assets\js\slick.js"></script>
    
    
    
        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets\js\jquery-3.5.1.min.js"></script>
    
        <script src="assets\js\bootstrap.bundle.min.js"></script>
        
        <script src="assets\plugins\select2\js\select2.min.js"></script>
    
        
    
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <!-------  pictures-->
        <script>
         var swiper = new Swiper(".mySwiper", {
     slidesPerView: 2,
     spaceBetween: 40,
     slidesPerGroup: 3,
     loop: true,
     loopFillGroupWithBlank: true,
     pagination: {
       el: ".swiper-pagination",
       clickable: true,
     },
     navigation: {
       nextEl: ".swiper-button-next",
       prevEl: ".swiper-button-prev",
     },
         });
       
         function onClick(element) {
         document.getElementById("img1").src = element.src;
         document.getElementById("tst").style.display = "block";
       }
         
       
       </script>
        
    
      
       <!-- les photos deroulants-->
    <div id="tst" class="w3-modal" onclick="this.style.display='none'" class="mx-auto mt-6">
      <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
      <div class="w3-modal-content w3-animate-zoom">
        <img id="img1" style="width:100%">
      </div>
      
    </div>
    
     
    <div id="id02" class="w3-modal">
      <div class="w3-modal-content">
        <div class="w3-container" style="margin-top: 90px;">
    <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-display-topright">&times;</span>
       
        
      <h5> Contactez-Nous</h5>
      <button type="button" class="close" aria-label="Close">
     
      </button>
      </div>
      <div class="modal-body">
      <form>
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
        <input type="email" class="form-control" >
        </div>
        </div>
        <div class="col-12 col-sm-6">
        <div class="form-group">
        <label>Ville</label>
        <input type="text"  class="form-control">
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
          <label>Objet</label>
          <input type="text" class="form-control" >
          </div>
          </div>
    
    
      <div class="col-12">
    <div class="from-group">
        <label>Msg</label>
        <textarea cols="20" rows="3" class="form-control"></textarea>
    </div>
      </div>
      <br><br><br>
      <center>
      <button type="submit" class="btn btn-primary  " style="width: 125px;">Envoyer</button></center> 
      </form>
      </div>
      </div>
    </div>
@stop