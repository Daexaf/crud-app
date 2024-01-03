<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Create Products</h1>
    <form method="post" action="{{route('products.store')}}">
        @csrf
        @method('post')
        <div class="">
            <label for="">Name</label>
            <input type="text" name="name">
        </div>
        <div class="">
            <label for="">Price</label>
            <input type="text" name="price">
        </div>
        <div class="">
            <label for="">Quantity</label>
            <input type="text" name="qty">
        </div>
        <div class="">
            <label for="">Description</label>
            <input type="text" name="description">
        </div>
        <input type="submit" value="Save new Products">
    </form>
</body>

</html>