<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new client</title>
</head>
<body>
    <form method="POST" action="{{ route('add-client') }}">
    @csrf
    <input type="text" name="name" placeholder="name">
    <input type="text" name="phone" placeholder="phone">
    <input type="text" name="email" placeholder="email">
    <input type="text" name="text" placeholder="text">
    <button type="submit">Order</button>
    </form>
</body>
</html>