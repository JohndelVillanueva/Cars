<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categories</title>
</head>

<body>
    <a href="categories/form">Create</a>
    <table class="table" border="1">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Categories</th>
                <th scope="col">Type</th>
                <th scope="col">Stock</th>
                <th scope="col">View</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <th scope="row">{{$category->id}}</th>
                <td>{{$category->category}}</td>
                <td>{{$category->type}}</td>
                <td>{{$category->stock}}</td>
                <td><a href="/categories/<?= $category->id ?>">View</a></td>
                @endforeach

            </tr>
        </tbody>
    </table>

</body>

</html>