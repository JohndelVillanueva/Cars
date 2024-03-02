<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="/cars" method="POST">
        @csrf
        <label for="">Name: </label>
        <input type="text" name="name" id="name"><br><br>
        <label for="">Qty: </label>
        <input type="text" name="qty" id="qty"><br><br>
        <label for="">Category: </label>
        <input type="text" name="category" id="category"><br><br>
        <label for="">Price:</label>
        <input type="text" name="price" id="price"><br><br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>