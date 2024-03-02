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
        <input type="text" name="carName" id="carName">
        <input type="text" name="carType" id="carType">
        <input type="text" name="quantity" id="quantity">
        <button type="submit">Submit</button>
    </form>
</body>
</html>