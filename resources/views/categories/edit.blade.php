@extends('layouts.app')
@section('content')

    <form action="{{route('categories.update', ['id' => $category->id])}}" method="POST">
       @method('PUT')
        @csrf
        <div class="form-group">
            <label >Pavadinimas</label>
            <input type="hidden" class="form-control" name="name" value="{{$category->id}}" >
            <input type="text" class="form-control" name="name" value="{{$category->title}}" >
        </div>
        <button type="submit" class="btn btn-primary">Saugoti</button>
    </form>
<br>
    <a class="navbar-brand btn btn-secondary" href="/categories">atgal</a>

    @endsection