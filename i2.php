
<!--   
        $car_id = $_POST['car_id'];
    $conn=new mysqli("localhost","root","","form");
    if($conn->connect_error){
        die("Connection Failed : ".$conn->connect_error);
    }else{
        $stmt=$conn->prepare("insert into order(car_id)values(?)");
        $stmt->bind_param("i",$car_id);
        if($stmt->execute())
        {
            header("location: index2.php");
        }
        else{
            echo "Error : ".$stmt->error;
        }
        
     }  -->

<?php

                   $conn=new mysqli("localhost","root","","form");
                    if(isset($_POST['car_id']))
                   { 
                     $car_id=$_POST['car_id'];
   
                       $query = "INSERT INTO order (car_id) VALUES ('$car_id')";
                       $query_run=mysqli_query($conn,$query);
                       if($query_run)
                    {
                      
                        header("location: index.html");
                    }
                    else{
                        header ("location: payment.php");
                    }
                    } 
                    
               ?> 
     
    <!-- $username = $_POST['username'];
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
        
    }  -->

 
                    <!-- if(isset($_POST['submit']))
                    {
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $databaseName="form";

                    $car_id = $_POST['car_id'];

                    $conn = new mysqli($servername, $username, $password, $databaseName);
                    $query="INSERT INTO order (car_id) VALUES ('$car_id' )";
                    
                    $result = mysqli_query($conn,$query);
                    if($result)
                    {
                      
                        header("location: index.html");
                    }
                    else{
                        echo "Error : ";
                    }
                    } 

                    

                        <div class="datee">
                        <form action="i2.php "method="post">
                        <input type="number" id="car_id" name="car_id"/>
                        <a href="payment.html">
                        <button type="submit" name="submit">Submit</button> </a> -->