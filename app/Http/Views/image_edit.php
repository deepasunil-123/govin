<html>
<head><title></title>
</head>
<body>
    <form action="<?php echo base_url('update_image_data/'.$result['id']);?>" method="post" enctype="multipart/form-data">
        Name<input type="text" name="name" value="<?php echo $result['name'];?>"><br><br>
image <img src="..\images\<?php echo $result['image'];?>" height="50" width="50"><br><br>
<input type="file" name="image" value="<?php echo $result['image'];?>">
<input type="submit" name="update" value="update">
</form>
</body>
</html>