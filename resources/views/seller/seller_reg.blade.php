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
<body style="background-image:url('images/i8.jpg');background-size:cover">
<div class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <a href=" "class="navbar-brand"style="
    font-size: xxx-large;
">GoVin</a>
            <ul class="navbar-nav">

            <li class="nav-item dropdown">
            <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"style="
    font-size: x-large;
">Registration</a>
            <ul class="dropdown-menu"style="
    background-color: antiquewhite;
">
            <li >
                <a href="{{url('buyer_reg')}}" class="dropdown-item"style="
    font-size:x-large;
"><i>Buyer Registration</i></a>
            </li>
            <li >
                <a href="{{url('seller_reg')}}" class="dropdown-item"style="
    font-size:x-large;
"><i>Seller Registration</i></a>
            </li>
            </ul> 

        </li>
        <li class="nav-item">
<a href="{{url('logout')}}" class="nav-link"style="
    font-size: x-large;
">Logout</a>
</li>

        </div>
</div>

<div class="container  mt-5">
        <div class="row">
        <div class="col-md-6 offset-3 border p-5"style="background-color: beige;">

   <form action="{{url('seller_insert_form')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row text-center"><h3><u>REGISTRATION</u></h3></div><br>
    <div class="row"><div class="col-md-3"style="
    font-size: x-large;
">Name</div> <div class="col">   <input type="text" name="name" class="form-control"required></div>

</div><br>
     <div class="row">

<div class="col-md-3"style="
    font-size: x-large;
">Email</div><div class="col">
    <input type="mail" name="email" class="form-control"required></div> <div class="row text-danger"style="
    padding-left: 173px;
">  
     @if($errors->has('email'))
    {{$errors->first('email')}}
    @endif
    </div></div><br>

    <div class="row">
<div class="col-md-3"style="
    font-size: x-large;
">Phone</div><div class="col">    <input type="text" name="phone" class="form-control"required></div>
<div class="row text-danger"style="
    padding-left: 173px;
">
    @if($errors->has('phone'))
    {{$errors->first('phone')}}
    @endif</div>
    </div><br>

    <div class="row">
<div class="col-md-3"style="
    font-size: x-large;
">Place</div><div class="col">    <input type="text" name="place" class="form-control" required>
</div>
    @if($errors->has('place'))
    {{$errors->first('place')}}
    @endif    </div><br>

    <div class="row"><div class="col-md-3"style="
    font-size: x-large;
">Username</div><div class="col">    <input type="text" name="uname" class="form-control" required>
</div>

    </div><br>

    <div class="row"><div class="col-md-3"style="
    font-size: x-large;
">Password</div><div class="col">    <input type="password" name="pwd" class="form-control" required>
</div>

    </div><br>

    <div class="row">
<div class="col-md-3"style="
    font-size: x-large;
">  Photo </div><div class="col"><input type="file" name="photo" class="form-control" required></div>   </div><br>
    <div class="row mt-4">

    <input type="submit" value="Register" class="btn btn-success" style="
    font-size: x-large;
"> </div>

</form>

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