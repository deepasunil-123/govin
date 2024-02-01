<html>
<head>
    <title></title>
</head>
<body>
<form action="<?php echo base_url('update_student_data/'.$result['id']);?>" method="post">
Name<input type="text" name="name" value="<?php echo $result['name'];?>"><br><br>
class<input type="text" name="class"value="<?php echo $result['class'];?>"><br><br>
phone<input type="text" name="phone"value="<?php echo $result['ph'];?>"><br><br>
stu_id<input type="text" name="stu_id"value="<?php echo $result['stu_id'];?>"><br><br>
Mark<input type="text" name="mark"value="<?php echo $result['mark'];?>"><br><br>
<input type="submit" value="UPDATE">


</form></body>
</html>