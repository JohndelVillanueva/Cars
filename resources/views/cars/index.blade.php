<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CARS List</title>
</head>
<body>

    <h1>Car list</h1>
        

        @foreach($cars as $car)
        <li>{{$car}}</li>
        @endforeach

</body>
</html>