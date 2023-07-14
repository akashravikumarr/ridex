<?php

$conn=new mysqli("localhost","root","","form");
    
          $sel=  "SELECT * from login
          order by id desc";
          $query= mysqli_query($conn,$sel);
          $resul= mysqli_fetch_assoc($query);


        ?>
        

<!--             
        <input type="checkbox" id="show">
        <label for="show" class="show-btn"><?php echo $resul['username'];?> </label>
         -->