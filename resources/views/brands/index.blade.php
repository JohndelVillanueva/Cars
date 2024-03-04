<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table class="table" border="3">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Brand</th>
                <th scope="col">Country</th>
                <th scope="col">Price</th>
                <th scope="col">View</th>
            </tr>
        </thead>
        <tbody>
            @foreach($brands as $brand)
                <tr>
                    <th scope="row">{{$brand->id}}</th>
                    <td>{{$brand->brand}}</td>
                    <td>{{$brand->country}}</td>
                    <td>{{$brand->price}}</td>
                    <td><a href="/brands/<?= $brand->id ?>">View</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>