<html>
    <head><title></title></head><body>
        <form action="" method="post">
           <b> Name</b><?php echo "  ".$result['name'];?><br><br>
           <b>Address</b><?php echo"  ". $result['address'];?><br><br>
           <b>Phone</b><?php echo "  ".$result['phone'];?><br><br>
           <b>Username</b><?php echo "  ".$result['uname'];?><br><br>
           <b>Password</b><?php echo "  ".$result['pwd'];?><br><br>
            <a href="<?php echo base_url('2reg_edit_profile');?>">Edit_Profile</a>
        </form>