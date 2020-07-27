@extends('administration.home')

@section('myContent')
    <h2 class="card-header text-danger mb-4">Nouvelle Catégorie</h2>
    <form method="post" action="{{Route('categorie_store')}}">
        @csrf 
        <div class="form-group">
            <label for="name">Nom de la catégorie</label>
            <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}" />
            {!! $errors->first('name', ":message") !!}
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" />
        </div>
        
    </form>
    


@endsection