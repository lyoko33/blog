@extends('front.template') 

@section('carousel')
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('images/carou0.jpg') }}" class="d-block w-100" alt="carou0">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/carou1.jpg') }}" class="d-block w-100" alt="carou1">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/carou2.jpg') }}" class="d-block w-100" alt="carou2">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
@endsection

@section('content')
    
<div class="jumbotron jumbotron-fluid">
    <div class="container" data-aos="fade-up" >
      <h1 class="display-4">Bienvenue sur mon blog</h1>
      <p class="lead">Je suis un grand passionné de sport, voyage, musique et plein d'autres domaines.<br/>     
j'ai hâte de vous faire découvrir ce que je publie par rapport à ces différents domaines.
      </p>
    </div>
  </div>

  <div class="container" >
    <h1 class="text-center text-danger my-5" data-aos="fade-left" data-aos-duration="2000" >À propos de moi</h1>

    <div class="row d-flex justify-content-around" data-aos="fade-right" data-aos-duration="2000" >
        <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header"><h3 class="text-center">Spécialisation</h3> </div>
            <div class="card-body">
              <h5 class="card-title">En Ingénierie Informatique</h5>
              <p class="card-text">J'adore cette sensation de partir de rien et d'accomplir de grandes choses. Voilà pourquoi j'étudie dans ce domaine.</p>
            </div>
        </div>
    
          <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header"><h3 class="text-center">Écrivain</h3> </div>
            <div class="card-body">
              <h5 class="card-title">Bientôt mon premier livre</h5>
              <p class="card-text">Grand passionné de l'infiniment grand et de l'infiniment petit, je sortirai bientot mon tout premier livre allant dans cet ordre d'idées.</p>
            </div>
          </div>
    
          <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header"><h3 class="text-center">Formateur</h3> </div>
            <div class="card-body">
              <h5 class="card-title">En Informatique</h5>
              <p class="card-text">Partant du principe que la vie c'est du donner et du recevoir, j'adore transmettre des informations aux gens et mes formations me permettent de le faire.</p>
            </div>
          </div>
    </div>
  </div>

  <div class="container-fluid my-5 bg-secondary div_articles" style="background-image: url('images/div_article_r.jpg'); ">
  <h2  class="text-center display-4 py-5"><a href="{{ Route('front_blog') }}"> Mes articles</a> </h2>
  </div>

@endsection





