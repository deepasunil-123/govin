<html>
<head>
    <title>
    </title></head><body>
        <form action="<?php echo base_url('re_image_form_insert');?>" method="post" enctype="multipart/form-data">
            Name<input type="text" name="name" ><br><br>
            Address<input type="text" name="add"><br><br>
            Gender<input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female<br><br><br>
            Occupation<select name="occup">
                <option value="Dr">Dr</option>
                <option value="Engineer">Engineer</option>
                <option value="Teacher">Teacher</option></select><br><br>
                Languages known<input type="checkbox" name="lang[]" value="English">English
                <input type="checkbox" name="lang[]" value="Hindi">Hindi
                <input type="checkbox" name="lang[]" value="Malayalam">Malayalam<br><br>
                Image<input type="file" name="image"><br><br>
                <input type="submit" name="submit" value="submit">
                <a href="<?php echo base_url('res_img_view_data');?>">View</a>    </form>
</body>
</html>
                



