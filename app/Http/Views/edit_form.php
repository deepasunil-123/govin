<html>
    <head>
        <title>
</title>
</head>
    <body>
    <form action="<?php  echo base_url('update/'.$result['id']);?>" method="post">
    Name<input type="text" name="name" value="<?php echo $result['name'];?>"><br><br>
        Address<textarea name="address"><?php echo $result['address'];?></textarea><br><br>
        Phone<input type="text" name="phone"value="<?php echo $result['phone'];?>"><br><br>
        Gender<input type="radio" name="gender" value="Male"<?php if($result['gender']=='Male'){echo "checked";}?>>Male
        <input type="radio" name="gender" value="Female"<?php if($result['gender']=='Female'){echo "checked";}?>>Female<br><br>
        Job<select name="job">
            <option value="Doctor"<?php if($result['job']=='Doctor'){echo "selected";}?>>Doctor</option>
            <option value="Engineer"<?php if($result['job']=='Engineer'){echo "selected";}?>>Engineer</option>
            <option value="Teacher"<?php if($result['job']=='Teacher'){echo "selected";}?>>Teacher</option>
            <option value="Professor"<?php if($result['job']=='Professor'){echo "selected";}?>>Professor</option></select>  <br> <br>

        Hobbies<input type="checkbox" name="hob[]" value="Reading"<?php $i=$result['hobbies'];
        $arr=explode(',',$i);
        if(in_array('Reading',$arr))
        {
            echo "checked";}?>>Reading
        
      <input type="checkbox" name="hob[]" value="Playing"<?php $i=$result['hobbies'];
        $arr=explode(',',$i);
        if(in_array('Playing',$arr))
        {
            echo "checked";}?>>Playing
        <input type="checkbox" name="hob[]" value="Travelling"<?php $i=$result['hobbies'];
        $arr=explode(',',$i);
        if(in_array('Travelling',$arr))
        {
            echo "checked";}?>>Travelling
        <input type="checkbox" name="hob[]" value="Singing"<?php $i=$result['hobbies'];
        $arr=explode(',',$i);
        if(in_array('Singing',$arr))
        {
            echo "checked";}?>>Singing<br><br>
        <input type="submit"value="update">
</form>
</body>
</html>