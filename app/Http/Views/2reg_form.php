<html>
    <head>
        <title>codign</title></head>
        <body><form action="<?php echo base_url('2reg_form')?>"method="post">
            Name<input type="text" name="name"><br><br>
            Address<input type="text" name="add"><br><br>
            Phone<input type="text" name="ph"><br><br>
            Username<input type="text" name="uname"><br><br>
            Password<input type="text" name="pwd"><br><br>
            <input type="submit" value="Register"><br><br>
            <h1><a href="<?php echo base_url('2reg_login');?>">login</a></h1>
        </form>
        </body>
        </html>