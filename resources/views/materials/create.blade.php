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



<div class="container">

    <form action="{{route('materials.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label >Pavadinimas</label>
            <input type="text" class="form-control" name="name" placeholder="..." >
        </div>
        <button type="submit" class="btn btn-primary">Sukurti</button>
    </form>
<br>
    <a class="navbar-brand btn btn-secondary" href="/">atgal</a>
</div>
</body>
</html>