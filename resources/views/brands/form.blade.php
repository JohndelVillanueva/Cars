<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="/brands" method="POST">
        @csrf
        <label for="brand" class="form-label">Brand: </label>
        <input type="text" name="brand" id="brand" class="form-control">
        <label for="country" class="form-label">Country: </label>
        <input type="text" name="country" id="country" class="form-control">
        <label for="price" class="form-label">Price: </label>
        <input type="text" name="price" id="price" class="form-control">
        <button type="submit">Store</button>
    </form>

</body>

</html>