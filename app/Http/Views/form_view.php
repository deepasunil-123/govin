<html>
<head><title>

</title></head>
<body><form action="" method="post">
    <table border=3>
        <thead>
        <th>Name</th>    
            <th>Address</th>

        <th>phone</th>
        <th>Gender</th>
        <th>job</th>
        <th>Hobbies</th></thead>
        <tbody>
            <?php foreach($result as $res)
            {
                ?>
                <tr>
                <td><?php echo $res['name'];?></td>

                <td><?php echo $res['address'];?></td>
                <td><?php echo $res['phone'];?></td>
                <td><?php echo $res['gender'];?></td>
                <td><?php echo $res['job'];?></td>
                <td><?php echo $res['hobbies'];?></td>
                <td><a href="<?php echo base_url('edit_test/'.$res['id']);?>">Edit</a></td>

                <td><a href="<?php echo base_url('delete/'.$res['id']);?>">Delete</a></td>
                </tr>
            <?php
            }
            ?>
            
</tbody>
</table>
</body>
</html>
