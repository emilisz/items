<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand btn btn-primary" href="bta/create">ivesti nauja preke</a>
    <a class="navbar-brand btn btn-secondary" href="/bta">Atgal</a>



</nav>



<div class="container">
    <ol>
        @foreach($category as $kategorija)
            <li><a class="btn btn-success mt-2" href="/bta/category/{{$kategorija->name}}">{{$kategorija->name}}</a></li>
        @endforeach
    </ol>
</div>
</body>
</html>

{{--<div class="mt-1">--}}
    {{--<a class="float-left mr-2 btn btn-warning btn-sm" href="{{route('categories.edit', ['id' => $category->id])}}">Edit</a>--}}
    {{--<form class="" action="{{route('categories.destroy',  ['id' => $category->id])}}" method="POST">--}}
        {{--@method('DELETE')--}}
        {{--{{csrf_field()}}--}}
        {{--<input type="submit" class="btn btn-danger btn-sm" value="Delete">--}}
    {{--</form></div>--}}