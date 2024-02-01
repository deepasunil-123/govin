<html>
    <head>
        <title>
</title>
</head>
    <body>
    <form action="<?php  echo base_url('update_form/'.$result['id']);?>" method="post">
    Name<input type="text" name="name" value="<?php echo $result['name'];?>"><br><br>
        Address<textarea name="address"><?php echo $result['address'];?></textarea><br><br>
        Gender<input type="radio" name="gender" value="Male"<?php if($result['gender']=='male'){echo "checked";}?>>Male
        <input type="radio" name="gender" value="Female"<?php if($result['gender']=='female'){echo "checked";}?>>Female<br><br>
        City<input type="text" name="phone"value="<?php echo $result['city'];?>"><br><br>

        Phone<input type="text" name="phone"value="<?php echo $result['ph'];?>"><br><br>
        pin<input type="text" name="phone"value="<?php echo $result['pin'];?>"><br><br>
        Email<input type="text" name="email"value="<?php echo $result['email'];?>"><br><br>

        City<select name="city">
            <option value="Kannur"<?php if($result['city']=='Kannur'){echo "selected";}?>>Kannur</option>
            <option value="Calicut"<?php if($result['city']=='Calicut'){echo "selected";}?>>Calicut</option>
            <option value="Kochi"<?php if($result['city']=='Kochi'){echo "selected";}?>>Kochi</option>
            <option value="Tvm"<?php if($result['city']=='Tvm'){echo "selected";}?>>Tvm</option></select>  <br> <br>

        Course_Completed<input type="checkbox" name="course[]" value="BA"<?php $i=$result['course_completed'];
        $arr=explode(',',$i);
        if(in_array('BA',$arr))
        {
            echo "checked";}?>>BA
        
      <input type="checkbox" name="course[]" value="MA"<?php $i=$result['course_completed'];
        $arr=explode(',',$i);
        if(in_array('MA',$arr))
        {
            echo "checked";}?>>MA
        <input type="checkbox" name="course[]" value="Bed"<?php $i=$result['course_completed'];
        $arr=explode(',',$i);
        if(in_array('Bed',$arr))
        {
            echo "checked";}?>>Bed
<br><br>
        <input type="submit"value="update">
</form>
</body>
</html>