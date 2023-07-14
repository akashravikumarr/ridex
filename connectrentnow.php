<?php
    $car_id = $_POST['car_id'];

    $conn=new mysqli("localhost","root","","form");
    if($conn->connect_error){
        die("Connection Failed : ".$conn->connect_error);
    }else{
        $stmt=$conn->prepare("insert into oders(car_id)values(?)");
        $stmt->bind_param("s",$car_id);
        if($stmt->execute())
        {
            header("location: payment.php");
        }
        else{
            echo "Error : ".$stmt->error;
        }
        
    } 
?>
