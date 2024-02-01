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
</div><div class="container  mt-5">

    <table border=3 class="table table-bordered table-striped table-novel">

    <thead class="text-danger bg-warning" >
            <th class="form-control-lg">Product</th>
            <th class="form-control-lg">Quantity</th>
            <th class="form-control-lg">Price</th>
            <th class="form-control-lg">Category</th>
            <th class="form-control-lg">Subcategory</th>
            <th class="form-control-lg">Photo</th><th></th></thead>

            <tbody>
               <?php if(!empty($res))
                { ?>        @foreach($res as $result)
            <tr style="
    background-color: gainsboro;
"><td style="font-size: x-large;">{{$result->pro_name}}</td>
            <td style="font-size: x-large;">{{$result->qty}}</td>
            <td style="font-size: x-large;">{{$result->pid}}</td>
            <td style="font-size: x-large;">{{$result->cat_name}}</td>
            <td style="font-size: x-large;">{{$result->sub_cat_name}}</td>
            <td style="font-size: x-large;"><img src="images/{{$result->photo}}" height="50" width="50"></td>
            <td style="font-size: x-large;"><a href="{{url('seller_edit_product',$result->pid)}}" class="btn btn-success"style="font-size: x-large;">Edit</a>
            <a href="{{url('seller_delete_product',$result->pid)}}" class="btn btn-success"style="font-size: x-large;">Delete</a></td>

</tr>
@endforeach


               <?php }
                else{?>
                    <tr>records are unavailable</tr>
              <?php  }?>
                </tbody>
</table>
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