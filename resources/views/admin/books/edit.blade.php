@extends('layouts.app')

@section('content')
    <h1 class="text-center">Edition d'un livre</h1>
    <form action="{{ route('edit.books', $book->id) }}" method="POST" class="text-center">
        @csrf
        @method('PUT')
        <div class="p-1">
            <label for="title">title</label>
            <input type="text" name="title" id="title" value="{{$book->title}}">
        </div>
        <div class="p-1">
            <label for="description">description</label>
            <input type="text" name="description" id="description" value="{{$book->description}}">
        </div>
        <div class="p-1">
            <button type="submit" class="btn btn-primary">Editer</button>
        </div>
    </form>
@endsection