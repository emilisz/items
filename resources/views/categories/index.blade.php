@extends('layouts.app')
@section('content')

    <h1>Kategorijos</h1><br>
<ul>
@foreach($category as $kategorija)
    <li><a class="btn btn-info mt-2" href="categories/{{$kategorija->id}}">{{$kategorija->title}}</a></li>
    @endforeach
</ul>
    <a class="navbar-brand btn btn-primary mb-3" href="{{route('categories.create')}}">ivesti nauja kategorija</a>
    {{ $category->links() }}
    @endsection