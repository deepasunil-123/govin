 <!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="..\bootstrap-5.2.2-dist\css\bootstrap.min.css">
<script src="bootstrap-5.2.2-dist\js\bootstrap.bundle.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-image:url('images/i2.jpg'); background-size:cover"> 

<link rel="stylesheet" href="bootstrap-5.2.2-dist\css\bootstrap.min.css">
<script src="bootstrap-5.2.2-dist\js\bootstrap.bundle.min.js"></script> 

    
<div class="navbar navbar-expand-xxl navbar-dark bg-success height-py-9"  style="font-size:20px";>
        <div class="container">
        <a href=" "class="navbar-brand" style="
    font-size: -webkit-xxx-large;
"><b>GoVin</b></a>
            <ul class="navbar-nav">

                <li class="nav-item">
                <a href="{{url('buyer_view_profile')}}" class="nav-link"style="
    font-size: larger;
">Profile</a>
</li>
<li class="nav-item">
                <a href="{{url('buyer_view_product')}}" class="nav-link"style="
    font-size: larger;
">Products</a>
</li>
<li class="nav-item">
                <a href="{{url('buyer_view_cart')}}" class="nav-link"style="
    font-size: larger;
">Cart</a>
</li>
<li class="nav-item">
                <a href="{{url('buyer_view_order')}}" class="nav-link"style="
    font-size: larger;
">Orders</a>
</li>
<ul class="navbar-nav">
    <li class="nav-item">
        <a href="{{url('contact_us')}}" class="nav-link"style="font-size:24px";>Contact Us</a>
</li>

<ul class="navbar-nav">
    <li class="nav-item">
        <a href="{{url('about_us')}}" class="nav-link"style="font-size:24px";>About Us</a>
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
<div class="row"><div class="col"style="
    font-size: 246px;
">About<br>Us</div><div class="col"><br><br><img src="images/download.jpg" width="300" height="300"><br><br><br><br><p style="
font-size: x-large;">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available. It is also used to temporarily replace text in a process called greeking, which allows designers to consider the form of a webpage or pubication, without the meaning of the<br> text influencing the design.</p></div></div>


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

