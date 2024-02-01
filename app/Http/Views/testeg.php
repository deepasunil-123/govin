<html>
<head></head>
<title></title>
<body>
    <form action="<?php echo base_url('form_action');?>" method="post">
        Name<input type="text" name="name"><br>
        Address<textarea name="address"></textarea><br>
        Phone<input type="text" name="phone"><br>
        Gender<input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Female">Female<br>
        Job<select name="job">
            <option value="Doctor">Doctor</option>
            <option value="Engineer">Engineer</option>
            <option value="Teacher">Teacher</option>
            <option value="Professor">Professor</option></select>  <br> 

        Hobbies<input type="checkbox" name="hob[]" value="Reading">Reading
        <input type="checkbox" name="hob[]" value="Playing">Playing
        <input type="checkbox" name="hob[]" value="Travelling">Travelling
        <input type="checkbox" name="hob[]" value="Singing">Singing<br>
        <input type="submit"value="submit">
        </form>
    </body>
</html>


