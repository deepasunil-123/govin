<html>
<head>
    <title></title>
</head>
<body>
    <form action="<?php echo base_url('insert_student_data');?>" method="post">
        name<input type="text" name="name"><br><br>
    class<input type="text" name="class"><br><br>
        phone<input type="text" name="phone"><br><br>
        mark<input type="text"name="mark"><br><br>
        <input type="submit" value="submit">
        <a href="<?php echo base_url('view_student_data');?>">View</a>    </form>

    </form>
</body>