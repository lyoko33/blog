@extends('front.template')

@section('carousel')
    <div  class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/article_r.jpg') }} " class="d-block w-100" alt="article">
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="my-5">
        
            <nav aria-label="breadcrumb" class="d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ Route('front_blog') }}">Liste de tous les articles</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $article->name }}</li>
                </ol>
            </nav>
        
        
        <h1 class="text-center text-danger ">{{ $article->name }}</h1>
        <h4 class="text-center ">Date de publication : {{ $article->created_at }}</h4>
    </div>

    <div class=" container my-3">
        <p>{!! $article->description !!}</p>
    </div>

    <div class="my-4 w-50 m-auto">
        <h2 class='text-center'>Laissez un commentaire</h2>
        <form method="post" action="{{ Route('commentaire_store', $article) }}">
            @csrf
            <div class="form-group">
                <input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="Votre nom">
            </div>
            <div class="form-group">
                <textarea name="message" id="" cols="30" rows="6" class="form-control" placeholder="Votre message">{{ old("message") }}</textarea>
            </div>
            <div class="form-group text-center">
                <input type="submit" class="btn btn-success" />
            </div>
        </form>
    </div>

    <div>
        <h2 class="my-4 bg-dark text-white text-center py-3"><u>Liste des commentaires</u></h2>
        @foreach ($article->commentaires as $commentaire)
            <h4><strong>Nom : {{ $commentaire->name }}</strong></h4>
            <h6><strong>Publié le : </strong>{{ $commentaire->created_at }}</h6>
            <p><strong>Message</strong> : {{ $commentaire->message }}</p>
            <hr>
        @endforeach
    </div>
    
@endsection

