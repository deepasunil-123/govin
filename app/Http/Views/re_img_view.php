<html>
<head>
    <title></title></head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
<table border="3">
    <thead>
        <th>Name</th>    
            <th>Address</th>

        <th>Gender</th>
        <th>languages</th>
        <th>occupation</th>
        <th>Image</th>
</thead>
        <tbody>
            <?php foreach($result as $res)
            {
                ?>
                <tr>
                <td><?php echo $res['name'];?></td>

                <td><?php echo $res['address'];?></td>
                <td><?php echo $res['gender'];?></td>
                <td><?php echo $res['languages'];?></td>
                <td><?php echo $res['occup'];?></td>
                <td><img src="..\image\<?php echo $res['image'];?>" height="50" width="50"></td>
                <td><a href="<?php echo base_url('res_image_edit_data/'.$res['id']);?>">Edit</a></td>

                <td><a href="<?php echo base_url('res_image_delete_data/'.$res['id']);?>">Delete</a></td>
                </tr>
            <?php
            }
            ?>
            
</tbody>
</table>
</body>
</html>

