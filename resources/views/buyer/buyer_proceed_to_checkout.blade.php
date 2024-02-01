
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="bootstrap-5.2.2-dist\css\bootstrap.min.css">
<script src="bootstrap-5.2.2-dist\js\bootstrap.bundle.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-image:url('images/pic3.jfif'); background-size:cover">
<!-- <div class="navbar navbar-expand-lg navbar-dark bg-success">
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
@extends('buyer.buyer_nav')
@section('content')


    <form action="{{url('proceed_to_checkout_data')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container  mt-5 text-left">
        <div class="row">
        <div class="col-md-6  border p-5"style="
    background-color: aliceblue;
">
            <div class="col-md-10">
<div class="row ps-5"style="
    font-size: x-large;
">
    <div class="col">        <strong class="text-dark">

    First _Name</strong>
    </div>
    <div class="col">
    <input type="text" name="fname" class="form-control" required><br>
    </div>
</div>
<div class="row ps-5"style="
    font-size: x-large;
">
    <div class="col">        <strong class="text-dark">

Last_Name   </strong> </div>
    <div class="col">
    <input type="text" name="lname" class="form-control" required><br>
    </div>
</div>

<div class="row ps-5"style="
    font-size: x-large;
">
    <div class="col">        <strong class="text-dark">

Address  </strong>  </div>
    <div class="col">
    <input type="text" name="add" class="form-control" required><br>
    </div>
</div>

<div class="row ps-5"style="
    font-size: x-large;
">
    <div class="col">        <strong class="text-dark">

E-mail   </strong> </div>
    <div class="col">
    <input type="text" name="email" class="form-control" required><span style="font-size: large;color:red;padding-left: -3px;">
    @if($errors->has('email'))
    {{$errors->first('email')}}
    @endif<br>
    </div>
</div>

<div class="row ps-5"style="
    font-size: x-large;
">
    <div class="col">
        <strong class="text-dark">
Phone   </strong> </div>
    <div class="col">
    <input type="text" name="phone" class="form-control" required><span style="font-size: large;color:red;padding-left: -3px;">
    @if($errors->has('phone'))
    {{$errors->first('phone')}}
    @endif<br>
    </div>
</div>

<div class="row ps-5"style="
    font-size: x-large;
">
    <div class="col">        <strong class="text-dark">

Country </strong>   </div>
    <div class="col ">
    <input type="text" name="country" class="form-control" required><br>
    </div>
</div>

<div class="row ps-5"style="
    font-size: x-large;
">
    <div class="col">        <strong class="text-dark">

City  </strong>  </div>
    <div class="col">
    <input type="text" name="city" class="form-control" required> <br>  </div>
</div>

</div>
</div>

<div class="col-md-6  border p-5">

<table border=3 class="table table-bordered table-striped table-novel">
        <thead class="text-danger bg-warming"style="
    font-size: x-large;
">
        <th>Image</th>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <tbody>
        <?php     
                    $total=0;
?>

        @foreach($res as $result)

            <!-- <form action="{{url('place_order')}}" method="post'" enctype="multipart/form-data"> -->
            <tr style="
    background-color: cornsilk;
"><td><img src="images/{{$result->photo}}" height="50" width="50"></td>
<td>{{$result->pro_name}}</td>
            <td>{{$result->quantity}}</td>
            <td>{{$result->price*$result->quantity}}</td>
            <?php 
             $price=$result->quantity*$result->price;
             //print_r($price);
             //exit();


                $total=$total+$price;
                ?>

</tr>
<!-- </form> -->
@endforeach

</tbody></table><br>
<div class="row" style="font-size:x-large">Total  <?php print_r($total);?>
</div><br><br>
<input type="hidden" name="hidden" value="{{$total}}">
<div class="row" style="font-size: x-large;">
    <input type="submit" value="Place order" class="btn btn-success"style="
    font-size: x-large;
"></div>
</div>

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
@endsection