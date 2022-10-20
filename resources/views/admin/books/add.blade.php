@extends('layouts.app')

@section('content')
    <h1 class="text-center">Ajout d'un livre</h1>
    <form action="{{ route('books.store') }}" method="POST" class="text-center">
        @csrf
        <div class="p-1">
            <label for="title">title</label>
            <input type="text" name="title" id="title">
        </div>
        <div class="p-1">
            <label for="description">description</label>
            <input type="text" name="description" id="description">
        </div>
        <div class="p-1">
            <label for="author">auteur</label>
            <select name="author" id="author">
                @foreach($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->firstname . ' ' .$author->lastname }}</option>
                @endforeach
            </select>
        </div>
        <div class="p-1">
            <label for="category">genre</label>
            <select name="category" id="category">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="p-1">
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </div>
    </form>
@endsection