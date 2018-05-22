@extends('layouts.app')
@section('content')


            <h3><a class="btn btn-info" href="{{$material->id}}/items">Rodyti visus items is {{$material->material}}</a> <a class="btn btn-warning btn-sm" href="{{$material->id}}/edit">Edit material</a>


    <form class="float-right" action="{{route('materials.destroy',  ['id' => $material->id])}}" method="POST">
        @method('DELETE')
        {{csrf_field()}}
        <input type="submit" class="btn btn-danger btn-sm" value="Delete">
    </form> </h3>
    <a class="navbar-brand btn btn-secondary" href="/materials">Atgal</a>

@endsection