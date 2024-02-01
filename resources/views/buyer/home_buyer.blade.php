<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="bootstrap-5.2.2-dist\css\bootstrap.min.css">
<script src="bootstrap-5.2.2-dist\js\bootstrap.bundle.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-image:url('images/pic2.jpg');background-size:cover">
    
<div class="navbar navbar-expand-xxl navbar-dark bg-success height-py-9"  style="font-size:20px";>
        <div class="container">
        <a href=" "class="navbar-brand" style="
    font-size: xxx-large;
"><b style="
    margin-left: -50px;
">GoVin</b></a>
            <ul class="navbar-nav">

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
<li class="nav-item dropdown">
<a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="margin-left: 140px;border: solid;border-color: silver;"><?php echo session('email');?>
</a>

            <ul class="dropdown-menu"style="margin-left: 140px;background-color: #b0f0b0;font-size:18px;">
            <li >
            <a href="{{url('buy_change_pwd')}}" class="dropdown-item">Change Password</a>
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


<a href="{{url('buyer_view_product')}}" ><img src="images/pic4.jpg" class="rounded-circle" height="150" width="150" style="margin-left: 11px;margin-top: 5px;"></a>
<br>
<br>
</div></div></div></div>


<!-- <div class="container">
        <div class="row">
        <div class="col-md-6 offset-3 border p-5">  

        <div class="row text-center mt-4"> -->

<!-- <a href="{{url('buyer_view_profile')}}">View Profile</a><br><br></div>
<div class="row text-left mt-4">

<a href="{{url('buyer_view_product')}}">View Products</a><br><br></div>
<div class="row text-center mt-4">

<a href="{{url('buyer_view_cart')}}">View Cart</a><br><br></div>
<div class="row text-center mt-4">

<a href="{{url('buyer_view_order')}}">View Orders</a></div> -->


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