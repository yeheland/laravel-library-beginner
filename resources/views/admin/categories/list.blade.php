@extends('layouts.app')

@section('content')
    <h1>Liste des genres</h1>
    <a href="{{ route('add.categories') }}" class="btn btn-primary mt-3 mb-5">Ajouter un genre</a>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>nom</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td> {{$category->id}} </td>
                <td>{{$category->name}}</td>
                <td class="d-flex"><a href="{{route('edit.categories', $category->id)}}" class="btn btn-primary mx-3">Editer</a>
                    <form action="{{route('delete.categories',$category->id)}}" method="post">
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