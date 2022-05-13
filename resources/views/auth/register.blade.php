<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Mentoring</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<!--jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<!-- end jquery -->
<link href="assets\img\favicon.png" rel="icon">
<link rel="stylesheet" href="assets\css\bootstrap.min.css">
<link rel="stylesheet" href="assets\plugins\fontawesome\css\fontawesome.min.css">
<link rel="stylesheet" href="assets\plugins\fontawesome\css\all.min.css">
<link rel="stylesheet" href="assets\css\style.css">
<link rel="stylesheet" href="admin\assets\css\style2.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<style>
    .simple-pagination ul {
        margin: 0 0 20px;
        padding: 0;
        list-style: none;
        text-align: center;
    }
    
    .simple-pagination li {
        display: inline-block;
        margin-right: 5px;
    }
    
    .simple-pagination li a,
    .simple-pagination li span {
        color: #666;
        padding: 5px 10px;
        text-decoration: none;
        border: 1px solid #EEE;
        background-color: #FFF;
        box-shadow: 0px 0px 10px 0px #EEE;
    }
    
    .simple-pagination .current {
        color: #FFF;
        background-color: #fe9445;
        border-color: #fe9445;
    }
    
    .simple-pagination .prev.current,
    .simple-pagination .next.current {
        background: #fe9445;
    }
   
  .subject-info-box-1,
  .subject-info-box-2 {
  float: left;
  width: 45%;
  } 
  .subject-info-box-2 .select {
  height: 200px;
  padding: 0;
  }
  
  .subject-info-box-2 .option {
  padding: 4px 10px 4px 10px;
  }
  .subject-info-box-2.option:hover {
  background: #EEEEEE;
  }
   
  .subject-info-arrows {
  float: left;
  width: 10%;
  }
  .subject-info-arrows input {
  width: 70%;
  margin-bottom: 5px;
  }
  .dropbtn3{
  color: #fe9445;
  
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  width: 300px;
  height: 50px;
  }
  
  .dropbtn3:hover, .dropbtn:focus {
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
<script>
    $(document).ready(function() {
          $('.js-example-basic-multiple').select2();
      });
</script> 
<script>
    window.console = window.console || function(t) {};
</script>  
<script>
    if (document.location.search.match(/type=embed/gi)) {
      window.parent.postMessage("resize", "*");
    }
</script>
<script>
    var state= false;
    function toggles()
    {
    if(state){
    document.getElementById("password").setAttribute("type","password");
    state = false;
    }
    else{
    document.getElementById("password").setAttribute("type","text");
    state = true;
    }
    }
</script>
<script>
    var state= false;
    function toggle()
    {
    if(state){
    document.getElementById("password-1").setAttribute("type","password");
    state = false;
    }
    else{
    document.getElementById("password-1").setAttribute("type","text");
    state = true;
    }
    }
</script>
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
</head>

<body>


    {{-- <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="row mb-3">
            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>

        <div class="row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </form> --}}


<form method="POST" action="{{ route('register') }}">
 @csrf
    <div class="page-wrapper mx-auto" id="etape1">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Formulaire Inscription</h3>
                        <ul class="breadcrumb">
                        <p class="card-text">For custom Bootstrap forms validation messages, you’ll need to add the <code>novalidate</code> boolean attribute to your form. For server side validation <a href="https://getbootstrap.com/docs/4.1/components/forms/#server-side" target="_blank">read full documentation</a>.</p>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                        <h5 class="card-title" style="font-size: 25px; color: #6610f2;">Etape1</h5><br>
                            <div class="progress progress-sm">
                                <div class="progress-bar progress-bar-striped bg-danger"  role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm">
                                        <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom01">Nom</label>
                                                    <input  placeholder="name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    <div class="valid-feedback">
                                                        Cela semble bon!
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom02">Prénom</label>
                                                    <input placeholder="Nom d'utilisateur" id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>
                                                            @error('prenom')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        <div class="valid-feedback">
                                                            Cela semble bon!
                                                        </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustomUsername">Tél</label>
                                                    <div class="input-group">
                                                        <input placeholder="numéro de téléphone" aria-describedby="inputGroupPrepend" id="tel" type="text" class="form-control @error('tel') is-invalid @enderror" name="tel" value="{{ old('tel') }}" required autocomplete="tel" autofocus>
                                                                @error('tel')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                        <div class="invalid-feedback">
                                                            Veuillez choisir un tél.
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom03">Adresse email</label>
                                                    <input class="form-control"  placeholder="Adresse email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                    <div class="invalid-feedback">
                                                        Insérer un email valide.
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom04">Mot de Passe</label>
                                                    <div class="pass-group">
                                                        <input class="form-control pass-input" id="password" placeholder="Mot de Passe"  type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                                            @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        <span class="fas fa-eye toggle-password" id="eye" onclick="toggles()" ></span>
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        mot de passe invalide.
                                                    </div>
                                                </div>
                                        <div class="col-md-4 mb-3">
                                                    <label for="validationCustom05">Confirmer le Mot de Passe</label>
                                                <div class="pass-group">
                                                    <input class="form-control pass-input" id="password-1" placeholder="Confirmer le Mot de Passe" id="password_confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                    <span class="fas fa-eye toggle-password" id="eye" onclick="toggle()"></span>
                                                </div>
                                                <div class="invalid-feedback">
                                                    mot de passe invlide.
                                                </div>
                                        </div>
                                        </div>
                                        <div class="form-row">
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom01">Nom d'entreprise</label>
                                                        <input placeholder="Nom d'entreprise" id="nom_societe" type="text" class="form-control @error('nom_societe') is-invalid @enderror" name="nom_societe" value="{{ old('nom_societe') }}" required autocomplete="nom_societe" autofocus>
                                                                @error('nom_societe')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                        <div class="valid-feedback">
                                                            Insérer un nom d'enreprise valide!
                                                        </div>
                                                    </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom02">Tél 2</label>
                                                    <input  placeholder="numéro de téléphone 2"  placeholder="numéro de téléphone" aria-describedby="inputGroupPrepend" id="tel2" type="text" class="form-control @error('tel2') is-invalid @enderror" name="tel2" value="{{ old('tel2') }}"  autocomplete="tel2n" autofocus>
                                                                    @error('tel2')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                    <div class="valid-feedback">
                                                    Insérer une numero de téléphone valide!
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                        <label for="validationCustomUsername">Fix</label>
                                                    <div class="input-group">
                                                        <input placeholder="Fix" aria-describedby="inputGroupPrepend"  aria-describedby="inputGroupPrepend" id="Fix" type="text" class="form-control @error('Fix') is-invalid @enderror" name="Fix" value="{{ old('Fix') }}"autocomplete="Fix" autofocus>
                                                                    @error('Fix')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                        <div class="invalid-feedback">
                                                            Insérer un telephone fix valide!
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom03">SIRET</label>
                                                    <input type="number" placeholder="SIRET" class="form-control"  aria-describedby="inputGroupPrepend" id="seret" class="form-control @error('seret') is-invalid @enderror" name="seret" value="{{ old('seret') }}" required autocomplete="seret" autofocus>
                                                       @error('seret')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                  <div class="invalid-feedback">
                                                  Insérer un numero de siret valide!.
                                                  </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom04">Code NAF</label>
                                                    <input placeholder="Code NAF" id="code_naf" type="text" class="form-control @error('code_naf') is-invalid @enderror" name="code_naf" value="{{ old('code_naf') }}" required autocomplete="code_naf" autofocus>
                                                    @error('code_naf')
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                    <div class="invalid-feedback">
                                                    insérer un  code Naf valide!
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom05">Libéllé </label>
                                                    <input  placeholder="Libéllé "  id="libelle" type="text" class="form-control @error('libelle') is-invalid @enderror" name="libelle" value="{{ old('libelle') }}" required autocomplete="libelle" autofocus>
                                                        @error('libelle')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    <div class="invalid-feedback">
                                                        insérer un libelle valide!
                                                    </div>
                                                </div>
                                        </div>
                                        <br>
                                                 <div class="form-group">
                                                <button  id="next1" onclick="a();" type="button" class="btn btn-primary" style="float: right; width: 180px; color: #fff; text-decoration: none;">
                                                    Suivant 
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-wrapper mx-auto" id="etape2" style="display: none" >
        <div class="content container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title" style="font-size: 25px; color: #6610f2;">Etape2</h5><br>
                            <div class="progress progress-sm">
                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm">
                                    
                                        <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Code postal</label>
                                                            {{-- <input type="text" class="form-control" placeholder="Code postal"> --}}
                                                            <input placeholder="Code postal" id="Code_postal" type="text" class="form-control @error('Code_postal') is-invalid @enderror" name="Code_postal" value="{{ old('Code_postal') }}" required autocomplete="zip" autofocus>
                                                            @error('Code_postal')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Ville</label>
                                                            {{-- <input type="text" class="form-control" placeholder="Ville"> --}}
                                                            <input placeholder="Ville" id="ville" type="text" class="form-control @error('ville') is-invalid @enderror" name="ville" value="{{ old('ville') }}" required autocomplete="ville" autofocus>
                                                                @error('ville')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Adresse</label>
                                                    <input placeholder="adress" id="adress" type="text" class="form-control @error('adress') is-invalid @enderror" name="adress" value="{{ old('adress') }}" required autocomplete="adress" autofocus>
                                                        @error('adress')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Description sur votre société</label>
                                                    <textarea rows="5" cols="5" placeholder="rédigez une description de 500 caractére maximum" id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus></textarea>
                                                    @error('description')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label class="form-control-label">Logo de votre entreprise </label><br>
                                                    <input class="inp-9" type="file" id="image_input" accept="image/png , image/jpg , image/jpeg ,image/jfif" id="logo"  class="form-control @error('logo') is-invalid @enderror" name="logo" value="{{ old('logo') }}" required autocomplete="image" autofocus ><br><br>
                                                    @error('logo')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <div  id="display_image" class="form-control mx-auto"></div></center>
                                                </div>
                                            </div>
                                        <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Heure début</label>
                                                    <input placeholder="Heure début" id="heure_debut" type="time" class="form-control @error('heure_debut') is-invalid @enderror" name="heure_debut" value="{{ old('heure_debut') }}" required autocomplete="heure_debut" autofocus>
                                                        @error('heure_debut')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Heure fin</label>
                                                    {{-- <input type="text" class="form-control" placeholder="Heure fin"> --}}
                                                    <input placeholder="Heure fin" id="heure_fin" type="time" class="form-control @error('heure_fin') is-invalid @enderror" name="heure_fin" value="{{ old('heure_fin') }}" required autocomplete="heure_fin" autofocus>
                                                        @error('heure_fin')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            {{-- <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-check form-check-inline">
                                                        <input id="Semaine" class="form-check-input" type="checkbox"  class="form-control @error('Semaine') is-invalid @enderror" name="Semaine" value="{{ old('Semaine') }}" required autocomplete="Semaine" autofocus>
                                                        @error('Semaine')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        <label class="form-check-label" for="inlineCheckbox2">7j / 7j</label>
                                                    </div>
                                                </div>
                                            </div> --}}
                                            {{-- <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-check form-check-inline">
                                                            <input id="jours" class="form-check-input" type="checkbox" value="option2" class="form-control @error('jours') is-invalid @enderror" name="jours" value="{{ old('jours') }}" required autocomplete="jours" autofocus>
                                                        @error('jours')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        <label class="form-check-label" for="inlineCheckbox2">24h / 24h</label>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12">
                                        <div class="form-group">
                                        <label>Votre URL personnalisée
                                        </label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon3" style="font-size: 12px;">https://</span>
                                            </div>
                                                <input  id="basic-url" aria-describedby="basic-addon3" id="siteweb" type="text" class="form-control @error('siteweb') is-invalid @enderror" name="siteweb" value="{{ old('siteweb') }}" required autocomplete="siteweb" autofocus>
                                                @error('siteweb')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>  
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Google my business</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon3" style="font-size: 12px;">https://</span>
                                                        </div>
                                                        <input  id="basic-url" aria-describedby="basic-addon3" id="google" type="text" class="form-control @error('google') is-invalid @enderror" name="google" value="{{ old('google') }}" required autocomplete="google" autofocus>
                                                        @error('google')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>      
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Linkedin</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon3" style="font-size: 12px;">https://</span>
                                                        </div>
                                                        <input  id="basic-url" aria-describedby="basic-addon3" id="linkdin" type="text" class="form-control @error('linkdin') is-invalid @enderror" name="linkdin" value="{{ old('linkdin') }}" required autocomplete="linkdin" autofocus>
                                                        @error('linkdin')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>      
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Facebook</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon3" style="font-size: 12px;">https://</span>
                                                        </div>
                                                        <input  id="basic-url" aria-describedby="basic-addon3" id="facebook" type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook" value="{{ old('facebook') }}" required autocomplete="facebook" autofocus>
                                                        @error('facebook')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>  
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Instagram
                                                    </label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon3" style="font-size: 12px;">https://</span>
                                                        </div>
                                                        {{-- <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"> --}}
                                                        <input  id="basic-url" aria-describedby="basic-addon3" id="instagram" type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram" value="{{ old('instagram') }}" required autocomplete="instagram" autofocus>
                                                        @error('instagram')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>        
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <button class="btn btn-primary" id="pre2"   type="button" style="float: left; width: 130px;" ><a  style="color: #fff; text-decoration: none;"> Précédente</a></button>
                                            <button type="submit" class="btn btn-primary" style="float: right">
                                                {{ __('Register') }}
                                            </button>
                                           </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script>

	$(document).ready(function(){
		$('body').on('click','#next1',function(){
            event.preventDefault();
            $('#etape1').hide();
            $('#etape3').hide();
			$('#etape2').show();	
		});
		$('body').on('click','#next2',function(){
            event.preventDefault();
			$('#etape3').show();
			$('#etape2').hide();
			$('#etape1').hide();
		});
        $('body').on('click','#pre2',function(){
            event.preventDefault();
			$('#etape1').show();
			$('#etape2').hide();
			$('#etape3').hide();
		});
        $('body').on('click','#pre3',function(){
            event.preventDefault();
			$('#etape2').show();
			$('#etape3').hide();
			$('#etape1').hide();
		});
	});

</script>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="..\..\assets\js\jquery-3.5.1.min.js"></script>
<script src="assets\js\bootstrap.bundle.min.js"></script>
<script src="assets\plugins\theia-sticky-sidebar\ResizeSensor.js"></script>
<script src="assets\plugins\theia-sticky-sidebar\theia-sticky-sidebar.js"></script>
<script src="assets\js\script.js"></script>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets\js\jquery-3.5.1.min.js"></script>
<script src="assets\js\bootstrap.bundle.min.js"></script>
<script src="assets\plugins\theia-sticky-sidebar\ResizeSensor.js"></script>
<script src="assets\plugins\theia-sticky-sidebar\theia-sticky-sidebar.js"></script>
<script src="assets\js\script.js"></script>
<script src="assets\js\slick.js"></script>
<script src="assets\js\script.js"></script> 
<script src="assets\plugins\select2\js\select2.min.js"></script>
</body>
</html>