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
    <a class="navbar-brand " href="#">KATEGORIJA: {{$item->name}}</a>
    <a class="navbar-brand btn btn-secondary" href="{{route('categories.index')}}">Atgal</a>

</nav>



<div class="container">


    <h3> <a class="btn btn-primary" href="">{{$item->name}}</a>
         <a class="btn btn-warning btn-sm" href="{{route('items.edit', ['id' => $item->id])}}">Edit item</a>

        <form class="float-right" action="{{route('items.destroy',  ['id' => $item->id])}}" method="POST">
            @method('DELETE')
            {{csrf_field()}}
            <input type="submit" class="btn btn-danger btn-sm" value="Delete">
        </form> </h3>








</div>
</body>
</html>