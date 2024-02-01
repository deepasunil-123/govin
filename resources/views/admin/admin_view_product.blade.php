<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="bootstrap-5.2.2-dist\css\bootstrap.min.css">
<script src="bootstrap-5.2.2-dist\js\bootstrap.bundle.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-image:url('images/i4.jpg');background-size:cover">
<div class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <a href=" "class="navbar-brand"style="font-size: xxx-large;"><b>GoVin</b></a>
            <ul class="navbar-nav"style="font-size: larger;">

<li class="nav-item dropdown">
            <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Category</a>
            <ul class="dropdown-menu" style="background-color: #b0f0b0;font-size:18px;">
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
            <ul class="dropdown-menu" style="background-color: #b0f0b0;font-size:18px;">
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
<div class="container  mt-5">

    <table border=3 class="table table-bordered table-striped table-novel">
    <thead class="text-danger bg-warning"style="font-size: large;">
        <th>Product</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Category</th>
        <th>Sub Category</th>


        <th>Photo</th>
        <th>Seller Name</th>
        <th>Seller email</th>
        <th>Seller Phone</th>
        <th>Seller Place</th>
        <th>Seller Photo</th>
</thead>
        <tbody>
            @foreach($res as $result)
            <tr style="font-size: x-large;
    background-color: antiquewhite;
"><td>{{$result->pro_name}}</td>
            <td>{{$result->qty}}</td>
            <td>{{$result->price}}</td>
            <td>{{$result->cat_name}}</td>
            <td>{{$result->sub_cat_name}}</td>
            <td><img src="images/{{$result->image}}" height="50" width="50"></td>

            <td>{{$result->name}}</td>
            <td>{{$result->email}}</td>
            <td>{{$result->phone}}</td>
            <td>{{$result->place}}</td>

            


            <td><img src="images/{{$result->photo}}" height="50" width="50"></td>


</tr>
@endforeach</tbody>

</body>
</table>
</div>
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