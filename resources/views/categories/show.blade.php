@extends('layouts.app')
@section('content')



            <h3><a class="btn btn-primary" href="{{$category->title}}/items">{{$category->title}}:</a> <a class="btn btn-warning btn-sm" href="{{route('categories.edit', ['id' => $category->id])}}">Edit category</a>
                <form class="float-right" action="{{route('categories.destroy',  ['id' => $category->id])}}" method="POST">
                    @method('DELETE')
                    {{csrf_field()}}
                    <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                </form> </h3>


    {{--   ITEMS   --}}
                <ol>
                    @foreach($item as $kategorija)
                        <li class="mt-3 mb-3"><a class="btn btn-info mt-2" href="{{route('items.show', ['id' => $kategorija->id])}}">{{$kategorija->name}}</a>


                        </li>
                    @endforeach
                </ol>

    <a class="navbar-brand btn btn-secondary" href="{{route('categories.index')}}">Atgal</a>



@endsection