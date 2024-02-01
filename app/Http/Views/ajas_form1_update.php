
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
    <label for="">Name</label><input type="text" name="name" id="name" value="<?php echo $result['name']?>"><br><br>
    Address<input type="text" name="address" id="add" value="<?php echo $result['address']?>"><br><br>
    Pin<input type="text" name="name" id="pin" value="<?php echo $result['pin']?>"><br><br>
    Phone <input type="text" name="name" id="ph" value="<?php echo $result['ph']?>"><br><br>

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
              var add=$('#add').val();
                     var pin=$('#pin').val();
       var ph=$('#ph').val();


    // alert(name);

       $.ajax({
        type:'post',
        url:'<?php echo base_url('ajas_form1_update')?>',
        data:{
            name:name,
            address:add,
            pin:pin,
            ph:ph,
            id:id,
        },
        success:function(data){
            alert("success");
            window.location.href="<?php echo base_url('ajasform1');?>";
        },
       })
    });

</script>

