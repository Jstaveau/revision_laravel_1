<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if ($number != null)
        <p>{{$number}} x 4 = {{$number * 4}}</p>
    @else
        <p>Vous n'avez pas entré un chiffre...</p>
    @endif
</body>
</html>