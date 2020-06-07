@extends('administration.home')

@section('myContent')
    <h3 class="card-header mb-4">Contenu du message de : {{ $contact->lastname}} {{ $contact->firstname }}</h3>
    <h5 class="mb-5">Date de publication : {{ $contact->created_at }}</h5>
    <p >{{ $contact->contenu }}</p>

    
@endsection