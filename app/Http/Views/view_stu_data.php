<html>
<head>
    <title>
    </title>
</head>
<body>
    <form action="" method="post">
        <table border=3>
            <thead><th>name</th>
                <th>class</th>
                <th>phone</th>
                <th>stu__id</th>
                <th>mark</th>
                <tbody><?php foreach($result as $res)
                {?><tr><td><?php echo $res['name'];?></td>
                    <td><?php echo $res['class'];?></td>
                    <td><?php echo $res['ph'];?></td>
                    <td><?php echo $res['stu_id'];?></td>
                    <td><?php echo $res['mark'];?></td>
                    <td><a href="<?php echo base_url('edit_student_data/'.$res['id']);?>">Edit</a>    </td>
                    <td><a href="<?php echo base_url('delete_student_data/'.$res['id']);?>">Delete</a>    </td>


                </tr>
                <?php } ?>
</tbody>
                </table>
                </body>
                </html>