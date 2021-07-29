<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
    <h2>Product</h2>
    <table class="table table-dark table-hover">
        <thead>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Thumbnail</th>
            <th>Quantity</th>
            <th>Subtotal</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($shoppingCart as $obj)
            <form action="/add" method="get">
                <input type="hidden" name="cartAction" value="update">
                <input type="hidden" name="productId" value="{{$obj->id}}">
                <tr>
                    <td>{{$obj->name}}</td>
                    <td>{{$obj->unitPrice}}</td>
                    <td>
                        <img width="100px" src="{{$obj->thumbnail}}">
                    </td>
                    <td><input type="number" min="1" name="productQuantity" value="{{$obj->quantity}}"></td>
                    <td>{{$obj->quantity*$obj->unitPrice}}</td>
                    <td>
                        <button class="btn btn-primary">Update</button>
                        <a href="/remove??productId={{$obj->id}}" class="btn btn-danger">Remove</a>
                    </td>
                </tr>
            </form>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>

