<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Car detail</h1>

    <table border="1">
        <tr>
            <td>Name</td>
            <td>{{ $car->name }}</td>
        </tr>
        <tr>
            <td>Category</td>
            <td>{{ $car->category }}</td>
        </tr>
        <tr>
            <td>Qty</td>
            <td>{{ $car->qty }}</td>
        </tr>
        <tr>
            <td>Price</td>
            <td>{{ $car->price }}</td>
        </tr>
    </table>
</body>

</html>