<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="..\bootstrap-5.2.2-dist\css\bootstrap.min.css">
<script src="..\js3\jquery-3.6.1.min.js"></script>
<link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<meta name="csrf_token" content="{{csrf_token()}}">

<script src="..\bootstrap-5.2.2-dist\js\bootstrap.bundle.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <a href=" "class="navbar-brand"style="
    font-size: xxx-large;
">GOVIN</a>
            <ul class="navbar-nav">
            <li class="nav-item">
                <a href="{{url('login')}}" class="nav-link"style="font-size:24px";>login</a>
</li>

<li class="nav-item dropdown">
            <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="font-size:24px";>Register</a>
            <ul class="dropdown-menu"style="background-color: #b0f0b0;font-size:18px;">
            <li >
                <a href="{{url('buyer_reg')}}" class="dropdown-item">Buyer Registration</a>
            </li>
            <li >
                <a href="{{url('seller_reg')}}" class="dropdown-item">Seller Registration</a>
            </li>
            </ul> 

        </li>

</div>
</div><div class="container  mt-5">
        <div class="row">
        <div class="col-md-6 offset-3 border p-5">

    <form action="{{url('add_to_cart',$res->pid)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row text-center"><h1><u>Product Details</u></h1></div><br>
        <div class="row">        <img src="../images/{{$res->photo}}" height="300" width="300">
</div>
<br><br>

<div class="row"style="
    font-size: x-large;
"><div class="col-md-5">Product</div><div class="col">:</div><div class="col-md-4">{{$res->pro_name}}</div></div>

<div class="row"style="
    font-size: x-large;
"><div class="col-md-5">Quantity</div><div class="col">:</div><div class="col-md-4">{{$res->qty}}</div></div>
<div class="row"style="
    font-size: x-large;
"><div class="col-md-5">Price</div><div class="col">:</div><div class="col-md-4">{{$res->price}}</div></div>
<div class="row"style="
    font-size: x-large;
"><div class="col-md-5">Category</div><div class="col">:</div><div class="col-md-4">{{$res->cat_name}}</div></div>
<div class="row"style="
    font-size: x-large;
"><div class="col-md-5">Sub Category</div><div class="col">:</div><div class="col-md-4">{{$res->sub_cat_name}}</div></div><br><br>

<div class="row"style="
    font-size: x-large;
"><div class="col-md-4">Quantity: </div><div class="col-md-4"><div class="col"><input type="text" name="qty" class="form-control"></div></div></div><br><br>
<div class="row">
<input type="submit" value="Add to cart" class="btn btn-success"style="
    font-size: x-large;
"></div>
</div>

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

</html>

<script>
    @if(Session::has('message'))
    toastr.options=
    {"closeButton":true,
        "progressBar":true}
        toastr.success("{{session('message')}}");
        @endif

    </script>
