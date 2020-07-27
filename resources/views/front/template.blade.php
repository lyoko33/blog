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
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">

    



    <style>

        .footer a {
          text-decoration: none;
          color:white;
        }

        .div_articles h2{
        border-bottom: 0px solid black;
        transition: border-bottom 1s, color 1s ease-in-out .2s;
        }

        .div_articles h2 a{
        
        text-decoration: none;
        color:white;
        }

      .div_articles h2:hover a{
        border-bottom: 5px solid red;
        transition: border-bottom .3s ease .3s;
      }

      a,h1,h2, h3, h4, h5, h6{
        font-family: 'Permanent Marker', cursive;
      }
    </style>
    @yield('style')
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top"> 
        <a class="navbar-brand" href="/">Mon Blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Accueil </a>
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
      </div>

      <div class="container-fluid">
        <div class="row bg-secondary py-5 mt-5 text-white footer" data-aos="fade-bottom" data-aos-duration="3000">
            <div class="col-md-6">
                <h4 class="text-center">Copyright 2020, </h4>
            </div>
            <div class="col-md-6">
                <h4 class="text-center"><a href="{{ Route('front_contact') }}">Contactez-moi</a></h4>
            </div>
        </div>
      </div>
    
   

    

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
  </script>


</body>
</html>