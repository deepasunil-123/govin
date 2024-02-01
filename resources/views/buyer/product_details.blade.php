<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="..\bootstrap-5.2.2-dist\css\bootstrap.min.css">
<script src="bootstrap-5.2.2-dist\js\bootstrap.bundle.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-image:url('../images/download.jfif'); background-size:cover">
<div class="navbar navbar-expand-lg navbar-dark bg-success"style="font-size:x-large">
        <div class="container">
            <a href=" "class="navbar-brand"style="
    font-size: -webkit-xxx-large;
">GoVIN</a>
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
</div>

    <!-- <form action="" method="" enctype="multipart/form-data"> -->

        @csrf
        <div class="container  mt-5 text-left">
        <div class="row">
        <div class="col-md-6  border p-5"style="
    background-color: antiquewhite;
">
            <div class="row text-center"><h1><u>Buyer's Details</u></h1></div><br>
        <div class="col-md-12">
        <div class="row ps-5" style="font-size:x-large">
    <div class="col-md-4">First Name:
        
    </div> 
        <div class="col-md-1">:</div> 

<div class="col-md-3">{{$res->f_name}}</div>
</div>




<div class="row ps-5"style="font-size:x-large">
    <div class="col-md-4">Last Name  
        
    </div> 
        <div class="col-md-1">:</div>
        <div class="col-md-3">{{$res->l_name}}</div>

</div>
        <div class="row ps-5"style="font-size:x-large">
    <div class="col-md-4">Country  
        
    </div> 
    <div class="col-md-1">:</div>

        <div class="col-md-1">{{$res->country}}</div> 
</div>
        <div class="row ps-5"style="font-size:x-large">
    <div class="col-md-4">E-mail
        
    </div> 
    <div class="col-md-1">:</div>

        <div class="col-md-1">{{$res->email}}</div> 
</div>
        <div class="row ps-5"style="font-size:x-large">


<div class="col-md-4">Phone</div>
    <div class="col-md-1">:</div>
    <div class="col-md-1">{{$res->phone}}
</div>
</div>

<div class="row ps-5"style="font-size:x-large">


<div class="col-md-4">City</div>
    <div class="col-md-1">:</div>
    <div class="col-md-1">{{$res->city}}
</div>
</div>
<div class="row ps-5"style="font-size:x-large">


<div class="col-md-4">Address</div>
    <div class="col-md-1">:</div>
    <div class="col-md-1">{{$res->address}}
</div>
</div>

</div>
</div>


<div class="col-md-6  border p-5"style="
    background-color: antiquewhite;
">
<table border=3 class="table table-bordered table-striped table-novel">
        <thead class="text-danger bg-warming" style="font-size:x-large">
    <th>Product_Name</th>
    <th>Quantity</th>
    <th>Total</th>
    <th>Status</th>
    <th>Image</th></thead>
<tr style="font-size:x-large">
@foreach($res2 as $result)
<td>{{$result->pro_name}}</td>
<td>{{$result->qty}}</td>
<td>{{$res->total}}</td>
<td>{{$res->status}}</td>
<td><img src="../images/{{$result->photo}}" height="50" width="50"></td>

</tr>

<br><br>
<!-- <input type="submit" value="Approve" name="app_rej"> -->
<!-- <input type="submit" value="Reject" name="app_rej"><br><br> -->

</table>
<form action="{{url('stripe')}}" method="post">
    @csrf
    <input type="hidden" name="total" value="{{$res->total}}"><br><br>
  <?php  if($res->status=="Pending")
  {?>
<div class="row"><input type="submit" value="Payment" class="btn btn-success"style="font-size:x-large"></div>
  <?php } ?>

</form>
@endforeach
</div>

</div>
</div>

<!-- </form> -->
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