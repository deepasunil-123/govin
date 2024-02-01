<html>
<head><title>

</title></head>
<body><form action="" method="post">
    <table border=3>
        <thead>
        <th>Name</th>    
      <th>Address</th>
       <th>Gender</th>
       <th>city</th>
        <th>ph</th>
        <th>pin</th>
        <th>email</th>
        <th>course_completed</th>

</thead>
        <tbody>
            <?php foreach($result as $res)
            {
                ?>
                <tr>
                <td><?php echo $res['name'];?></td>

                <td><?php echo $res['address'];?></td>
                <td><?php echo $res['gender'];?></td>

                <td><?php echo $res['city'];?></td>
                <td><?php echo $res['ph'];?></td>
                <td><?php echo $res['pin'];?></td>

                <td><?php echo $res['email'];?></td>
                <td><?php echo $res['course_completed'];?></td>


                <td><a href="<?php echo base_url('res_edit/'.$res['id']);?>">Edit</a></td>

                <td><a href="<?php echo base_url('res_delete/'.$res['id']);?>">Delete</a></td>
                </tr>
            <?php
            }
            ?>
            
</tbody>
</table>
</body>
</html>
