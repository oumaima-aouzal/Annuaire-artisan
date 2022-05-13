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
     <meta
     name="viewport"
     content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
     />
     <!-- Link Swiper's CSS -->
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <!-- Link Swiper's CSS -->
     <link
     rel="stylesheet"
     href="https://unpkg.com/swiper/swiper-bundle.min.css"
     />
     <link rel="stylesheet" href="assets/css/etole.css">
     <style>
 
       html,
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
         width: 100%;
         height: 100%;
         object-fit: cover;
       }

       .swiper-slide .btn{
        position: absolute;
         text-align: center;
         border-radius:5px;
         cursor: pointer;
         transform: translate(-50%,-50%);
         -ms-transform: translate(-50%,-50%);

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
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

      body {
        background: #000;
        color: #000;
      }

      .swiper {
        width: 100%;
        height: 300px;
        margin-left: auto;
        margin-right: auto;
      }

      .swiper-slide {
        background-size: cover;
        background-position: center;
      }

      .mySwiper2 {
        height: 80%;
        width: 100%;
      }

      .mySwiper {
        height: 20%;
        box-sizing: border-box;
        padding: 10px 0;
      }

      .mySwiper .swiper-slide {
        width: 25%;
        height: 100%;
        opacity: 0.4;
      }

      .mySwiper .swiper-slide-thumb-active {
        opacity: 1;
      }

      .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
     </style>
    
     <script>
       window.console = window.console || function(t) {};
     </script>
     <script>
       if (document.location.search.match(/type=embed/gi)) {
         window.parent.postMessage("resize", "*");
       }
     </script>
     <link rel="stylesheet" href="assets\css\style.css">
    <title>...</title>
    <meta
name="viewport"
content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
/>
<!-- Link Swiper's CSS -->
<link
rel="stylesheet"
href="https://unpkg.com/swiper/swiper-bundle.min.css"
/>

<!-- Demo styles -->
<style>
html,


#sous_cat {
  background: #eee;
  font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
  font-size: 14px;
  color: #000;
  margin: 0;
  padding: 0;
}

.swiper {
  width: 100%;
  padding-top: 50px;
  padding-bottom: 50px;
}

.swiper-slide {
  background-position: center;
  background-size: cover;
  width: 300px;
  height: 300px;
}

.swiper-slide img {
  display: block;
  width: 100%;

}
.swiper-slide .swiper-slide-bn{
  background:transparent;
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  transition: 0.5s;
}
.swiper-slide .swiper-slide-bn:hover{
  background: rgb(153, 153, 153,0.5);

}
.swiper-slide-bn button{
width: 20%;
font-weight: 500;
color: #fff;
font-size: 15px;
bottom: 0;
left: 50%;
transform: translateX(-50%);
position: absolute;
opacity: 0;
transition: 0.5s;

          
}
.swiper-slide-bn:hover button{
  bottom: 35%;
  opacity: 1;
}
</style>





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
    <h2 class="breadcrumb-title">Nom Société : Titre ( Référencement )</h2>
    </div>
    </div>
    </div>
    </div>
    
    
    <div class="content">
    <div class="container-fluid">
    <div class="row">
    <div class="col-md-5 col-lg-4">
        <div class="card booking-card">
            <div class="card-header">
            <h4 class="card-title">Nos Coordonnées : </h4>
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
      <li>Téléphone 1 : <span><button class="btn btn-success">Appelez-nous </button></span></li><br>
      <li><a  onclick="document.getElementById('id02').style.display='block'">
          <img src="assets/img/email.png"  alt="" srcset="" style="width: 25px;height: 25px; ">
          Contactez-Nous :</a>
      </li>
      <li>Téléphone 2 : <span>06.12.45.67.89</span></li>
      <li>Fixe :<span>05.08.06.96.56</span></li>
      <li>Adresse :<span>Texte Adresse </span></li>
      <div class="w3-container">
    
        <li><button class="btn-login btn-primary"  onclick="document.getElementById('id01').style.display='block'">Devis</button><span><a href="#comments"><button class="btn-login btn-secondary" >Rediger un avis</button></a></span></li><br>    
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
    </div>
    
    
    
    </ul>
            </div>
            </div>
            </div>
            </div>
            <div class="card blog-share clearfix">
    <div class="card-header">
    <h4 class="card-title">Réseaux sociaux</h4>
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
            
            <h3 class="blog-title">Lorem Ipsum is simply dummy text of the printing</h3>
            <div class="blog-info clearfix">
            <div class="post-left">
            <ul>
            <li>
            <div class="post-author" >
            <a href="profile.html"><img src="assets\img\globe.png" alt="Post Author" style="width:20px;height:20px;"> <span>Visitez notre site internet</span></a>
            </div>
            </li>
            <li><i class="far fa-clock"></i>08:30 - 17:00 , 24/24h ,7j/7</li>
            <li><a href="#commentaires"><i class="far fa-comments"></i>12 Commentaires</a> </li>
            
            </ul>
            </div>
            </div>
            <div class="blog-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
            <p><br>
              <a class=" btn-login  btn-danger" href="Signaler un probléme.html"><img src="assets/img/danger.png" alt="" srcset="" style="width:20px;height:20px;">
                  Signaler un probléme
              </a>
          </p>
           
          </div>
            </div>
            <div class="card blog-share clearfix">
            <div class="card-header">
            <h4 class="card-title" id="section-projets">Partage</h4>
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
            
    
            <br>
            <!-- Swiper -->
    
        <div 
        style="--swiper-navigation-color: #fff;--swiper-pagination-color: #fff;padding-top: 10px;padding-bottom: 5px;" class="swiper mySwiper2 swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden"
        class="swiper mySwiper2 ">
        <div class="swiper-wrapper" id="swiper-wrapper-0b5d23aa3108b7d96" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);" >
          
          <div class="swiper-slide" >
            <img src="https://swiperjs.com/demos/images/nature-1.jpg" style="height: 300px;" />
            <div class="swiper-slide-bn">
              <button type="button" class="btn btn-block btn-outline-dark">Regarder plus</button>
            </div>
          </div>
      
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-2.jpg" style="height: 300px;" />
            <div class="swiper-slide-bn">
              <button type="button" class="btn btn-block btn-outline-dark">Regarder plus</button>
    
          </div>
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-3.jpg" style="height: 300px;" />
            <div class="swiper-slide-bn">
            <button type="button" class="btn btn-block btn-outline-dark">Regarder plus</button>
    
          </div>
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-4.jpg" style="height: 300px;" />
            <div class="swiper-slide-bn">
              <button type="button" class="btn btn-block btn-outline-dark">Regarder plus</button>
    
          </div>
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-5.jpg" style="height: 300px;" />
            <div class="swiper-slide-bn">
              <button type="button" class="btn btn-block btn-outline-dark">Regarder plus</button>
    
          </div>
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-6.jpg" style="height: 300px;" />
            <div class="swiper-slide-bn">
              <button type="button" class="btn btn-block btn-outline-dark">Regarder plus</button>
    
          </div>
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-7.jpg" style="height: 300px;" />
            <div class="swiper-slide-bn">
              <button type="button" class="btn btn-block btn-outline-dark">Regarder plus</button>
    
          </div>
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-8.jpg" style="height: 300px;" />
            <div class="swiper-slide-bn">
              <button type="button" class="btn btn-block btn-outline-dark">Regarder plus</button>
    
          </div>
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-9.jpg" style="height: 300px;" />
            <div class="swiper-slide-bn">
              <button type="button" class="btn btn-block btn-outline-dark">Regarder plus</button>
    
          </div>
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-10.jpg" style="height: 300px;" />
            <div class="swiper-slide-bn">
              <button type="button" class="btn btn-block btn-outline-dark">Regarder plus</button>
    
          </div>
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
      <div thumbsSlider="" class="swiper mySwiper" style="padding-top: 0px;">
        <div class="swiper-wrapper" >
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-1.jpg" style="height: 50px;" />
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-2.jpg" style="height: 50px;" />
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-3.jpg" style="height: 50px;" />
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-4.jpg" style="height: 50px;" />
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-5.jpg" style="height: 50px;" />
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-6.jpg" style="height: 50px;" />
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-7.jpg" style="height: 50px;" />
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-8.jpg" style="height: 50px;" />
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-9.jpg" style="height: 50px;" />
          </div>
          <div class="swiper-slide">
            <img src="https://swiperjs.com/demos/images/nature-10.jpg" style="height: 50px;" />
          </div>
        </div>
      </div>
    
      <!-- Swiper JS -->
      <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
      <!-- Initialize Swiper -->
      <script>
        var swiper = new Swiper(".mySwiper", {
          spaceBetween: 10,
          slidesPerView: 4,
          freeMode: true,
          watchSlidesProgress: true,
        });
        var swiper2 = new Swiper(".mySwiper2", {
          spaceBetween: 10,
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
          thumbs: {
            swiper: swiper,
          },
        });
      </script>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
            
           
            <br><br><br>
            <div class="card blog-comments clearfix" id="commentaires">
            <div class="card-header">
            <h4 class="card-title">3 Avis pour Nom société</h4>
            </div>
            <div class="card-body pb-0">
            <ul class="comments-list">
            <li>
            <div class="comment">
            <div class="comment-author">
            <img class="avatar" alt="" src="assets\img\user\user4.jpg">
            </div>
            <div class="comment-block">
             <span class="comment-by">
            <span class="blog-author-name">Michelle Fairfax</span>
            </span>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p class="blog-date">Dec 6, 2017</p>
           
            </div>
            </div>
            <ul class="comments-list reply">
              <li>
    <div class="comment mx-auto">
      <div class="comment-block">
        <img src="assets/img/4.jpg" alt="" srcset="" style="width: 200px;height:200px;"  onclick="onClick(this)" class="w3-hover-opacity">
        <img src="assets/img/4.jpg" alt="" srcset="" style="width: 200px;height:200px;"  onclick="onClick(this)" class="w3-hover-opacity">
        <img src="assets/img/4.jpg" alt="" srcset="" style="width: 200px;height:200px;"  onclick="onClick(this)" class="w3-hover-opacity">
       
        
        <br>  
      </div>
    </div>
              </li>
              
            </ul>
            </li>
            <li>
            <div class="comment">
            <div class="comment-author">
            <img class="avatar" alt="" src="assets\img\user\user6.jpg">
            </div>
            <div class="comment-block">
            <span class="comment-by">
            <span class="blog-author-name">Elsie Gilley</span>
            </span>
            <p >Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p class="blog-date">December 11, 2017</p>
            </div>
            </div>
            </li>
            
            </ul>
            </div>
            </div>
            <div class="card new-comment clearfix" id="comments">
            <div class="card-header">
            <h4 class="card-title">Donnez votre avis sur ce professionnel</h4>
            </div>
            <div class="card-body">
            <form>
              <div class="form-group" >
    <label>Laisser un avis : Sélectionnez de 1 à 5 étoiles <span class="text-danger">*</span></label>
    <div class="rating" >
      <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
      <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
      <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
      <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
      <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
    </div>
      
              </div>
              
              
            <div class="form-group">
            <label>Nom & Prénom <span class="text-danger">*</span></label>
            <input type="text" class="form-control">
            </div>
            <div class="form-group">
            <label> Email <span class="text-danger">*</span></label>
            <input type="email" class="form-control">
            </div>
            <div class="form-group">
            <label>Commentaire</label>
            <textarea rows="4" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <label>Ajouter une(des) photo(s)
                
                <label for="files"> </label>
                <input id="files" type="file" multiple/>
         <output id="result"></output>
    
              </label><br><br><br>
    
    
          
                <style> 
                  .thumbnail{
                  
                  height: 200px;
                  margin: 5px;
                  width: 400px;
                  }</style>
                <script>
                    window.onload = function(){
            //Check File API support
            if(window.File && window.FileList && window.FileReader)
            {
                var filesInput = document.getElementById("files");
                filesInput.addEventListener("change", function(event){
                    var files = event.target.files; //FileList object
                    var output = document.getElementById("result");
                    for(var i = 0; i< files.length; i++)
                    {
                        var file = files[i];
                        //Only pics
                        if(!file.type.match('image'))
                            continue;
                        var picReader = new FileReader();
                        picReader.addEventListener("load",function(event){
                            var picFile = event.target;
                            var div = document.createElement("div");
                            div.innerHTML = "<img class='thumbnail' src='" + picFile.result + "'" +
                            "title='" + picFile.name + "'/>";
                            output.insertBefore(div,null);
                        });
                        //Read the image
                        picReader.readAsDataURL(file);
                    }
                });
            }
            else
            {
                console.log("Your browser does not support File API");
            }
        }
                </script>
            </div>
            </div>
            <div class="submit-section">
              <button class="btn btn-primary submit-btn" type="submit">Publier</button>
              </div>
    </div>
    
    </div>
    </div>
    </div>
    
        
    
    
    <script>
            const image_input = document.querySelector("#image_input");
            var uploaded_image = "";
            image_input.addEventListener("change",function(){
            const reader = new FileReader();
           reader.addEventListener("load", () => {
           uploaded_image = reader.result;
           document.querySelector("#display_image").style.backgroundImage = `url(${uploaded_image})`;
           });
           reader.readAsDataURL(this.files[0]);
           })
    </script>
    <script>
              const image_input2 = document.querySelector("#image_input1");
              var uploaded_image2 = "";
              image_input2.addEventListener("change",function(){
              const reader = new FileReader();
             reader.addEventListener("load", () => {
             uploaded_image2 = reader.result;
             document.querySelector("#display_image1").style.backgroundImage = `url(${uploaded_image2})`;
             });
             reader.readAsDataURL(this.files[0]);
             })
    </script>
    <script>
              const image_input3 = document.querySelector("#image_input2");
              var uploaded_image3 = "";
              image_input3.addEventListener("change",function(){
              const reader = new FileReader();
             reader.addEventListener("load", () => {
             uploaded_image3 = reader.result;
             document.querySelector("#display_image2").style.backgroundImage = `url(${uploaded_image3})`;
             });
             reader.readAsDataURL(this.files[0]);
             })
    </script>
    
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets\js\jquery-3.5.1.min.js"></script>

    <script src="assets\js\bootstrap.bundle.min.js"></script>
    
    <script src="assets\plugins\select2\js\select2.min.js"></script>
    
    <script src="assets\js\slick.js"></script>
    
    <script src="assets\js\script.js"></script>
    <!--contactez nous -->
    <div class="w3-container">

  <div id="id02" class="w3-modal">
  <div class="w3-modal-content">
    <div class="w3-container"  style="margin-top: 100px;">
  <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-display-topright">&times;</span>
   
    
  <h5  style="font-size: 20px;"> Contactez-Nous</h5>
  <button type="button" class="close" aria-label="Close">
  
  </button>
  </div>
  <div class="modal-body">
  <form  >
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
    <label> Code postal</label>
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
    <label>Address</label>
    <input type="text" class="form-control" >
    </div>
    </div>
 
  <div class="col-12">
  <div class="form-group">
  <label>Object</label>
  <input type="text" class="form-control" >
  </div>
  </div>
  
  <div class="col-12">
  <div class="from-group">
    <label>Message</label>
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
  </div>

@stop