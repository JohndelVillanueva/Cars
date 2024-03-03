<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CARS List</title>
</head>

<body>
    <a href="cars/form">Create</a>
    <table class="table" border="1">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Qty</th>
                <th scope="col">Price</th>
                <th scope="col">View</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cars as $car)
            <tr>
                <th scope="row">{{$car->id}}</th>
                <td>{{$car->name}}</td>
                <td>{{$car->category}}</td>
                <td>{{$car->qty}}</td>
                <td>{{$car->price}}</td>
                <td><a href="/cars/<?= $car->id ?>">View</a></td>
                @endforeach

            </tr>
        </tbody>
    </table>

</body>

</html>