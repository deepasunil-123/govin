<html>
    <head>
        <script src="js3\jquery-3.6.1.min.js"></script>
    </head>
    <body>
        <!-- <form action=""> -->
            <label for="">Name</label>
            <input type="text" name="name" id="name">
            <br><br>
            <input type="submit" value="sub" id="sub">
            <input type="submit" value="view" id="views">
<table >
    <thead>
        <th>Name</th>
    </thead>
    <tbody id="tb">

    </tbody>
</table>
        <!-- </form> -->
    </body>
</html>
<script>
    $('#sub').click(function(){
       var name=$('#name').val();
       $.ajax({
        type:'post',
        url:'<?php echo base_url('ajaxinsert');?>',
        data:{
            name:name,
        },
        succss:function(data){
            alert('success');
        }
       })
    })




    $('#views').click(function()
    {
        $.ajax({
        type:'get',
        url:'<?php echo base_url('ajaxview');?>',

        success:function(data)
        {
            // alert(data);
            $.each(data,function(key,value)
            {
             
               var res="<tr><td>"+value['name']+"</td><td><a href='<?php echo base_url()?>ajax_edit_data/"+value['id']+"' id='edit'>Edit</a><td><a href='<?php echo base_url()?>ajax_deletes_data/"+value['id']+"'>Delete</a></tr>";
               $('#tb').append(res);
            });
        }
        })

        }
    );




</script>



