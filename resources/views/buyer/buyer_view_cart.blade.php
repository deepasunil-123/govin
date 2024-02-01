<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="bootstrap-5.2.2-dist\css\bootstrap.min.css">
<script src="bootstrap-5.2.2-dist\js\bootstrap.bundle.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-image:url('images/pic10.jfif'); background-size:cover">
@extends('buyer.buyer_nav')
@section('content')

<!-- <div class="navbar navbar-expand-lg navbar-dark bg-success">
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
<div class="container  mt-5">
<table border=3 class="table table-bordered table-striped table-novel"style="font-size: x-large;">
<thead class="text-danger bg-warning" >
<th>ID</th>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Category Name</th>
        <th>Sub_Category Name</th>
        <th>Image</th><th></th></thead>





        <tbody>
            @foreach($res as $result)
            <form action="{{url('buyer_qty_update',$result->cid)}}" method="post'" enctype="multipart/form-data">
            <tr style="
    background-color: cornsilk;
">
            <td>{{$result->cid}}</td>
            <td>{{$result->pro_name}}</td>
            <td><input type="submit" value="-" name="qty_updat">{{$result->quantity}}<input type="submit" name="qty_updat" value="+"></td>
            <td>{{$result->price*$result->quantity}}</td>
            <td>{{$result->cat_name}}</td>
            <td>{{$result->sub_cat_name}}</td>



            <td><img src="images/{{$result->photo}}" height="50" width="50"></td>
            <td><a href="{{url('remove_cart_data',$result->cid)}}" class="btn btn-success"style="
    font-size: x-large;
">Remove</a></td>

</tr>

</form>
@endforeach

</tbody></table><br><br><br><b>
<!-- <form action="{{url('proceed_to_checkout')}}" method="get" enctype="multipart/form-data"> -->
<a href="{{url('proceed_to_checkout')}}"class="btn btn-success"style="font-size: x-large;">Proceed to checkout</a><br><br>
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