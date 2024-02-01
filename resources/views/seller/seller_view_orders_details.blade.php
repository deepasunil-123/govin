<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="..\bootstrap-5.2.2-dist\css\bootstrap.min.css">
<script src="bootstrap-5.2.2-dist\js\bootstrap.bundle.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-image:url('../images/i2.webp');background-size:cover">
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
        <div class="col-md-6  border p-5"style="
    background-color: aliceblue;
">

    <form action="{{url('seller_view_product_app_rej',$res->oid)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row"><div class="col md-6 offset-3"><h1><u><i>Buyer Details</u></i></h1><br></div></div>
        <div class="row"><div class="col-md-6 offset-3">
        <img src="../images/{{$res->image1}}" height="300" width="300"></div></div><br><br>

        <div class="row ps-5"style="
    font-size: larger;
">
    <div class="col-md-4"><strong class="text-dark">Name</strong>
        
    </div> 
        <div class="col-md-1">:</div> 

<div class="col-md-3">{{$res->name}}</div>
</div>
<div class="row ps-5" style="font-size:larger">
    <div class="col-md-4"><strong class="text-dark">E-mail</strong>
        
    </div> 
    <div class="col-md-1">:</div>

        <div class="col-md-1">{{$res->email}}</div> 
</div>

        <div class="row ps-5"style="font-size:larger">
    <div class="col-md-4"><strong class="text-dark">Phone  </strong>
        
    </div> 
    <div class="col-md-1">:</div>

        <div class="col-md-1">{{$res->phone}}</div> 
</div>
        <div class="row ps-5"style="font-size:larger">


<div class="col-md-4"><strong class="text-dark">Place</strong></div>
    <div class="col-md-1">:</div>
    <div class="col-md-1">{{$res->place}}
</div>
</div><br><br>




<div class="row"><div class="col text-center">
    <?php if($res->status!="Approved")
    {?>    <input type="submit" value="Approve" name="app_rej" class="btn btn-success" style="font-size:x-large">
        <input type="submit" value="Reject" name="app_rej" class="btn btn-success" style="font-size:x-large"></div>
    </div><br><br>

   

<?php }
    else
    { ?>
</div></div><br><br>
    </form>
<div class="row"><form action="{{url('tracking_det',$res->oid)}}" method="get">
    @csrf
    <input type="submit" value="Add tracking Details" class="btn btn-success" style="font-size:x-large"></form></div>

    <?php }
     ?></div>
             <div class="col md-6"style="
    background-color: aliceblue;
"><h1 class="text-center"><u><i><br>Product Details</u></i></h1><br>
                    <div class="row"><div class="col-md-6 offset-3">
        <img src="../images/{{$res->image}}" height="300" width="300"></div></div><br><br>

        <div class="row ps-5"style="font-size:larger">
    <div class="col-md-4"><strong class="text-dark">Name</strong>
        
    </div> 
        <div class="col-md-1">:</div> 

<div class="col-md-3">{{$res->pro_name}}</div>
</div>
<div class="row ps-5" style="font-size:larger">
    <div class="col-md-4"><strong class="text-dark">Quantity</strong>
        
    </div> 
    <div class="col-md-1">:</div>

        <div class="col-md-1">{{$res->qty1}}</div> 
</div>

        <div class="row ps-5"style="font-size:larger">
    <div class="col-md-4"><strong class="text-dark">Price  </strong>
        
    </div> 
    <div class="col-md-1">:</div>

        <div class="col-md-1">{{$res->total1}}</div> 
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

</html>z