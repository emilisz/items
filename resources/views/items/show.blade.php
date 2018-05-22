@extends('layouts.app')
@section('content')


    <h3> <a class="btn btn-primary" href="">{{$item->name}}</a>
         <a class="btn btn-warning btn-sm" href="{{route('items.edit', ['id' => $item->id])}}">Edit item</a>

        <form class="float-right" action="{{route('items.destroy',  ['id' => $item->id])}}" method="POST">
            @method('DELETE')
            {{csrf_field()}}
            <input type="submit" class="btn btn-danger btn-sm" value="Delete">
        </form> </h3>


@endsection