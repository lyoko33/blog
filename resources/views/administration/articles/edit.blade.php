@extends('administration.home')

@section('tinymce')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector:'textarea'});</script>
@endsection

@section('myContent')

    <h1 class="card-header text-danger mb-4">Modifier cet article</h1>
    <form method="post" action="{{Route('article_update', $article)}}" enctype="multipart/form-data">
        @csrf 
        @method('put')
        <div class="form-group">
            <label for="name">Nom de l'article</label>
            <input type="text" name="name" id="name" class="form-control" value="{{$article->name}}" />
            {!! $errors->first('name', ":message") !!}
        </div>

        <div class="form-group">
            <select name="categorie_id" class="form-control">
                @foreach ($categories as $categorie)
                <option value="{{$categorie->id}}">{{ $categorie->name }}</option> 
                @endforeach
            </select>
            {!! $errors->first('categorie_id', ":message") !!}
        </div>

        <div class="form-group">
            <input type="file" name="image" class="form-control" />
            {!! $errors->first('image', ":message") !!}
        </div>

        <div class="form-group">
            <Textarea name="description" class="form-control">{{$article->description}}</Textarea>
            {!! $errors->first('description', ":message") !!}
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" />
        </div>
        
    </form>
    


@endsection

