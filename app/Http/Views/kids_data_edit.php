<html>
<head><title></title>
</head>
<body>
    <form action="<?php  echo base_url('update_kids_data/'.$result['id']);?>" method="post">
        Nmae<input type="text" name="name" value="<?php echo $result['name'];?>"><br><br>
        Ph<input type="text" name="ph" value="<?php echo $result['ph'];?>"><br><br>
        <input type="submit" name="update">
    </form>
</body>
</html>