<!DOCTYPE html>
<html lang="en">
<head>
 <!-- <link rel="stylesheet" href="bootstrap-5.2.2-dist\css\bootstrap.min.css">
 <script src="bootstrap-5.2.2-dist\js\bootstrap.bundle.min.js"></script> -->

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<div class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <a href=" "class="navbar-brand"style="
    font-size: xxx-large;
">GoVin</a>
            <ul class="navbar-nav">

                <li class="nav-item">

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
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="{{url('index')}}" class="nav-link"style="font-size:24px";><img src="images/OIP (15).jpg" height="30" width="30" style="
    padding-left: -2px;
"></a>
</li></ul>

</div></div>
<body style="background-image:url('images/pic2.jpg'); background-size:cover">
    <div class="container">
        <!-- Carousel -->
<!-- <div id="demo" class="carousel slide" data-bs-ride="carousel">

<!-- Indicators/dots -->
<!-- <div class="carousel-indicators">
  <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
</div> -->

<!-- The slideshow/carousel -->
<!-- <div class="carousel-inner">
  <div class="carousel-item active">
    <img src="images\pic10.jfif" alt="Los Angeles" class="d-block" style="width:100%;">
  </div>
  <div class="carousel-item">
    <img src="images\pic6.jfif" alt="Chicago" class="d-block" style="width:100%">
  </div>
  <div class="carousel-item">
    <img src="images\pic8.jfif" alt="New York" class="d-block" style="width:100%">
  </div>
</div> -->

<!-- Left and right controls/icons -->
<!-- <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
  <span class="carousel-control-next-icon"></span>
</button>
</div> -->



        <div class="row">
        <div class="col-md-4 offset-4 p-5 " style="position:absolute;top:111px;left:498px;color: seagreen;font-size: 30px;font-family: initial;background-color:honeydew">
    <form action="{{url('login_form')}}" method="post">
        @csrf
        <div class="row text-center"><h3><b><u><img src="images\OIP (26).jpg"></u></b></h3></div>
       <div class="row" style=" ">
       Username<input type="text" class="form-control" name="uname" required>

       </div>
       <div class="row">
    Password<input type="password" class="form-control" name="pwd" background-color="8696ad" required >
    </div>
    <div class="row mt-4 "style="font-size: 30px;font-family: initial;background-color:honeydew">
    <input type="submit" value="Login" class="btn btn-success" style="font-size:30px">
</div><br>
   <div class="row text-center"> <a href="{{url('forgot_pwd')}}">Forgot Password</a>
   </div>

</div>
</div>
</div>
</div>
</body>
</html>