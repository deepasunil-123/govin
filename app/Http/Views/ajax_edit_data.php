
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <script src="..\js3\jquery-3.6.1.min.js"></script>

</head>

<body>
<!-- <form action="" method="post"> -->
    <label for="">Name</label>
    <input type="text" name="name" id="name" value="<?php echo $result['name']?>">
    <br><br><input type="hidden" id="hidde" value="<?php echo $result['id']?>">
    <input type="submit" value="Update" id="up_date">
    <br><br>
<!-- </form> -->
</body>
</html>



<script>
    $('#up_date').click(function(){
         var id=$('#hidde').val();
        //  alert(hide);
       var name=$('#name').val();
    // alert(name);

       $.ajax({
        type:'post',
        url:'<?php echo base_url('newupdate')?>',
        data:{
            name:name,
            id:id,
        },
        success:function(data){
            alert("success");
            window.location.href="<?php echo base_url('ajaxform');?>";
        },
       })
    });

</script>

