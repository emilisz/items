@extends('layouts.app')
@section('content')

    <form action="{{route('categories.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label >Pavadinimas</label>
            <input type="text" class="form-control" name="name" placeholder="..." >
        </div>
        <button type="submit" class="btn btn-primary">Sukurti</button>
    </form>
<br>
    <a class="navbar-brand btn btn-secondary" href="/categories">atgal</a>

    @endsection