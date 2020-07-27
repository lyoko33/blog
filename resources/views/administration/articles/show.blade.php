@extends('administration.home')

@section('myContent')
    <div>
        <h1>{{ $article->name }}</h1>
        <h6 class="mb-5">Date de création : {{ $article->created_at }}</h6>
        
        <p> {!! $article->description !!}</p>
    </div>
@endsection