@extends('layouts.app')
@section('content')


    <ol>
        @foreach($category as $kategorija)
            <li><a class="btn btn-success mt-2" href="/bta/category/{{$kategorija->name}}">{{$kategorija->name}}</a></li>
        @endforeach
    </ol>


    @endsection