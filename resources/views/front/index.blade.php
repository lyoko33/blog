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
    <div class="container">
      <h1 class="display-4">Fluid jumbotron</h1>
      <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
    </div>
  </div>

  <div class="container">
    <h1 class="text-center text-danger my-5">Mes Hobbies</h1>

    <div class="row d-flex justify-content-between">
        <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
              <h5 class="card-title">Light card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
    
          <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
              <h5 class="card-title">Light card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
    
          <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
              <h5 class="card-title">Light card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
    </div>
  </div>

  <div class="container-fluid my-5 bg-dark contact">
    <h2 class="text-center display-4 py-5"><a href="{{ Route('front_contact') }}">Contactez-moi</a> </h2>
  </div>

  

@endsection




