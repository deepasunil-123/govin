  <!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="..\bootstrap-5.2.2-dist\css\bootstrap.min.css">
<script src="bootstrap-5.2.2-dist\js\bootstrap.bundle.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <title>Document</title>
    <script src="..\js3\jquery-3.6.1.js"></script>

</head>
<body style="background-image:url('../images/i2.webp');background-size:cover">
<div class="navbar navbar-expand-xxl navbar-dark bg-success height-py-9" style="font-size:25px">
        <div class="container">
            <a href=" "class="navbar-brand"style="
    font-size: xxx-large;
"><b>GoVin</b></a>
            <ul class="navbar-nav">

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


<div class="container p-5">
        <div class="row">
        <div class="col-md-6 offset-3 border p-5"style="
    background-color: aliceblue;
">
        <div class="row text-center"><h1><u><c>Edit Product</c></u></h1></div><br>
    <form action="{{url('seller_update_pro_data',$res->pid)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row text-center">        <img src="../images/{{$res->photo}}" height="300" width="300"></div>
<br><br>   <div class="row"><div class="col-md-12">
<input type="file" class="form-control" name="photo" value="{{$res->cat_name}}" ></div></div><br>
<div class="row"><div class="col-md-3"style="font-size: larger;">
    Category_Name</div><div class="col-md-9"><select name="category" id="catgory" class="form-control" required>
        @foreach($res1 as $result)
        <option value="{{$result->id}}"
         @if($result->id==$res->cat_id)
        selected
        @endif>{{$result->cat_name}}</option>
    

@endforeach</select><br>
</div></div>
    <!-- Sub_Category_Name<input type="text" name="sub_cat"> -->
    <div class="row"><div class="col-md-3"style="font-size: larger;">
   Subcategory </div><div class="col-md-9"><select name="sub_category"id="sub_category" class="form-control" required>
   @foreach($res_sub as $result_sub)
        <option value="{{$result_sub->id}}"
         @if($result_sub->id==$res->sub_cat_id)
        selected
        @endif>{{$result_sub->sub_cat_name}}</option>
        @endforeach </select>
</div>
</div><br>
<div class="row"><div class="col-md-3"style="font-size: larger;">

    Product_name</div><div class="col-md-9"><input type="text" name="product_name" value="{{$res->pro_name}}" class="form-control" required></div></div><br>
    <div class="row"><div class="col-md-3"style="font-size: larger;">

    Price</div><div class="col-md-9"><input type="text" name="price" value="{{$res->price}}" class="form-control" required></div><span style="font-size: large;color:red;padding-left: 157px;">
    @if($errors->has('price'))
    {{$errors->first('price')}}
    @endif   </div><br>
    <div class="row"><div class="col-md-3"style="font-size: larger;">

    Quantity</div><div class="col-md-9"><input type="text" name="qty" value="{{$res->qty}}" class="form-control" required></div><span style="font-size: large;color:red;padding-left: 157px;">
    @if($errors->has('qty'))
    {{$errors->first('qty')}}
    @endif   </div><br>
    <div class="row m-3 text-center"><div class="column">    <input type="submit" value="UPDATE" id="update" class="btn btn-success"></div>


</div>
    <script>   
//  $.ajaxSetup({
//         headers:{
//             'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')

//         }
//     });

 $('#catgory').change(function(){
    var cat=$('#catgory').val();
   alert(cat);
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