<html>
    <head>
        <script src="js3\jquery-3.6.1.min.js"></script>

    </head>
    <body>
        <label for="">Name</label>
        <input type="text" name="name" id="name">
        <br><br>
        <label for="">Address</label>

        <input type="text" name="address" id="add">        <br><br>
        <label for="">Pin</label>

        
        <input type="text" name="pin" id="pin">        <br><br>
        <label for="">Phone</label>

        <input type="text" name="ph" id="ph">        <br><br>
        


        <input type="submit" value="sub" id="sub">
        <br><br>
        <input type="submit" value="view" id="views">
        <table  border=3>
    <thead>
        <th>Name</th>
        <th>Address</th>
        <th>Pin</th>
        <th>Phone</th>

    </thead>
    <tbody id="tb">

    </tbody>
</table>

    </body>
    </html>
   
    

    <script>

            $('#sub').click(function(){
       var name=$('#name').val();
       var add=$('#add').val();
       var pin=$('#pin').val();
       var ph=$('#ph').val();
    //    alert(name);

       $.ajax({
        type:'post',
        url:'<?php echo base_url('ajaxins');?>',
        data:{
            name:name,
            address:add,
            pin:pin,
            ph:ph
        },
        success:function(data){
            alert('success');
        },
       })
    });


    $('#views').click(function()
    {
        $.ajax({
            type:'get',
            url:'<?php echo base_url('ajax_view_datas');?>',
            success:function(data)
            {
                $.each(data,function(key,value)
                {
                    var res="<tr><td>"+value['name']+"</td><td>"+value['address']+"</td><td>"+value['pin']+"</td><td>"+value['ph']+"</td><td><a href='<?php echo base_url('ajas_form1_edit/')?>"+value['id']+"'>Edit</a></td><td><input type='submit' value='delete' id='del_te'></td></tr>";

                   // var res="<tr><td>"+value['name']+"</td><td>"+value['address']+"</td><td>"+value['pin']+"</td><td>"+value['ph']+"</td><td><a href='<?php echo base_url('ajas_form1_edit/')?>"+value['id']+"'>Edit</a></td><td><a href='<?php echo base_url('ajas_form1_delete/')?>"+value['id']+"'>Delete</a></td></tr>";


                    $('#tb').append(res);
                });
            },
        });
    });

    $('#del_te').click(function(){

alert('deleted');
}
);




</script>