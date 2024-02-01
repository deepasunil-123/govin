<html>
<head>
    <title></title></head><body>
        <form action="" method="post"><h2>
             Name</h2><?php echo"     ". $result['name'];?><br><br>
             <h2>Email</h2><?php echo"      ". $result['email'];?><br><br>
             <h2> phone</h2><?php echo"      ". $result['ph'];?><br><br>
             <h2>Username</h2><?php echo"     ". $result['uname'];?><br><br>
             <h2>Password</h2><?php echo"     ".$result['pwd'];?><br><br>
            <a href="<?php echo base_url('edit_profile');?>"><h1><i>Edit profile</i></h1></a>

        </form>
</body>
</html>