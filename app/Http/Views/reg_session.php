<html>
<head>
    <title>
    </title></head><body><form action="<?php echo base_url('insert_reg_form');?>" method="post">
    Name<input type="text" name="name"><br><br>
                        E-mail<input type="email" name="email"><br><br>
                   Phone <input type="text" name="ph"><br><br>
               Username <input type="text" name="uname"><br><br>
           password <input type="password" name="pwd"><br><br>
        <input type="submit" value="submit"><br><br>
        <h1><a href="<?php echo base_url('check_login');?>">login</a></h1>
    </form>
    </body></html>