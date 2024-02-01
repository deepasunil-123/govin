<html>
<head>
    <title>
    </title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <table border=3>
            <thead><th>Name</th>
                <th>Image</th>
                <tbody>
                    <?php foreach($result as $res)
                    {
                        ?>
                        <tr>
                            <td><?php echo $res['name'];?></td>
                            <td><img src="..\images\<?php echo $res['image'];?>" height="50" width="50"></td>
                        <td><a href="<?php echo base_url('edit_image_data/'.$res['id']);?>">Edit</a></td>
                    <td><a href="<?php echo base_url('delete_image_data/'.$res['id']);?>">Delete</a></td></tr>
                    <?php }?>
                </tbody></table></form></body></html>



                    
