<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="..\bootstrap-5.2.2-dist\css\bootstrap.min.css">
<script src="..\bootstrap-5.2.2-dist\js\bootstrap.bundle.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0- 
     alpha/css/bootstrap.css" rel="stylesheet">
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-image:url('../images/i3.jpg');background-size:cover">
<div class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <a href=" "class="navbar-brand"style="font-size: xxx-large;"><b>GoVin</b></a>
            <ul class="navbar-nav"style="font-size: larger;">

                <li class="nav-item">

<li class="nav-item dropdown">
            <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Category</a>
            <ul class="dropdown-menu">
            <li >
                <a href="{{url('admin_add_category_form')}}" class="dropdown-item">Add category</a>
            </li>
            <li >
                <a href="{{url('admin_view_category')}}" class="dropdown-item">View category</a>
            </li>
            </ul> 

        </li>

        <li class="nav-item dropdown">
            <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Sub Category</a>
            <ul class="dropdown-menu">
            <li >
                <a href="{{url('admin_add_sub_cat_form')}}" class="dropdown-item">Add sub category</a>
            </li>
            <li >
                <a href="{{url('admin_view_sub_cat_view')}}" class="dropdown-item">View sub category</a>
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
<div class="container  mt-5" style="font-size: 20px;">
        <div class="row">
        <div class="col-md-6 offset-3 border p-3">

    <form action="{{url('approvereject_buyer',$res->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">    <img src="../images/{{$res->photo}}" height="250" width="250" >
</div><br>

        <div class="row ps-7">


<div class="col-md-5">Name</div>
    <div class="col-md-1">:</div>
    <div class="col-md-1">{{$res->name}}
</div>
</div>
<div class="row ps-7">


<div class="col-md-5">E-mail</div>
    <div class="col-md-1">:</div>
    <div class="col-md-1">{{$res->email}}
</div>
</div>
<div class="row ps-7">


<div class="col-md-5">Phone</div>
    <div class="col-md-1">:</div>
    <div class="col-md-1">{{$res->phone}}
</div>
</div>
<div class="row ps-7">


<div class="col-md-5">Place</div>
    <div class="col-md-1">:</div>
    <div class="col-md-1">{{$res->place}}
</div>
</div>
<div class="row ps-7">


<div class="col-md-5">Username</div>
    <div class="col-md-1">:</div>
    <div class="col-md-1">{{$res->uname}}
</div>
</div>
<div class="row ps-7">


<div class="col-md-5">Password</div>
    <div class="col-md-1">:</div>
    <div class="col-md-1">{{$res->pwd}}
</div>
</div>
<div class="row ps-7">


<div class="col-md-5">Status</div>
    <div class="col-md-1">:</div>
    <div class="col-md-1">{{$res->status}}
</div>
</div><br><br>
@if($res->status=="Pending")
<div class="row">
    <div class="col text-center" ><input type="submit" value="APPROVE" name="app_rej" class="btn btn-success">
    <input type="submit" value="REJECT" name="app_rej"class="btn btn-success"></div>

</div>

@endif

</form>
</div>
</div>
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