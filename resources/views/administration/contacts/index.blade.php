@extends('administration.home')

@section('myContent')
    <h2 class="card-header mb-4">Liste des contacts</h2>

@if ($contacts->count() > 0)

<table id="myTable" class="table table-bordered table-striped table-hover">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Contenu</th>
        </tr>
    </thead>

    <tbody>
        
        @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->lastname }}</td>
                <td>{{ $contact->firstname }}</td>
                <td>{{ $contact->email }}</td>
                <td><a href="{{ Route('contact_show', $contact) }}" class="btn btn-secondary">Voir message</a></td>
                {{-- <td>{{ $contact->contenu }}</td> --}}
                
            </tr>
        @endforeach
    </tbody>
</table>

@else
    <h3 class="text-center">Aucun contact</h3>
@endif

<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>

@endsection