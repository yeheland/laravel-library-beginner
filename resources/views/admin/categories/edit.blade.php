@extends('layouts.app')

@section('content')
    <h1 class="text-center">Edition d'un genre</h1>
    <form action="{{ route('categories.update', $category->id) }}" method="POST" class="text-center">
        @csrf
        @method('PUT')
        <div class="p-1">
            <label for="name">Nom</label>
            <input type="text" name="name" id="name" value="{{$category->name}}">
        </div>
        <div class="p-1">
            <button type="submit" class="btn btn-primary">Editer</button>
        </div>
    </form>
@endsection