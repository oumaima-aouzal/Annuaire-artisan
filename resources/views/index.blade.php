@extends('master')
@section('content')

{{-- style & links--}}
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
 <link rel="stylesheet" href="assets\css\bootstrap.min.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <link rel="stylesheet" href="{{asset('assets\plugins\fontawesome\css\fontawesome.min.css')}}">
 <link rel="stylesheet" href="{{asset('assets\plugins\fontawesome\css\all.min.css')}}">

 <link rel="stylesheet" href="{{asset('assets\plugins\select2\css\select2.min.css')}}">

 <link rel="stylesheet" href="{{asset('assets\css\style.css')}}">
<title>Annuaire Travaux Généraux </title>
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
</style>
<style>
.dropbtn {
color: #fe9445;

padding: 16px;
font-size: 18px;
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
font-size: 18px;
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
font-size: 18px;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
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
width: 40%;
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
bottom: 40%;
opacity: 1;
}
</style>

{{-- end style & links--}}
<section class="section section-search">
  <div class="container">
  <div class="banner-wrapper m-auto text-center">
  <div class="banner-header">
  <h1>Search Teacher in <span>Mentoring</span> Appointment</h1>
  <p>Discover the best Mentors & institutions the city nearest to you.</p>
  </div>
  </div>
  </div>
  </section>
<br><br><br>

<section class="section path-section" id="categorie">
<div class="content">
<div class="container-fluid">
<div class="row">
  <div class="section-header text-center">
    <div class="container">
      <span>Liste</span>
      <h2>Catégories</h2>
      <div class="sec-dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <div class="col-md-5 col-lg-4">
    <div class="card search-filter">
      <div class="card-header">
        <h4 class="card-title mb-0">Search Filter</h4>
      </div>
    <br><br><br>
    <center>
      <select class="js-example-basic-single col-sm-10 mx-auto"  name="states[]">
        <option value="">Choisir département</option>
        <option value="">omayma</option>
        <option value="">Wyoming</option>
        <option value="">omayma1</option>
        <option value="">omayma2</option>
        <option value="">omayma3</option>
        <option value="">omayma4</option>
        <option value="">Wyoming</option>
        <option value="">omayma5</option>
        <option value="">omayma6</option>
        <option value="">omayma7</option>
        <option value="">omayma8</option>
        <option value="">Wyoming</option>
      </select>
    </center>
    <br><br>
    <center>
      
      <select class="js-example-basic-single col-sm-10 mx-auto" name="states[]" >
        <option value="">Choisir Ville</option>
        <option value="">omayma</option>

        <option value="">Wyoming</option>
      </select>
    </center>
    <br><br>
    <center>
      
      <select class="js-example-basic-single col-sm-10 mx-auto" name="states[]">
        <option value="">Choisir Catégorie</option>
        <option value="">omayma</option>
        <option value="">Wyoming</option>
      </select>
    </center>
    <br><br>
    <center>
     
      <select class="js-example-basic-single col-sm-10 mx-auto" name="states[]" >
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
      $('.js-example-basic-single').select2();
      });
    </script>
    <div class="load-more text-center mt-4">
    <a class="btn btn-primary btn-sm" href="javascript:void(0);" style="width: 200px; height: 35px; text-align: center; font-size: 15px;border: none; background-color:#757575;">Chercher </a>
    </div>
    </div>
  </div>
  <div class="course-sec col-md-7 col-lg-8">
  <div class="container">
  <div class="row">
  <div class="col-12 col-md-6 col-lg-3">
  <div class="course-item">
  <a href="{{url('/resultat')}}" class="course-img">
  <div class="image-col-merge">
  <img src="assets\img\course\course-01.jpg" alt="learn">
  <div class="course-text">
  <h5>Rénovation Intérieure</h5>
  <div class="d-flex justify-content-between">
  <p>200 Inscrits</p>
  
  </div>
  </div>
  </div>
  </a>
  </div>
  </div>
  <div class="col-12 col-md-6 col-lg-3">
  <div class="course-item">
  <a href="#" class="course-img">
  <div class="image-col-merge">
  <img src="assets\img\course\course-02.jpg" alt="learn">
  <div class="course-text">
  <h5>Catégorie</h5>
  <div class="d-flex justify-content-between">
  <p>200 Inscrits</p>
  
  </div>
  </div>
  </div>
  </a>
  </div>
  </div>
  <div class="col-12 col-md-6 col-lg-3">
  <div class="course-item">
  <a href="#" class="course-img">
  <div class="image-col-merge">
  <img src="assets\img\course\course-03.jpg" alt="learn">
  <div class="course-text">
  <h5>Catégorie</h5>
  <div class="d-flex justify-content-between">
  <p>150 Inscrits</p>
  
  </div>
  </div>
  </div>
  </a>
  </div>
  </div>
  <div class="col-12 col-md-6 col-lg-3">
  <div class="course-item">
  <a href="#" class="course-img">
  <div class="image-col-merge">
  <img src="assets\img\course\course-04.jpg" alt="learn">
  <div class="course-text">
  <h5>Catégorie</h5>
  <div class="d-flex justify-content-between">
  <p>150 Inscrits</p>

  </div>
  </div>
  </div>
  </a>
  </div>
  </div>
  <div class="col-12 col-md-6 col-lg-3">
  <div class="course-item">
  <a href="#" class="course-img">
  <div class="image-col-merge">
  <img src="assets\img\course\course-05.jpg" alt="learn">
  <div class="course-text">
  <h5>Catégorie</h5>
  <div class="d-flex justify-content-between">
  <p>200 Inscrits</p>
  
  </div>
  </div>
  </div>
  </a>
  </div>
  </div>
  <div class="col-12 col-md-6 col-lg-3">
  <div class="course-item">
  <a href="#" class="course-img">
  <div class="image-col-merge">
  <img src="assets\img\course\course-06.jpg" alt="learn">
  <div class="course-text">
  <h5>Catégorie</h5>
  <div class="d-flex justify-content-between">
  <p>200 Inscrits</p>
  
  </div>
  </div>
  </div>
  </a>
  </div>
  </div>
  <div class="col-12 col-md-6 col-lg-3">
  <div class="course-item">
  <a href="#" class="course-img">
  <div class="image-col-merge">
  <img src="assets\img\course\course-07.jpg" alt="learn">
  <div class="course-text">
  <h5>Membre_categorie</h5>
  <div class="d-flex justify-content-between">
  <p>200 Inscrits</p>
  
  </div>
  </div>
  </div>
  </a>
  </div>
  </div>
  <div class="col-12 col-md-6 col-lg-3">
  <div class="course-item">
  <a href="#" class="course-img">
  <div class="image-col-merge">
  <img src="assets\img\course\course-08.jpg" alt="learn">
  <div class="course-text">
  <h5>Membre_categorie</h5>
  <div class="d-flex justify-content-between">
  <p>200 Inscrits</p>
  
  </div>
  </div>
  </div>
  </a>
  </div>
  </div>
  </div>
  </div>
  </div>
  <div class="view-all text-center"><a href="{{url('/categorie')}}" class="btn btn-primary btn-view">Voir Tout</a>
  </div>
</div>
</div>

</div>
  
</section>

<section class="mx-auto" id="sous_cat">
  <div class="section-header text-center">
      <div class="container">
      <span>Liste</span>
      <h2>Spécialités "Sous Catégories"</h2>
   
      <div class="sec-dots">
      <span></span>
      <span></span>
      <span></span>
      </div>
      </div>
  </div>
  <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
         <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
         <div class="swiper-slide-bn">
         <a href="{{url('/resultat')}}"><button type="button" class="btn btn-block btn-outline-dark">Regarder plus</button></a>
        </div>
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
          <div class="swiper-slide-bn">
            <button type="button" class="btn btn-block btn-outline-dark">Regarder plus</button>
          </div>
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
          <div class="swiper-slide-bn">
            <button type="button" class="btn btn-block btn-outline-dark">Regarder plus</button>
          </div>
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
          <div class="swiper-slide-bn">
            <button type="button" class="btn btn-block btn-outline-dark">Regarder plus</button>
          </div>
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
          <div class="swiper-slide-bn">
            <button type="button" class="btn btn-block btn-outline-dark">Regarder plus</button>
          </div>
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
          <div class="swiper-slide-bn">
            <button type="button" class="btn btn-block btn-outline-dark">Regarder plus</button>
          </div>
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
          <div class="swiper-slide-bn">
            <button type="button" class="btn btn-block btn-outline-dark">Regarder plus</button>
          </div>
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
          <div class="swiper-slide-bn">
            <button type="button" class="btn btn-block btn-outline-dark">Regarder plus</button>
          </div>
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
          <div class="swiper-slide-bn">
            <button type="button" class="btn btn-block btn-outline-dark">Regarder plus</button>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>

  <div class="view-all text-center" ><a href="{{url('/sous_categorie')}}" class="btn btn-primary btn-view">Voir Tout</a></div>
</section>

<section class="section how-it-works">
  <div class="container">
  <div class="section-header text-center">
  <span>Comment ça marche ?</span>
  <h2>Cherchez un professionnel prés de chez vous facilement </h2>
  <p class="sub-title">Are you looking to join online institutions? Now it's very simple, Sign up with mentoring</p>
  <div class="sec-dots">
  <span></span>
  <span></span>
  <span></span>
  </div>
  </div>
  <div class="row justify-content-center feature-list">
  <div class="col-12 col-md-4 col-lg-3">
  <div class="feature-box text-center top-box">
  <div class="feature-header">
  <div class="feature-icon">
  <span class="circle bg-green"><i class="fas fa-sign-in-alt"></i></span>
  </div>
  <div class="feature-cont">
  <div class="feature-text">Sign up</div>
  </div>
  </div>
  <p>Are you looking to join online Learning? Now it's very simple, Now Sign up</p>
  <span class="text-green">01</span>
  </div>
  </div>
  <div class="col-12 col-md-4 col-lg-3 offset-lg-1">
  <div class="feature-box text-center">
  <div class="feature-header">
  <div class="feature-icon">
  <span class="circle bg-blue"><i class="material-icons">accessibility</i></span>
  </div>
  <div class="feature-cont">
  <div class="feature-text">Collaborate</div>
  </div>
  </div>
  <p>Collaborate on your own timing, by scheduling with mentor booking</p>
  <span class="text-blue">02</span>
  </div>
  </div>
  <div class="col-12 col-md-4 col-lg-3 offset-lg-1">
  <div class="feature-box text-center top-box">
  <div class="feature-header">
  <div class="feature-icon">
  <span class="circle bg-orange"><i class="material-icons">event_seat</i></span>
  </div>
  <div class="feature-cont">
  <div class="feature-text">Improve & Get Back</div>
  </div>
  </div>
  <p>you can gather different skill set, and you can become mentor too</p>
  <span class="text-orange">03</span>
  </div>
  </div>
  </div>
  </div>
</section>

<section class="section popular-mendors">
<div class="mendor-title">
<div class="section-header text-center">
<div class="container">
<span>Les professionnel les plus demandés </span>
<h2 class="text-white">Popular Mentors</h2>
<p class="sub-title text-white"> Choose your most popular leaning mentors, it will help you to achieve your professional goals..</p>
<div class="sec-dots">
<span></span>
<span></span>
<span></span>
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


<div class="mendor-box">
<div class="mendor-img">
<a href="profile.html">
<img class="img-fluid" alt="" src="assets\img\mendor\mendor-03.jpg" >
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


<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
 <!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });
</script>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets\js\jquery-3.5.1.min.js"></script>
    <script src="{{asset('assets\js\bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets\plugins\theia-sticky-sidebar\ResizeSensor.js')}}"></script>
    <script src="{{asset('assets\plugins\theia-sticky-sidebar\theia-sticky-sidebar.js')}}"></script>
    <script src="{{asset('assets\js\script.js')}}"></script>
    <script src="{{asset('assets\js\slick.js')}}"></script>
    <script src="{{asset('assets\js\script.js')}}"></script> 
    <script src="{{asset('assets\plugins\select2\js\select2.min.js')}}"></script>
@endsection