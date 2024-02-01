<!-- <!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="..\bootstrap-5.2.2-dist\css\bootstrap.min.css">
<script src="bootstrap-5.2.2-dist\js\bootstrap.bundle.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-image:url('images/pic8.jfif'); background-size:cover">
<div class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <a href=" "class="navbar-brand">Navbar</a>
            <ul class="navbar-nav">
            <li class="nav-item">
                <a href="{{url('buy_change_pwd')}}" class="nav-link">Change Password</a>
</li>

                <li class="nav-item">
                <a href="{{url('buyer_view_profile')}}" class="nav-link">View Profile</a>
</li>
<li class="nav-item">
                <a href="{{url('buyer_view_product')}}" class="nav-link">View Products</a>
</li>
<li class="nav-item">
                <a href="{{url('buyer_view_cart')}}" class="nav-link">View Cart</a>
</li>
<li class="nav-item">
                <a href="{{url('buyer_view_order')}}" class="nav-link">View Orders</a>
</li>
<li class="nav-item">
<a href="{{url('logout')}}" class="nav-link">Logout</a>
</li>

</div>
</div> -->
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="..\bootstrap-5.2.2-dist\css\bootstrap.min.css">
<script src="..\bootstrap-5.2.2-dist\js\bootstrap.bundle.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-image:url('images/pic2.jpg');background-size:cover">
@extends('buyer.buyer_nav')
@section('content')


<div class="container  mt-5">
        <div class="row">
        <div class="col-md-6 offset-3 border p-5">

    <form action="{{url('add_to_cart',$res->pid)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row text-center"><h1><u>Product Details</u></h1></div><br>
        <div class="row">        <img src="../images/{{$res->photo}}" height="300" width="300">
</div>
<br><br>

<div class="row"style="
    font-size: x-large;
"><div class="col-md-5">Product_Name</div><div class="col">:</div><div class="col-md-4">{{$res->pro_name}}</div></div>

<div class="row"style="
    font-size: x-large;
"><div class="col-md-5">Quantity</div><div class="col">:</div><div class="col-md-4">{{$res->qty}}</div></div>
<div class="row"style="
    font-size: x-large;
"><div class="col-md-5">Price</div><div class="col">:</div><div class="col-md-4">{{$res->price}}</div></div>
<div class="row"style="
    font-size: x-large;
"><div class="col-md-5">Category Name</div><div class="col">:</div><div class="col-md-4">{{$res->cat_name}}</div></div>
<div class="row"style="
    font-size: x-large;
"><div class="col-md-5">Sub Category Name</div><div class="col">:</div><div class="col-md-4">{{$res->sub_cat_name}}</div></div><br><br>

<div class="row"style="
    font-size: x-large;
"><div class="col-md-4">Quantity: </div><div class="col-md-4"><div class="col"><input type="text" name="qty" class="form-control"></div></div></div><br><br>
<div class="row">
<input type="submit" value="Add to cart" class="btn btn-success"style="
    font-size: x-large;
"></div>
<p>lo
</div>

</form>
</div>
</div>
</div>
</body>
<footer style="
    min-height: 114px;
    background-color: lightgoldenrodyellow;
    
"><br><br>
<div class="row text-dark"style="
    padding-left: 278px;
    font-size: inherit;
">GoVin
<div class="col row text-dark"style="

    padding-left: 480px;
    font-size: inherit;
;
">Copyright@GoVin2024</div></div>
</footer>

</html>
@endsection