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
<ul class="navbar-nav">
    <li class="nav-item">
        <a href="{{url('contact_us')}}" class="nav-link"style="font-size:24px";>Contact Us</a>
</li>

<ul class="navbar-nav">
    <li class="nav-item">
        <a href="{{url('about_us')}}" class="nav-link"style="font-size:24px";>About Us</a>
</li>


</div>
</div>
<div class="container mt-5">
<div class="row"style="
    padding-left: 527px;
    font-size: 51px;
">Contact Us</div></div>

<br><br><br>
<div class="row"><div class="col" style="
    padding-left: 260px;"
><img src="images/OIP (20).jpg" height="50" width="50"></div><div class="col"style="
    padding-left: 148px;"
>jg</div><div class="col" style="
    padding-left: 260px;"
><img src="images/OIP (24).jpg" height="60" width="60"></div></div>
<br>
<div class="row"><div class="col"style="
    padding-left: 240px;"><b>BY PHONE</b><br>(Monday to Friday,9am to 4pm PST)<br>North America Toll-Free:<br>1-877-930-7483<br><br>International:<br>
1-604-637-0780<br><br><input type="submit" value="START HERE" name="but1"></div><div class="col"style="
    padding-left: 128px;"><b>START A NEW CASE</b><br>Just send us your questions<br> or concerns by starting a <br>new case and we will give<br> you the help you need<br><br><input type="submit" value="START HERE" name="but2"></div><div class="col"style="
    padding-left: 240px;"><b>LIVE CHAT</b><br>Chat with a member of our <br>in-house team<br><br><input type="submit" value="START CHAT" name="but3"></div></div>

</div>
<br><br><br><br><br>
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
