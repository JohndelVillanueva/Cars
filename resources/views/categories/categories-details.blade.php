<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Categories details</h1>
    <table border="1">
        <th>Id</th>
        <th>Categories</th>
        <th>Type</th>
        <th>Stock</th>
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->category}}</td>
            <td>{{$category->type}}</td>
            <td>{{$category->stock}}</td>
        </tr>
    </table>
</body>
</html>