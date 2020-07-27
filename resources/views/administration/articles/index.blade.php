@extends('administration.home')



@section('myContent')
    
    <h1 class="card-header mb-4">Liste des articles</h1>
    @if (session("success"))
        <div class="alert alert-success success" role="alert">
            {{ session("success") }}
        </div>
    @endif
    <a class=" btn btn-primary" href="{{ Route('article_create') }}">Nouvel article</a>
    @if ($articles->count() > 0)
 
    <table id="myTable" class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>Image</th>
                <th>Catégorie</th>
                <th>Nom</th>
                <th>Création</th>
                <th>Contenu</th>
                <th>Paramètres</th>
            </tr>
        </thead>

        <tbody>
            
            @foreach ($articles as $article)
                {{-- {{ dd(asset($article->image)) }} --}}
                <tr>
                    <td><img src="{{asset($article->image)}}" alt="{{$article->name}}" width="80" height="80"/></td>
                    <td>{{ $article->categorie->name }}</td>
                    <td>{{ $article->name }}</td>
                    <td> {{ $article->created_at }}</td>
                    <td><a class="btn btn-success" href="{{ Route('article_show', $article) }}">Contenu</a></td>
                    <td class="d-flex justify-content-center">
                        <a href="{{ Route('article_edit', $article)}}" class="btn btn-secondary mx-4">Editer</a>
                        <form class="mx-4" method="post" action="{{ Route('article_delete', $article) }}">
                            @csrf
                            @method('delete') 
                            <input type="submit" value="supprimer" class="btn btn-danger" onclick="return confirm('Confirmer la suppression')"/>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    
    @else
    <h3 class="text-center">Aucun article</h3>
    @endif
    
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
    

@endsection