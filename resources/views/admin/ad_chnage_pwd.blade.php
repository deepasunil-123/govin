<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="bootstrap-5.2.2-dist\css\bootstrap.min.css">
<script src="bootstrap-5.2.2-dist\js\bootstrap.bundle.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-image:url('images/i8.jpg');background-size:cover">
<div class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <a href=" "class="navbar-brand"style="font-size: xxx-large;"><b>GoVin</b></a>
            <ul class="navbar-nav"style="font-size: larger
    background-color: darkseagreen;
">

                <li class="nav-item">

<li class="nav-item dropdown">
            <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Category</a>
            <ul class="dropdown-menu" style="background-color: #b0f0b0;font-size:18px;">
            <li >
                <a href="{{url('admin_add_category_form')}}" class="dropdown-item"style="
    font-size: larger;
">Add category</a>
            </li>
            <li >
                <a href="{{url('admin_view_category')}}" class="dropdown-item"style="
    font-size: larger;
">View category</a>
            </li>
            </ul> 

        </li>

        <li class="nav-item dropdown">
            <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"style="solid;border-color: silver;">Sub Category</a>
            <ul class="dropdown-menu" style="background-color: #b0f0b0;font-size:18px;">
            <li >
                <a href="{{url('admin_add_sub_cat_form')}}" class="dropdown-item"style="
    font-size: larger;
">Add sub category</a>
            </li>
            <li >
                <a href="{{url('admin_view_sub_cat_view')}}" class="dropdown-item"style="
    font-size: larger;
">View sub category</a>
            </li>
            </ul> 

        </li>
        <li class="nav-item">
<a href="{{url('admin_view_profile')}}" class="nav-link">View Profile</a>
</li>
<li class="nav-item">
<a href="{{url('admin_view_product')}}" class="nav-link">View Product</a>
</li>
<li class="nav-item">
<a href="{{url('admin_view_orders')}}" class="nav-link">View Orders</a>
</li>

<li class="nav-item">
<a href="{{url('admin_view_seller')}}" class="nav-link">View Seller</a>
</li>
<li class="nav-item">
<a href="{{url('admin_view_buyer')}}" class="nav-link">View Buyer</a>
</li>
<li class="nav-item dropdown">
<a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="margin-left: 140px;border: solid;border-color: silver;"><?php echo session('email');?>
</a>

            <ul class="dropdown-menu"style="margin-left: 140px;background-color: #b0f0b0;font-size:18px;">
            <li >
            <a href="{{url('adm_change_pwd')}}" class="dropdown-item">Change Password</a>
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
    font-size: x-large;
    background-color: antiquewhite;
    ">
    <form action="{{url('adm_change_pwdfunction')}}" method="post">
        @csrf
        <div class="row text-center"><h1><u>Change Password</u></div><br>
        <div class="row"><div class="col-md-6 "style="font-size: larger;">
    Old password</div><div class="col-md-6"><input type="password" name="opwd" class="form-control" required></div></div><br>
    <div class="row"><div class="col-md-6 "style="font-size: larger;">
    New password</div><div class="col-md-6"><input type="password" name="npwd" class="form-control" required></div></div><br>
    <div class="row"><div class="col-md-6 "style="font-size: larger;">
    Confirm password</div><div class="col-md-6"><input type="password" name="cpwd" class="form-control" required></div></div><br>
    <div class="row">
    <input type="submit" value="CHANGE" class="btn btn-success"style="font-size: larger;"></div>
</form>
</div>
</div>
<div>
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

<script>
  @if(Session::has('message'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("{{ session('message') }}");
  @endif
</script>


</html>