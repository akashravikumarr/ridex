<html>
<head>
    <title></title>
</head>
<body>
<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn=new mysqli("localhost","root","","form");
    
          $sel=  "SELECT * from login";
          $query= mysqli_query($conn,$sel);
          $resul= mysqli_fetch_assoc($query);

        ?>
        <?php echo $resul['username'];?> 
        
</body>
</html>  


