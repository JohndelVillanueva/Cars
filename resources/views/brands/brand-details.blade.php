<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Brand detail</h1>

    <table border="1">
        <tr>
            <td>Brand</td>
            <td>{{ $brand->brand }}</td>
        </tr>
        <tr>
            <td>Country</td>
            <td>{{ $brand->country }}</td>
        </tr>
        <tr>
            <td>Price</td>
            <td>{{ $brand->price }}</td>
        </tr>
    </table>
</body>

</html>