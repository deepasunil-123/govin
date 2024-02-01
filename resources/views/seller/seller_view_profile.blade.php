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
<div class="navbar navbar-expand-lg navbar-dark bg-success">
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
        <div class="row">
        <div class="col-md-6 offset-3 border p-5"style="
    background-color: aliceblue;
">

    <form action="" method="post" enctype="multipart/form-data">
        <div class="row text-center"><h1><u><i>Profile</h1></u></i></div><br>
        <div class="row"><div class="col text-center"><img src="images/{{$res->photo}}" class="rounded-circle"height="100" width="100"></div></div>
<br><br>
<div class=" font row"style="font-size: x-large;"><div class="col-md-4">Name</div>
<div class="col-md-2">:</div>
<div class="col-md-4">{{$res->name}}</div></div>
<div class=" font row"style="font-size: x-large;">
<div class="col-md-4">E-mail</div>
<div class="col-md-2">:</div>
<div class="col-md-4">{{$res->email}}</div></div>
<div class=" font row"style="font-size: x-large;"> 
<div class="col-md-4">Phone</div>
<div class="col-md-2">:</div>
<div class="col-md-4">{{$res->phone}}</div></div>
<div class=" font row"style="font-size: x-large;">
<div class="col-md-4">Place</div>
<div class="col-md-2">:</div>
<div class="col-md-4">{{$res->place}}</div></div> 
<div class=" font row"style="font-size: x-large;">
<div class="col-md-4">Username</div>
<div class="col-md-2">:</div>
<div class="col-md-4">{{$res->uname}}</div></div>
<div class=" font row"style="font-size: x-large;">
<div class="col-md-4">Password</div>
<div class="col-md-2">:</div>
<div class="col-md-4">{{$res->pwd}}</div></div>
<div class=" font row"style="font-size: x-large;">
<div class="col-md-4">Status</div>
<div class="col-md-2">:</div>
<div class="col-md-4">{{$res->status}}</div></div><br><br>

 <div class="row"> <a href="{{url('seller_edit_profile')}}" class="btn btn-success" style="font-size: x-large;"> Edit Profile</div></a>
</div></div>

</form>
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