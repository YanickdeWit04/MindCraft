<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/addcategory.css">
    <title>Add a Category</title>
</head>
<body>
<div class="main">
    <form class="add-category" action="/add2" method="POST">
        @csrf
        <input type="text" name="name" placeholder="name">
        <input type="text" name="icon" placeholder="icon">
        <input type="submit">
    </form>
</div>
</body>
</html>
