<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="bootstrap-5.2.2-dist\css\bootstrap.min.css">
<script src="bootstrap-5.2.2-dist\js\bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="navbar navbar-expand-xxl navbar-dark bg-success height-py-9"  style="font-size:20px";>
        <div class="container" >
            <a href=" "class="navbar-brand" style="font-size: xxx-large;"><b style="
    margin-left: -97px;
">GoVin</b></a>
            <ul class="navbar-nav">


<li class="nav-item dropdown"style="
    min-width: 159px;
">
            <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"style="
    font-size: larger;
">Category</a>
            <ul class="dropdown-menu"style="background-color: #b0f0b0;font-size:18px;">
            <li >
                <a href="{{url('admin_add_category_form')}}" class="dropdown-item"style="font-size: larger;">Add category</a>
            </li>
            <li >
                <a href="{{url('admin_view_category')}}" class="dropdown-item"style="font-size: larger;">View category</a>
            </li>
            </ul> 

        </li>

        <li class="nav-item dropdown"style="
    min-width: 159px;
">
            <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"style="
    font-size: larger;
">Sub Category</a>
            <ul class="dropdown-menu"style="background-color: #b0f0b0;font-size:18px;">
            <li >
                <a href="{{url('admin_add_sub_cat_form')}}" class="dropdown-item"style="font-size: larger;">Add sub category</a>
            </li>
            <li >
                <a href="{{url('admin_view_sub_cat_view')}}" class="dropdown-item"style="font-size: larger;">View sub category</a>
            </li>
            </ul> 

        </li>

        <li class="nav-item"style="
    min-width: 153px;
">
<a href="{{url('admin_view_profile')}}" class="nav-link"style="
    font-size: larger;
">Profile</a>
</li>
<li class="nav-item"style="
    min-width: 159px;
">
<a href="{{url('admin_view_product')}}" class="nav-link"style="
    font-size: larger;
">Product</a>
</li>
<li class="nav-item"style="
    min-width: 153px;
">
<a href="{{url('admin_view_orders')}}" class="nav-link"style="
    font-size: larger;
">Orders</a>
</li>

<li class="nav-item"style="
    min-width: 153px;
">
<a href="{{url('admin_view_seller')}}" class="nav-link"style="
    font-size: larger;
">Seller</a>
</li>
<li class="nav-item "style="
    min-width: 153px;
">
<a href="{{url('admin_view_buyer')}}" class="nav-link"style="
    font-size: larger;
">Buyer</a>
</li>

<li class="nav-item dropdown">
<a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="margin-left: 3px;border: solid;border-color: silver;"><?php echo session('email');?>
</a>

            <ul class="dropdown-menu"style="margin-left: 140px;background-color: #b0f0b0;font-size:18px;">
            <li >
            <a href="{{url('adm_change_pwd')}}" class="dropdown-item"style="font-size: larger;">Change Password</a>
            </li>

            <li >
            <a href="{{url('logout')}}" class="dropdown-item"style="font-size: larger;">Logout</a>
            </li>
            </ul> 

        </li>
        <li class="nav-item">
        <img src="images/<?php echo session('photo');?>" class="rounded-circle" height="40" width="40" style="margin-left: 11px;margin-top: 5px;">
</li>

</div>
</div>
<div class="container"style="background-image:url('images/pic5.jfif');background-size:cover;min-height:800px">

  
    <!-- <a href="{{url('admin_view_profile')}}">View Profile</a><br><br> -->
    <!-- <a href="{{url('admin_view_seller')}}">View Seller</a><br><br> -->
    <!-- <a href="{{url('admin_view_buyer')}}">View Buyer</a><br><br> -->
    <!-- <a href="{{url('admin_add_category_form')}}">Add Category</a><br><br> -->
    <!-- <a href="{{url('admin_view_category')}}">Add Category</a><br><br> -->

    
    <!-- <a href="{{url('admin_add_sub_cat_form')}}">Add Subcategory</a><br><br> -->
    <!-- <a href="{{url('admin_view_sub_cat_view')}}">View Subcategory</a><br><br> -->
    <!-- <a href="{{url('admin_view_product')}}">View Product</a><br><br> -->

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