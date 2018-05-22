@extends('layouts.app')
@section('content')
    <h1>Medziagos:</h1><br>
<ol>
@foreach($material as $kategorija)
    <li><a class="btn btn-info mt-2" href="materials/{{$kategorija->id}}">{{$kategorija->material}}</a></li>
    @endforeach
</ol>
    <a class="navbar-brand btn btn-primary mb-3" href="{{route('materials.create')}}">ivesti nauja material</a>
    {{ $material->links() }}

@endsection