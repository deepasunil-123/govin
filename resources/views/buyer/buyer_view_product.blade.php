<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="bootstrap-5.2.2-dist\css\bootstrap.min.css">
<script src="js3\jquery-3.6.1.min.js"></script>
<meta name="csrf_token" content="{{csrf_token()}}">

<script src="bootstrap-5.2.2-dist\js\bootstrap.bundle.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
<div class="container-flex mt-5 ps-5">
    <div class="row text-center"><img src="images/pic4.jpg" class="rounded-circle" height="150" width="150" style="margin-left: 11px;margin-top: 5px;">
</div>
<br><br>
<div class="row ms-4"><div class="col-md-3"style="
    font-size: x-large;
"><select name="category" id="catgory" class="form-control"style="
    font-size: x-large;
">
<option value="">Category</option>
@foreach($res1 as $result)
<option value="{{$result->id}}">{{$result->cat_name}}
        </option>

@endforeach</select>
</div>
<div class="col-md-3"style="
    font-size: x-large;
">
<select name="sub_category" id="sub_category" class="form-control"style="
    font-size: x-large;
">
    <option value="">Subcategory</option></select>
</div>
</div><br><br>
    <div class="row" id="row1">
        @foreach($res as $result)

        <div class="col-md-2 border m-4 p-3">

          <img src="images/{{$result->photo}}" alt="" class="" width="100%" height="300">
         <div class="row pt-3 m-2"style="font-size: large;"><div class="col-md-8">Product Name:</div><div class="col-md-4">{{$result->pro_name}}</div></div>
         <div class="row pt-1 m-2"style="font-size: large;"><div class="col-md-8">Price:</div><div class="col">{{$result->price}}</div></div>

         <div class="row m-2"><a href="{{url('buyer_view_product_details',$result->pid)}}" class="btn btn-success"style="
    font-size: x-large;
">Details</a></div>
         </div>
         @endforeach

        </div>





</div>
</div></form>
<script>
    $.ajaxSetup({
        header:{
            'X-CSRF-TOKEN':$('meta[name="CSRF_token"]').attr('content')}});

// $('#category').change(function(){
//     var cat=$('#category').val();
//     var sub_cat('#sub_category').val();
 
//     $.ajax({
//         type:'post',
//         url:"{{url('search_product')}}",
//         data:{
//             category:cat
//             sub_category:sub_cat
//         },
//         success:function(data)
//            { 

// alert(data);
// // $.each(data,function(key,value)
// // {
// // alert(value['photo']);
// // })

// $.each(data,function(key,value)
// {

// var res="<option value='"+value["id"]+"'>"+value['sub_cat_name']+"</option>";
// $('#sub_category').append(res);




//            });
//         }
//            });
//     });

// comment
// $('#category').change(function(){
//     var cat=$('#category').val();
 
//     $.ajax({
//         type:'post',
//         url:"{{url('search_product')}}",
//         data:{
//             category:cat
//         },
//         success:function(data)
//            { 

// alert(data);

// $.each(data,function(key,value)
// {

// var res="<option value='"+value["id"]+"'>"+value['sub_cat_name']+"</option>";
// $('#sub_category').append(res);

// })



// },
//     });


$('#catgory').change(function(){
    var cat=$('#catgory').val();

//    alert(cat);
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



$('#sub_category').change(function(){
    var cat=$('#catgory').val();
    var sub_cat=$('#sub_category').val();

    // alert(sub_cat);
    $.ajax({
        method:'get',
        url:"{{url('check_search_product')}}",
        data:{
            category:cat,
            sub_category:sub_cat

        },
        success:function(data)
        {    
           // alert(data);  
           if(data.length!=0)    
           {
                    $('#row1').empty();
            $.each(data,function(key,value)

           { 
            var res='<div class="col-md-2 border m-4 p-3"><img src="images/'+value['photo']+'" alt="" class="" width="100%" height="300"><div class="row pt-3 m-2"style="font-size: large;"><div class="col-md-8">Product Name:</div><div class="col-md-4">'+value['pro_name']+'></div></div><div class="row pt-1 m-2"style="font-size: large;"><div class="col-md-8">Price:</div><div class="col">'+value['price']+'</div></div><div class="row m-2"><a href="buyer_view_product_details/'+value['pid']+'" class="btn btn-success"style="font-size: x-large;">Details</a></div></div>';
            $('#row1').append(res);
           })
        }
        else
        {
            $('#row1').empty();

var res2='<div class="col text-center" id="row2" style="padding-top: 105px;font-size: 24px;color: #b3b0b0;">The given datas are not available</div>';          
             $('#row1').append(res2);

        }
        },
    });
});


</script>


</body>
</html>
@endsection



