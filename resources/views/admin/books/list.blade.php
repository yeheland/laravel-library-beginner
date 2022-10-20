@extends('layouts.app')

@section('content')
<h1>Liste des livres</h1>
<a href="{{ route('add.books') }}" class="btn btn-primary mt-3 mb-5">Ajouter un livre</a>
<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>titre</th>
            <th>description</th>
            <th>auteur</th>
            <th>genre</th>
            @auth
            <th>actions</th>
            @endauth
        </tr>
    </thead>
    <tbody>
        @foreach($books as $book)
        <tr>
            <td> {{$book->id}} </td>
            <td>{{$book->title}}</td>
            <td>{{$book->description}}</td>
            <td>{{$book->getAuthor->firstname . ' ' . $book->getAuthor->lastname}}</td>
            <td>{{$book->getCategory->name}}</td>
            @auth
            <td class="d-flex"><a href="{{route('edit.books', $book->id)}}" class="btn btn-primary mx-3">Editer</a>
                {{-- <a href="{{route('delete.books', $book->id)}}" class="btn btn-danger">Supprimer</a> --}}

                <form action="{{route('delete.books',$book->id)}}" method="post">
                    @csrf
                    {{method_field('delete')}}
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
            @endauth
        </tr>
        @endforeach
    </tbody>
</table>

@endsection