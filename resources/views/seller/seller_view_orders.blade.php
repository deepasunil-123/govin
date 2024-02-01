<!-- <!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="bootstrap-5.2.2-dist\css\bootstrap.min.css">
<script src="bootstrap-5.2.2-dist\js\bootstrap.bundle.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <div class="navbar navbar-expand-lg navbar-dark bg-success"  style="height: 122px;font-size: 23px;color: #1d1010;"> -->
<!-- <div class="navbar navbar-expand-xxl navbar-dark bg-success height-py-9" style="font-size:25px";>

        <div class="container">
            <a href=" "class="navbar-brand">Navbar</a>
            <ul class="navbar-nav">
            <li class="nav-item">
                <a href="{{url('sel_change_pwd')}}" class="nav-link">Change Password</a>
</li>

                <li class="nav-item">
                <a href="{{url('seller_view_profile')}}" class="nav-link">View Profile</a>
</li>
<li class="nav-item">
                <a href="{{url('add_product')}}" class="nav-link">Add Product</a>
</li>
<li class="nav-item">
                <a href="{{url('view_product')}}" class="nav-link">View Product</a>
</li>
<li class="nav-item">
                <a href="{{url('view_orders')}}" class="nav-link">View Orders</a>
</li>
<li class="nav-item">
<a href="{{url('logout')}}" class="nav-link">Logout</a>
</li>

</div>
</div> --> 

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="bootstrap-5.2.2-dist\css\bootstrap.min.css">
<script src="bootstrap-5.2.2-dist\js\bootstrap.bundle.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-image:url('images/i2.webp');background-size:cover">
<div class="navbar navbar-expand-xxl navbar-dark bg-success height-py-9" style="font-size:25px";>
        <div class="container">
            <a href=" "class="navbar-brand"style="
    font-size: xxx-large;
"><b>GoVin</b></a>
            <ul class="navbar-nav">

                <li class="nav-item">
                <a href="{{url('seller_view_profile')}}" class="nav-link" >View Profile</a>
</li>
<li class="nav-item">
                <a href="{{url('add_product')}}" class="nav-link">Add Product</a>
</li>
<li class="nav-item">
                <a href="{{url('view_product')}}" class="nav-link">View Product</a>
</li>
<li class="nav-item">
                <a href="{{url('view_orders')}}" class="nav-link">View Orders</a>
</li>
<li class="nav-item dropdown">
<a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="margin-left: 140px;border: solid;border-color: silver;"><?php echo session('email');?>
</a>

            <ul class="dropdown-menu"style="margin-left: 140px;background-color: #b0f0b0;font-size:18px;">
            <li >
            <a href="{{url('sel_change_pwd')}}" class="dropdown-item">Change Password</a>
            </li>

            <li >
            <a href="{{url('logout')}}" class="dropdown-item" >Logout</a>
            </li>
            </ul> 

        </li>
        <li class="nav-item">
        <img src="images/<?php echo session('photo');?>" class="rounded-circle" height="40" width="40" style="margin-left: 11px;margin-top: 5px;">
</li>


</div>
</div>

<div class="container  mt-5">

    <table border=3 class="table table-bordered table-striped table-novel" style="height: 122px;font-size: 23px;color: #1d1010;">
    <thead class="text-danger bg-warning" >
        <th>Product</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Status</th>
        <th>Photo</th>
        <th>Total</th>
<th></th>
</thead>
        <tbody>
            @foreach($res as $result)
            <tr style="
    background-color: cornsilk;
">

            <td>{{$result->pro_name}}</td>
            <td>{{$result->qty}}</td>
            <td>{{$result->price}}</td>

            <td>{{$result->pstatus}}</td>
            <td><img src="images/{{$result->image}}" height="50" width="50"></td>

            <td>{{$result->total}}</td>

            <td>    <a href="{{url('seller_view_product_details',$result->pid)}}" class="btn btn-success"style="font-size: x-large;">Details</a>
</td>




</tr>
@endforeach</tbody>
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