<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/categories" method="POST">
        @csrf
        <label for="category">Categories: </label>
        <input type="text" name="category" id="categort"><br><br>
        <label for="type">Type: </label>
        <input type="text" name="type" id="type"><br><br>
        <label for="stock">Stock: </label>
        <input type="text" name="stock" id="stock"><br><br>
        <button type="submit">Insert Into Database</button>
    </form>
</body>
</html>