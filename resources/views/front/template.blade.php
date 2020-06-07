<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Projet</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top"> 
        <a class="navbar-brand" href="/">Monsite</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Accueil <span class="sr-only">(current)</span></a>
            </li><div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Mes hobbies
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Mes résumés de livre</a>
                <a class="dropdown-item" href="#">Mes voyages</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Autres...</a>
              </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=" {{ Route('front_blog') }}">blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=" {{ Route('front_contact') }}">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=" {{ Route('login') }}">Espace réservé</a>
            </li>
          </ul>
          
        </div>
      </nav>

      @yield('carousel')

      <div class="container-fluid">
        

        @yield('content')

        <div class="row bg-dark py-5 mt-5 text-white">
            <div class="col-md-6">
                <h4 class="text-center">Copyright 2020, </h4>
            </div>
            <div class="col-md-6">
                <h4 class="text-center"><a href="{{ Route('front_contact') }}">Contactez-nous</a></h4>
            </div>
        </div>
      </div>
   

    

    
</body>
</html>