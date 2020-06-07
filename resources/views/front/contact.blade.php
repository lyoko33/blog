@extends('front.template')

@section('carousel')
    <div  class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/contactr.jpg') }} " class="d-block w-100" alt="...">
            </div>
        </div>
    </div>

    <div class="container-fluid m-5">
        
        <h1 class="text-center text-danger my-3">Contactez-nous</h1>
        
        
        
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @php
                header('refresh: 5');
            @endphp
        @endif

        <div class="row my-5">
            <div class="col-md-8 container">
                <form method="post" action="{{ Route('contact_store') }}">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control" type="text" name="lastname" placeholder="Nom" value="{{ old('lastname') }}">
                                {!! $errors->first('lastname', ":message") !!}  
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" type="text" name="firstname" placeholder="Prenom" value="{{ old('firstname') }}">
                                {!! $errors->first('firstname', ":message") !!} 
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <input class="form-control" type="email" name="email" placeholder="Email" value="{{ old('email') }} ">
                                {!! $errors->first('email', ":message") !!} 
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <textarea name="contenu" placeholder="Message" class="form-control"> {{ old('contenu') }}</textarea>
                                {!! $errors->first('contenu', ":message") !!} 
                            </div>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <input type="submit" class="btn btn-success" />
                    </div>
                </form>
            </div>

            <div class="col-md-4">
                <h2 class="text-center text-danger">Infos</h2>
                <div class="card-body">
                    <h3>Contact: 06...</h3>
                </div>
                <div class="card-body">
                    <h3>Adresse: 13 rue du Pape</h3>
                </div>
            </div>
        </div>
    </div>
@endsection