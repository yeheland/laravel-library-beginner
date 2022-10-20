@extends('layouts.app')

@section('content')
    <h1 class="text-center">Ajout d'un genre</h1>
    <form action="{{ route('categories.store') }}" method="POST" class="text-center">
        @csrf
        <div class="p-1">
            <label for="name">Nom</label>
            <input type="text" name="name" id="name">
        </div>
        <div class="p-1">
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </div>
    </form>
@endsection