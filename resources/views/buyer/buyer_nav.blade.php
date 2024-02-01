
    
<div class="navbar navbar-expand-xxl navbar-dark bg-success height-py-9"  style="font-size:20px";>
        <div class="container">
        <a href=" "class="navbar-brand" style="
    font-size: -webkit-xxx-large;
"><b>GoVin</b></a>
            <ul class="navbar-nav">

                <li class="nav-item">
                <a href="{{url('buyer_view_profile')}}" class="nav-link"style="
    font-size: larger;
">Profile</a>
</li>
<li class="nav-item">
                <a href="{{url('buyer_view_product')}}" class="nav-link"style="
    font-size: larger;
">Products</a>
</li>
<li class="nav-item">
                <a href="{{url('buyer_view_cart')}}" class="nav-link"style="
    font-size: larger;
">Cart</a>
</li>
<li class="nav-item">
                <a href="{{url('buyer_view_order')}}" class="nav-link"style="
    font-size: larger;
">Orders</a>
</li>
<li class="nav-item dropdown">
<a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="margin-left: 140px;border: solid;border-color: silver;"><?php echo session('email');?>
</a>

            <ul class="dropdown-menu"style="margin-left: 140px;background-color: #b0f0b0;font-size:18px;">
            <li >
            <a href="{{url('buy_change_pwd')}}" class="dropdown-item">Change Password</a>
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
@yield('content')