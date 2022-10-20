@extends('layouts.app')

@section('content')
    <h1>Liste des auteurs</h1>
    <a href="{{ route('add.authors') }}" class="btn btn-primary mt-3 mb-5">Ajouter un auteur</a>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>prénom</th>
                <th>nom</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($authors as $author)
            <tr>
                <td> {{$author->id}} </td>
                <td>{{$author->firstname}}</td>
                <td>{{$author->lastname}}</td>
                <td class="d-flex"><a href="{{route('edit.authors', $author->id)}}" class="btn btn-primary mx-3">Editer</a>
                    <form action="{{route('delete.authors',$author->id)}}" method="post">
                        @csrf
                        {{method_field('delete')}}
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection