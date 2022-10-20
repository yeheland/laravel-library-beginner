@extends('layouts.app')

@section('content')
    <h1 class="text-center">Edition d'un auteur</h1>
    <form action="{{ route('authors.update',$author->id)}}" method="POST" class="text-center">
        @csrf
        @method('PUT')
        <div class="p-1">
            <label for="lastname">Nom</label>
            <input type="text" name="lastname" id="lastname" value="{{$author->lastname}}">
        </div>
        <div class="p-1">
            <label for="firstname">Prénom</label>
            <input type="text" name="firstname" id="firstname" value="{{$author->firstname}}">
        </div>
        <div class="p-1">
            <button type="submit" class="btn btn-primary">Editer</button>
        </div>
    </form>
@endsection