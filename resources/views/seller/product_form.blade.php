<!-- <!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="bootstrap-5.2.2-dist\css\bootstrap.min.css">
<script src="bootstrap-5.2.2-dist\js\bootstrap.bundle.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css"href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <title>Document</title>
    <script src="js3\jquery-3.6.1.js"></script>

</head>
<body>
<div class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <a href=" "class="navbar-brand">Navbar</a>
            <ul class="navbar-nav">
            <li class="nav-item">
                <a href="{{url('sel_change_pwd')}}" class="nav-link">Change Password</a>
</li>

                <li class="nav-item">
                <a href="{{url('seller_view_profile')}}" class="nav-link">View Profile</a>
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
<li class="nav-item">
<a href="{{url('logout')}}" class="nav-link">Logout</a>
</li>

</div>
</div>
 -->
 <!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="bootstrap-5.2.2-dist\css\bootstrap.min.css">
<script src="bootstrap-5.2.2-dist\js\bootstrap.bundle.min.js"></script>
<script src="js3\jquery-3.6.1.js"></script>


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
            <a href="{{url('sel_change_pwd')}}" class="dropdown-item"style="
    font-size: larger;
">Change Password</a>
            </li>

            <li >
            <a href="{{url('logout')}}" class="dropdown-item"style="
    font-size: larger;
">Logout</a>
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
        <div class="col-md-6 offset-3 border p-5"style="
    background-color: aliceblue;
">

    <form action="{{url('add_pro_data')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row"><div class="col md-6 offset-3"><h1><u><i>Product Form</i></u></h1></div></div><br><br>
        <div class="row"><div class="col-md-3" style="font-size: x-large;">
    Category</div><div class="col-md-9"><select name="category" id="catgory" class="form-control" required>
    <option value="">--select--</option>

        @foreach($res as $result)
        <option value="{{$result->id}}">{{$result->cat_name}}
        </option>

@endforeach</select>
</div></div><br>
<div class="row"style="font-size:x-large"><div class="col-md-3"style="font-size:x-large;">
    <!-- Sub_Category_Name<input type="text" name="sub_cat"> -->
   Subcategory </div><div class="col-md-9"><select name="sub_category"id="sub_category" required class="form-control">

    <option value="{{$result->id}}">--select--</option>
           </select>
          
</div></div><br>
<div class="row"style="font-size:x-large"><div class="col-md-3"style="font-size: x-large;">
    Product</div><div class="col-md-9"><input type="text" name="product_name" class="form-control" required></div></div><br>
    <div class="row"style="font-size:x-large"><div class="col-md-3"style="font-size: x-large;">
    Price</div><div class="col-md-9" ><input type="text" name="price"class="form-control" required></div>    <span style="font-size: large;color:red;padding-left: 157px;">
    @if($errors->has('price'))
    {{$errors->first('price')}}
    @endif   
</div><br>
    <div class="row"style="font-size:x-large"><div class="col-md-3"style="font-size: x-large;">
    Quantity</div><div class="col-md-9"><input type="text" name="qty"class="form-control" required></div>    <span style="font-size: large;color:red;padding-left: 157px;">
    @if($errors->has('qty'))
    {{$errors->first('qty')}}
    @endif   
</div><br>
    <div class="row"style="font-size:x-large"><div class="col-md-3"style="font-size: x-large;">

    Photo</div><div class="col-md-9"><input type="file" name="photo" required><br><br></div></div>
    <div class="row m-4">

    <input type="submit" value="ADD" id="add" class="btn btn-success" style="font-size:x-large"></div>
    <script>   
//  $.ajaxSetup({
//         headers:{
//             'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')

//         }
//     });

 $('#catgory').change(function(){
    var cat=$('#catgory').val();
   //alert(cat);
    $.ajax({
        type:'get',
        url:"{{url('sub_category_data')}}",
        data:{
            category:cat
        },
        success:function(data)
        {          
                    $('#sub_category').empty();
            $.each(data,function(key,value)

           { 
            var res="<option value='"+value["id"]+"'>"+value['sub_cat_name']+"</option>";
            $('#sub_category').append(res);
           })
        },
    });
});

</script>
</div>
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