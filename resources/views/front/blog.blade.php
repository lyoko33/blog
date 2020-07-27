@extends('front.template')

@section('style')
    <style>
      
      .div_categories{
        background-image: url('images/body.jpg');
        box-shadow: 5px 4px 5px rgb(23, 23, 158); 
      }
      .div_categories p{
        border-bottom: 0px solid black;
        transition: border-bottom 1s, color 1s ease-in-out .2s;
      }

      .div_categories p a{
        font-size: 20px;
        text-decoration: none;
        color:white;
      }

      .div_categories p:hover{
        border-bottom: 1px solid red;
        transition: border-bottom .3s ease .3s;
      }

      .carte {
        transition: 0.5s ease;
        cursor: pointer;
      }

      .carte:hover {
        transform : scale(1.1);
        box-shadow : 2px 2px 12px rgba(0, 0, 0, 0.6);
      }

    </style>
@endsection

@section('carousel')
  <div  class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="{{ asset('images/blog_r.jpg') }} " class="d-block w-100" alt="...">
          </div>
      </div>
  </div>
@endsection

@section('content')

  <div class="container-fluid mt-5">
    <nav aria-label="breadcrumb" class="d-flex">
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ Route('front_blog') }}">Liste de tous les articles</a></li>
      </ol>
    </nav>
    <div class="row">
      <div class="col-md-2 bg-secondary my-3 div_categories text-center rounded-pill" data-aos="fade-right" data-aos-duration="2000" >
        <h2 class="text-center lead my-3 text-white mt-5" style="font-size: 30px;"><u>Catégories</u></h2>
        @if ($categories->count() > 0 )
          
            @foreach ($categories as $categorie)

                <p><a href="{{ Route('categorie_cible', $categorie) }}">{{ $categorie->name }}</a></p>              
            @endforeach
          
        @else
            <p class="text-white text-center">Aucune catégorie</p>
        @endif
        
      </div>

      <div class="col-md-10  my-3" data-aos="fade-left" data-aos-duration="2000">
        @if ($articles->count() > 0 )
        @foreach ($articles as $article)
        <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="card my-md-3 carte" style="max-width: 940px;">
              <div class="row no-gutters">
                <div class="col-md-5">
                  <img src="{{ asset($article->image) }}" class="card-img" alt="{{ $article->name }}" height="200" width="350">
                </div>
                <div class="col-md-7">
                  <div class="card-body">
                    <h3 class="card-title"><a href="{{ Route('front_article_show', $article) }}"> {{ $article->name }}</a></h3>
                    <a href="#" class="badge badge-info">{{ $article->categorie->name }}</a>
                    
                    <p class="card-text"><small class="text-muted">{{ $article->created_at }}</small></p>
                    <a class="btn btn-primary" href="{{ Route('front_article_show', $article) }}">Lire cet article</a>
                  </div>
                </div>
              </div>
            </div>
            <hr/>
          </div>
        </div>
        @endforeach
        @else
            <p class="text-center">Aucun article</p>
        @endif
      </div>
    
      {{$articles->links()}}
@endsection



