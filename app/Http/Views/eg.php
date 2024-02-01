<html>
<head>
<title></title>
</head>
<body>
  <?php $validation=\Config\Services::validation();?>
  <form action="<?php echo base_url('formaction');?>" method="post">
  Name  <input type="text" name="name">
  <?php
  if($validation->getError('name'))
  {
    echo $validation->getError('name');
  }
  ?><br><br>
  class<input type="text" name="class">
  <?php
  if($validation->getError('class'))
  {
    echo $validation->getError('class');
  }
  ?><br><br>
  <input type="submit" value="submit">
</form>
</body>
</html>
