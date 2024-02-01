<html>
<head>
    <title></title>
</head>
<body>
    <form action="<?php echo base_url('form_insert');?>" method="post">
        name<input type="text" name="name"><br><br>
        address<input type="textarea" name="address"><br><br>
        gender<input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female<br><br>
        city<select name="city"><option value="Kannur">Kannur</option>
            <option value="Calicut">Calicut</option>
            <option value="Kochi">Kochi</option>
            <option value="Tvm">Tvm</option></select><br><br>
        ph<input type="text"  name="ph"><br><br>
        pin<input type="text" name="pin"><br><br>
        email<input type="text" name="email"><br><br>
        course completed<input type="checkbox" name="course[]" value="BA">BA
        <input type="checkbox" name="course[]" value="MA">MA
        <input type="checkbox" name="course[]" value="Bed">Bed<br><br>
        <input type="submit" value="insert">
        <a href="<?php echo base_url('view_data');?>">View</a>    </form>
</body>
</html>