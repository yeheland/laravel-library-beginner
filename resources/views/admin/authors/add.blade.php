@extends('layouts.app')

@section('content')
    <h1 class="text-center">Ajout d'un auteur</h1>
    <form action="{{ route('authors.store') }}" method="POST" class="text-center">
        @csrf
        <div class="p-1">
            <label for="lastname">Nom</label>
            <input type="text" name="lastname" id="lastname">
        </div>
        <div class="p-1">
            <label for="firstname">Prénom</label>
            <input type="text" name="firstname" id="firstname">
        </div>
        <div class="p-1">
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </div>
    </form>
@endsection