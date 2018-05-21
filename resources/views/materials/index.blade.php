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
    <a class="navbar-brand btn btn-primary" href="{{route('materials.create')}}">ivesti nauja material</a>



</nav>



<div class="container">
    <h1>Medziagos:</h1><br>
<ol>
@foreach($material as $kategorija)
    <li><a class="btn btn-info mt-2" href="materials/{{$kategorija->id}}">{{$kategorija->material}}</a></li>
    @endforeach
</ol>
</div>
</body>
</html>