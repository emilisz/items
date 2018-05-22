@extends('layouts.app')
@section('content')

    <form action="/materials/{{$material->id}}" method="POST">
       @method('PUT')
        @csrf
        <div class="form-group">
            <label >Pavadinimas</label>
            <input type="hidden" class="form-control" name="name" value="{{$material->id}}" >
            <input type="text" class="form-control" name="name" value="{{$material->material}}" >
        </div>
        <button type="submit" class="btn btn-primary">Saugoti</button>
    </form>
<br>
    <a class="navbar-brand btn btn-secondary" href="/">atgal</a>

    @endsection