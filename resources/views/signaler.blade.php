@extends('master')
@section('content')
<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Signaler un probléme</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Signaler un probléme</h2>
            </div>
        </div>
    </div>
</div>

    
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-12 theiaStickySidebar">
                <form>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Nom & Prénom <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="votre Nom & Prénom">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Email <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="votre e-mail">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Artisan à Signaler <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Artisan à Signaler">
                    </div>
                    <div class="form-group">
                        <label>Sujet <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="votre Sujet">
                    </div>
                    <div class="form-group">
                        <label>Message <span class="text-danger">*</span></label>
                        <textarea rows="4" class="form-control" placeholder=""></textarea>
                    </div>
                    <div class="form-group"  style="float: right;">
                        <button class="btn btn-primary login-btn" type="submit" style="width: 190px; background-color: #fe9445; border: none;"><a style="color: #fff; " href="#">Envoyer</button></a>
                    </div>
                </form>
            </div>

            <div class="col-lg-4 col-md-12 sidebar-right ">
                <div class="card post-widget">
                    <div class="card-header">
                     <h4 class="card-title">Publicité</h4>
                    </div>
                    <div class="card-body">
                            <ul class="latest-posts">
                            <li>
                                <div class="post-thumb">
                                    <a href="blog-details.html">
                                    <img class="img-fluid" src="assets\img\blog\blog-thumb-01.jpg" alt="">
                                    </a>
                                </div>
                                <div class="post-info">
                                    <h4>
                                    <a href="blog-details.html">Nom de société</a>
                                    </h4>
                                    <p>Catégorie</p>
                                </div>
                            </li>
                            <li>
                                <div class="post-thumb">
                                    <a href="blog-details.html">
                                    <img class="img-fluid" src="assets\img\blog\blog-thumb-02.jpg" alt="">
                                    </a>
                                </div>
                                <div class="post-info">
                                    <h4>
                                    <a href="blog-details.html">nom de société</a>
                                    </h4>
                                    <p>Catégorie</p>
                                </div>
                            </li>
                            <li>
                                <div class="post-thumb">
                                    <a href="blog-details.html">
                                        <img class="img-fluid" src="assets\img\blog\blog-thumb-03.jpg" alt="">
                                    </a>
                                </div>
                                <div class="post-info">
                                    <h4>
                                        <a href="blog-details.html">nom de société</a>
                                    </h4>
                                    <p>Catégorie</p>
                                </div>
                            </li>
                            <li>
                                <div class="post-thumb">
                                    <a href="blog-details.html">
                                        <img class="img-fluid" src="assets\img\blog\blog-thumb-04.jpg" alt="">
                                    </a>
                                </div>
                                <div class="post-info">
                                    <h4>
                                        <a href="blog-details.html">nom de société</a>
                                    </h4>
                                    <p>Catégorie</p>
                                </div>
                            </li>
                            <li>
                                <div class="post-thumb">
                                    <a href="blog-details.html">
                                    <img class="img-fluid" src="assets\img\blog\blog-thumb-05.jpg" alt="">
                                    </a>
                                </div>
                                <div class="post-info">
                                    <h4>
                                        <a href="blog-details.html">nom de société</a>
                                    </h4>
                                    <p>Catégorie</p>
                                </div>
                            </li>
                        </ul><br>
                        <center><a href="#"><button style="font-size: 10px;" type="button" class="btn btn-primary btn-lg">voir plus</button></a></center>
                    </div>
                </div>
                
                
                <div class="card category-widget">
                    <div class="card-header">
                        <h4 class="card-title">Blog Categories</h4>
                    </div>
                    <div class="card-body">
                        <ul class="categories">
                            <li><a href="#">Catégorie <span>(62)</span></a></li>
                            <li><a href="#">Catégorie <span>(27)</span></a></li>
                            <li><a href="#">Catégorie <span>(41)</span></a></li>
                            <li><a href="#">Catégorie <span>(16)</span></a></li>
                            <li><a href="#">Catégorie <span>(55)</span></a></li>
                            <li><a href="#">Catégorie <span>(07)</span></a></li>
                        </ul>
                    </div>
                    <center><a href="#"><button style="font-size: 10px;" type="button" class="btn btn-secondary btn-lg">voir plus</button></a></center>
                </div>
                
                
                <div class="card tags-widget">
                    <div class="card-header">
                        <h4 class="card-title">Spécialité
                        </h4>
                    </div>
                    <div class="card-body">
                        <ul class="tags">
                            <li><a href="#" class="tag">HTML</a></li>
                            <li><a href="#" class="tag">Css</a></li>
                            <li><a href="#" class="tag">Java Script</a></li>
                            <li><a href="#" class="tag">Jquery</a></li>
                            <li><a href="#" class="tag">Wordpress</a></li>
                            <li><a href="#" class="tag">Php</a></li>
                            <li><a href="#" class="tag">Angular js</a></li>
                            <li><a href="#" class="tag">React js</a></li>
                            <li><a href="#" class="tag">Vue js</a></li>
                            <li><a href="#" class="tag">Photoshop</a></li>
                            <li><a href="#" class="tag">Ajax</a></li>
                            <li><a href="#" class="tag">Json</a></li>
                            <li><a href="#" class="tag">C</a></li>
                            <li><a href="#" class="tag">C++</a></li>
                            <li><a href="#" class="tag">Vb</a></li>
                            <li><a href="#" class="tag">Vb.net</a></li>
                            <li><a href="#" class="tag">Asp.net</a></li>
                        </ul>
                    </div>
                    <center><a href="#"><button style="font-size: 10px;" type="button" class="btn btn-primary btn-lg">voir plus</button></a></center>
                </div>
            
            </div>
        
        </div>
    </div>
</div>
@stop