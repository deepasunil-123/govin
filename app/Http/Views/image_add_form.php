<html>
<head><title></title>
</head>
<body>
    <form action="<?php echo base_url('image_form_insert');?>" method="post" enctype="multipart/form-data">
    Name<input type="text" name="name"><br><br>
    Image<input type="file" name="image"><br><br>
    <input type="submit" value="insert">
    <a href="<?php echo base_url('image_form_view');?>">View</a>    </form>
</form>
</body>
</html>
