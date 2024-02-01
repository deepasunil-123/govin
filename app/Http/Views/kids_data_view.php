<html>
    <head><title></title>
    </head>
    <body>
        <form action="" method="post">
            <table border=3>
                <thead>
                    <th>Name</th>
                <th>ph</th>
                <tbody>
                    <?php foreach($result as $res)
                    {?>
                    <tr>
                        <td><?php echo $res['name'];?></td>
                        <td><?php echo $res['ph'];?></td>
                        <td><a href="<?php echo base_url('edit_kids_data/'.$res['id']);?>">Edit</a></td>
                        <td><a href="<?php echo base_url('delete_kids_data/'.$res['id']);?>">Delete</a></td>

                    </tr></tbody>
                    <?php }?></tbody></table></body></html>


