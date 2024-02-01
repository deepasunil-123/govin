<html>
    <head><title></title></head><body>
        <form action="<?php echo base_url('reg_2_update_profile');?>" method="post">
           <b> Name</b><input type="text"  name="name" value=<?php echo $result['name'];?>><br><br>
           <b>Address</b><input type="text" name="add" value=<?php echo $result['address'];?>><br><br>
           <b>Phone</b><input type="text"  name="ph" value=<?php echo $result['phone'];?>><br><br>
           <b>Username</b><input type="text" name="uname" value=<?php echo $result['uname'];?>><br><br>
           <b>Password</b><input type="text" name="pwd" value=<?php echo $result['pwd'];?>><br><br>
<input type="submit" value="update">
</form>
</body>
</html>