<!DOCTYPE html>
<html>
<head>
    <title>hiiiiiii</title>
</head>
<body>
<?php

    $conn=new mysqli("localhost","root","","form");
    
          $sel=  "SELECT * from login";
          $query= mysqli_query($conn,$sel);
          $resul= mysqli_fetch_assoc($query);

        ?>
        <?php echo $resul['username'];?> 


    
        
</body>
</html>  