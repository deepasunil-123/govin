<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="bootstrap-5.2.2-dist\css\bootstrap.min.css">
<script src="bootstrap-5.2.2-dist\js\bootstrap.bundle.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title><b>Buyer's Registration</b>
</head>
<body style="background-image:url('images/i2.webp');background-size:cover">
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
</div>

   <form action="{{url('seller_update_profile')}}" method="post" enctype="multipart/form-data">
   <div class="container  mt-5">
        <div class="row">
        <div class="col-md-6 offset-3 border p-5">

    @csrf
    <div class="row">

<img src="images/{{$res->photo}}" height="300" width="300" >
</div><br>
<div class="row">

<input type="file" name="photo" class="form-control">
</div><br>

    <div class="row"><div class="col-md-4" style="
    font-size: x-large;
">
    Name </div><div class="col-md-8"><input type="text" name="name" value="{{$res->name}}" required class="form-control"></div>
    @if($errors->has('name'))
    {{$errors->first('name')}}
    @endif<br><br>
</div>
    <div class="row">
<div class="col-md-4"style="
    font-size: x-large;
">
    Email</div><div class="col-md-8"><input type="mail" name="email" value="{{$res->email}}" required class="form-control"> </div><span style="font-size: large;color:red;padding-left: 211px;">   @if($errors->has('email'))
    {{$errors->first('email')}}
    @endif
</div>    <br>

    <div class="row">
<div class="col-md-4"style="
    font-size: x-large;
">
    Phone</div><div class="col-md-8"><input type="text" name="phone" value="{{$res->phone}}" required class="form-control"></div><span style="font-size: large;color:red;padding-left: 211px;">    @if($errors->has('phone'))
    {{$errors->first('phone')}}
    @endif
</div><br>
    <div class="row">
<div class="col-md-4"style="
    font-size: x-large;
">
    Place</div><div class="col-md-8"><input type="text" name="place" value="{{$res->place}}" required class="form-control"></div>
    @if($errors->has('place'))
    {{$errors->first('place')}}
    @endif<br><br>
</div>
    <div class="row">
<div class="col-md-4"style="
    font-size: x-large;
">

    Username</div><div class="col-md-8"><input type="text" name="uname" value="{{$res->uname}}" required class="form-control" required></div><br><br>
</div>
    <div class="row">
<div class="col-md-4"style="
    font-size: x-large;
">
    Password</div><div class="col-md-8"><input type="password" name="pwd"value="{{$res->pwd}}" required class="form-control" required></div><br><br>
</div>
    <div class="row">
    <div class="col-md-4"style="
    font-size: x-large;
">

    Status</div><div class="col-md-8"><input type="text" name="status"value="{{$res->status}}" required class="form-control"></div>
</div><br><br>
<div class="row">
    <input type="submit" value="Update" class="btn btn-success" style="
    font-size: x-large;
"></div>
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