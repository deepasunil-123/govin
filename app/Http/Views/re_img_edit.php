<html>
<head><title></title>
</head>
<body>
    <form action="<?php echo base_url('update_re_image_data/'.$result['id']);?>" method="post" enctype="multipart/form-data">
        Name<input type="text" name="name" value="<?php echo $result['name'];?>"><br><br>
        Address<input type="text" name="add" value="<?php echo $result['address'];?>"><br><br>
        Gender<input type="radio" name="gender" value="Male"<?php if($result['gender']=='Male'){echo "checked";}?>>Male
        <input type="radio" name="gender" value="Female"<?php if($result['gender']=='Female'){echo "checked";}?>>Female<br><br>
        occupation<select name="occupation">
            <option value="Dr"<?php if($result['occup']=='Dr'){echo "selected";}?>>Dr</option>
            <option value="Engineer"<?php if($result['occup']=='Engineer'){echo "selected";}?>>Engineer</option>
            <option value="Teacher"<?php if($result['occup']=='Teacher'){echo "selected";}?>>Teacher</option>
            </select>  <br> <br>

        languages<input type="checkbox" name="lang[]" value="English"<?php $i=$result['languages'];
        $arr=explode(',',$i);
        if(in_array('English',$arr))
        {
            echo "checked";}?>>English
        
      <input type="checkbox" name="lang[]" value="Hindi"<?php $i=$result['languages'];
        $arr=explode(',',$i);
        if(in_array('Hindi',$arr))
        {
            echo "checked";}?>>Hindi
        <input type="checkbox" name="lang[]" value="Malayalam"<?php $i=$result['languages'];
        $arr=explode(',',$i);
        if(in_array('Malayalam',$arr))
        {
            echo "checked";}?>>Malayalam<br><br>




image <img src="image\<?php echo $result['image'];?>" height="50" width="50"><br><br>
<input type="file" name="image" value="<?php echo $result['image'];?>">
<input type="submit" name="update" value="update">
</form>
</body>
</html>