<!-- <!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="bootstrap-5.2.2-dist\css\bootstrap.min.css">
<script src="bootstrap-5.2.2-dist\js\bootstrap.bundle.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-image:url('images/pic7.webp'); background-size:cover">
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
<link rel="stylesheet" href="bootstrap-5.2.2-dist\css\bootstrap.min.css">
<script src="bootstrap-5.2.2-dist\js\bootstrap.bundle.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-image:url('images/pic2.jpg');background-size:cover">
@extends('buyer.buyer_nav')
@section('content')
<div class="container  mt-5 " >
        <div class="col-md-6 offset-3 border p-5" style="background-color:lightcyan" >

    <form action="" method="post" enctype="multipart/form-data">
    <!-- <div class="col-md-3 border p-3 m-4 "> -->     <div class="row" class="text-center"> <div class="col-md-6 offset-3"> <h1><u><i>View Profile</u></i></h1></div> </div>
<div class="row"><div class="col md-6 offset-3">
<img src="images/{{$res->photo}}" height="300" width="300" class="rounded-circle"></div></div>
    <!-- </div> -->
<div class="row"style="font-size: x-large;"><div class="col">Name</div>:<div class="col">{{$res->name}}</div></div>
<div class="row"style="font-size: x-large;"><div class="col">E-mail</div>:<div class="col">{{$res->email}}</div></div>
<div class="row"style="font-size: x-large;"><div class="col">Phone</div>:<div class="col">{{$res->phone}}</div></div>
<div class="row"style="font-size: x-large;"><div class="col">Place</div>:<div class="col">{{$res->place}}</div></div>
<div class="row"style="font-size: x-large;"><div class="col">Username</div>:<div class="col">{{$res->uname}}</div></div>
<div class="row"style="font-size: x-large;"><div class="col">Password</div>:<div class="col">{{$res->pwd}}</div></div>
<div class="row"style="font-size: x-large;"><div class="col">Status</div>:<div class="col">{{$res->status}}</div></div><br>
<div class="row">
<a href="{{url('buyer_edit_profile')}}" class="btn btn-success"style="font-size: x-large;">Edit Profile</a></div>
</form>
</div>
</div>
<div class="row text-center"><img src="images/mo.jpg" class="rounded-circle" height="150" width="150" style="margin-left: 11px;margin-top: 5px;">
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