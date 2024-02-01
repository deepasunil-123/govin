<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="bootstrap-5.2.2-dist\css\bootstrap.min.css">
<script src="bootstrap-5.2.2-dist\js\bootstrap.bundle.min.js"></script>

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
</div>
 -->
 @extends('buyer.buyer_nav')
 @section('content')
<div class="container  mt-5">
        <div class="row">
        <div class="col-md-5 offset-7 border p-5" style="background-color: aliceblue;">

    <form action="{{url('buy_change_pwdfunction')}}" method="post">
        @csrf
        <div class="row text-center"><h1><u><i><b>Change Password</b></i></u></h1></div><br>
        <div class="row"><div class="col-md-4 "style="font-size: larger;">
    Old password</div><div class="col-md-6"><input type="password" name="opwd" class="form-control" required></div></div><br>
    <div class="row"><div class="col-md-4 "style="font-size: larger;">
    New password</div><div class="col-md-6"><input type="password" name="npwd" class="form-control" required></div></div><br>
    <div class="row"><div class="col-md-4 "style="font-size: larger;">
    Confirm password</div><div class="col-md-6"><input type="password" name="cpwd" class="form-control" required></div></div><br>
    <div class="row">
    <input type="submit" value="CHANGE" class="btn btn-success" ></b></div>
</form>
</div>
</div>
</div>
</body>
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
@endsection