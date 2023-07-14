<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn=new mysqli("localhost","root","","form");
    if($conn->connect_error){
        die("Connection Failed : ".$conn->connect_error);
    }else{
        $stmt=$conn->prepare("insert into login(username,password)values(?,?)");
        $stmt->bind_param("ss",$username,$password);
        if($stmt->execute())
        {
            header("location: index2.php");
        }
        else{
            echo "Error : ".$stmt->error;
        }
        
    } 
?>


<?php
          $sel=  "SELECT * from login";
          $query= mysqli_query($conn,$sel);
          $resul= mysqli_fetch_assoc($query);

          ?>
          <?php echo $resul['username'];?> 

        






<!-- Database connection -->