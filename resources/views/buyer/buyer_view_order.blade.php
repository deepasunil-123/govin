<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="bootstrap-5.2.2-dist\css\bootstrap.min.css">
<script src="bootstrap-5.2.2-dist\js\bootstrap.bundle.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-image:url('images/download.jfif'); background-size:cover">
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
@extends('buyer.buyer_nav')
@section('content')


<div class="container  mt-5">

    <form action="" method="get">
    <table border=3 class="table table-bordered table-striped table-novel bg-primary"style="font-size:x-large">
        <thead class="text-danger" style="
    background-color: darkseagreen;
">
        <th>First Name</th>
        <th>Last Name</th>
        <th>Address</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Country</th>
        <th>City</th>
        <th>Total</th><th></th></thead>

        <tbody>
            @foreach($res as $result)
            <tr style="
    background-color: beige;
"><td>{{$result->f_name}}</td>
            <td>{{$result->l_name}}</td>
            <td>{{$result->address}}</td>
            <td>{{$result->email}}</td>
            <td>{{$result->phone}}</td>
            <td>{{$result->country}}</td>
            <td>{{$result->city}}</td>
            <td>{{$result->total}}</td>
<td><a href="{{url('product_details',$result->id)}}" class="btn btn-success" style="font-size:x-large">Details</a></td>





</tr>
@endforeach

</tbody></table><br><br><br><b>
<!-- <form action="{{url('proceed_to_checkout')}}" method="get" enctype="multipart/form-data"> -->
</div>
</form>
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