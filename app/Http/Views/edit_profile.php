<html>
<head>
    <title></title></head><body>
        <form action="<?php echo base_url('update_profiledata');?>" method="post"><h2>
             Name   <input type="text" name="name" value="<?php echo $result['name'];?>"><br><br>
             <h2>Email  <input type="mail"name="email" value="<?php echo $result['email'];?>"><br><br>
             <h2> phone <input type="text" name="ph"value="<?php echo $result['ph'];?>"><br><br>
             <h2>Username   <input type="text" name="uname"value="<?php echo $result['uname'];?>"><br><br>
             <h2>Password   <input type="password" name="pwd" value="<?php echo $result['pwd'];?>"><br><br>
<h2><b><input type="submit" value="update"></h2>
        </form>
</body>
</html>