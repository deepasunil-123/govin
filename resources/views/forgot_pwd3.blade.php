<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="bootstrap-5.2.2-dist\css\bootstrap.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
</div></div>
<body style="background-image:url('images/i4.jpg');background-size:cover">
<div class="container  mt-5">
        <div class="row">
        <div class="col-md-6 offset-3 border p-5"style="background-color: beige;">

    <form action="{{url('forgot_pwd3_function')}}" method="post">
        @csrf
        <div class="row text-center"><h2><u style="
    font-size: larger;
">Forgot Password</u></h2></div><br><br>
        <div class="row "style="
    font-size: x-large;
"> <div class="col-md-5">New Password</div><div class="col-md-6">    <input type="password"  name="npwd" class="form-control" required></div>
</div><br>
    <div class="row"style="
    font-size: x-large;
"><div class="col-md-5">Confirm Password</div><div class="col-md-6">    <input type="password" name="cpwd" class="form-control" required></div>
</div><br>
    <div class="row"style="
    font-size: x-large;
">
    <input type="submit" value="Submit" class="btn btn-success"style="
    font-size: x-large;
"></div>
</form>
</div>
</div>
</div>
</body>
</html>