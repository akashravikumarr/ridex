<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ridex - Rent your favourite Car</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&family=Open+Sans&display=swap"
    rel="stylesheet">
</head>

<body>

    <!-- 
      - #HEADER
    -->
  
    <header class="header" data-header>
      <div class="container">
  
        <div class="overlay" data-overlay></div>
  
        <a href="#" class="logo">
          <img src="./assets/images/logo.svg" alt="Ridex logo">
        </a>
  
        <nav class="navbar" data-navbar>
          <ul class="navbar-list">
  
            <li>
              <a href="#home" class="navbar-link" data-nav-link>Home</a>
            </li>
  
            <li>
              <a href="#featured-car" class="navbar-link" data-nav-link>Explore cars</a>
            </li>
  
            <li>
              <a href="#" class="navbar-link" data-nav-link>About us</a>
            </li>
  
            <li>
              <a href="#blog" class="navbar-link" data-nav-link>Blog</a>
            </li>
  
          </ul>
        </nav>
  
        <div class="header-actions1">
  
          <div class="header-contact">
            <a href="tel:88002345678" class="contact-link">8 800 234 56 78</a>
  
            <span class="contact-time">Mon - Sat: 9:00 am - 6:00 pm</span>
          </div>
  
          <a href="#featured-car" class="btn" aria-labelledby="aria-label-txt">
            <ion-icon name="car-outline"></ion-icon>
  
            <span id="aria-label-txt">Explore cars</span>
          </a>
         <?php     
          $conn=new mysqli("localhost","root","","form");
    
          $sel=  "SELECT * from login
          order by id desc";
          $query= mysqli_query($conn,$sel);
          $resul= mysqli_fetch_assoc($query);


        ?>
        

            
        <input type="checkbox" id="show">
        <label for="show" class="show-btn"><?php echo $resul['username'];?> </label>
  
              <!-- <div class="containerlogin">
                <label for="show" class="close-btn"
                title="close">&times;</label>
                <h1>Welcome</h1>
                <form action="#">
                  <label>UserName</label>
                  <input type="text">
                  <label>Password</label>
                  <input type="password">
                  <a href="#">Forgot Password</a>
                  <button>Submit</button>
                  <div class="link">Not a member? <a href="www.google.com">Signup here</a></div>
                </form>
              </div>
           -->
          <!-- <a href="#" class="btn user-btn"  aria-label="Profile">
            <ion-icon name="person-outline"></ion-icon>
  
        
          </a> -->
  
          <button class="nav-toggle-btn" data-nav-toggle-btn aria-label="Toggle Menu">
            <span class="one"></span>
            <span class="two"></span>
            <span class="three"></span>
          </button>
  
        </div>
  
      </div>
    </header>



    <section class="section featured-car" id="featured-car">
        <div class="container">

          <div class="title-wrapper2">
            <h2 class="h2 section-title">Selected Car</h2>

            <!-- <a href="#" class="featured-car-link">
              <span>View more</span> -->

              <ion-icon name="arrow-forward-outline"></ion-icon>
            </a>
          </div>

          <ul class="featured-car-list2">

            <li>
              <div class="featured-car-card">

                <figure class="card-banner2">
                  <img src="./assets/images/car-1.jpg" alt="Toyota RAV4 2021" loading="lazy" width="440" height="300"
                    class="w-100">
                </figure>

                <div class="card-content">

                  <div class="card-title-wrapper">
                    <h3 class="h3 card-title">
                      <a href="#">Toyota RAV4</a>
                    </h3>

                    <data class="year" value="2021">2021</data>
                  </div>

                  <ul class="card-list">

                    <li class="card-list-item">
                      <ion-icon name="people-outline"></ion-icon>

                      <span class="card-item-text">4 People</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="flash-outline"></ion-icon>

                      <span class="card-item-text">Hybrid</span>
                      <span class="card-item-text2">Automatic</span>
                    </li>


                    <li class="card-list-item">
                      <ion-icon name="speedometer-outline"></ion-icon>

                      <span class="card-item-text">6.1km / 1-litre</span>
                    </li>

                    <li class="card-list-item">
                      <ion-icon name="hardware-chip-outline"></ion-icon>

                      <span class="card-item-text">Automatic</span>
                      <span class="card-item-text1">Automatic</span>
                      

                    </li>

                   
                   

                  </ul>
                  
                  <div class="card-price-wrapper">
                     <p class="card-price">
                      <strong>$440</strong> / month
                    </p>
                  
                    <form action="connectrentnow.php "method="post">
                <label>Number of Vehicles</label>
                <div class="containerinput2">
                <input type="number" id="car_id" name="car_id"/>
                <!-- <label>LastName</label>
                <input type="text" id="lastname" name="lastname"/>
                <label>Email</label>
                <input type="email" id="email" name="email"/>
                <label>Password</label>
                <input type="password" id="password" name="password"/>
                <a href="payment.html"> -->
                  <a href="purchase.php">
                  <button class="btn">Submit</button></a>
                  </form>
                </div>
                  
                  </div>

                  
                  
                  <!-- 
                  // $conn=new mysqli("localhost","root","","form");
                  //  if(isset($_POST['car_id']))
                  // { 
                  //   $car_id=$_POST['car_id'];
   
                  //     $query = "INSERT INTO order (car_id) VALUES ('$car_id')";
                  //     $query_run=mysqli_query($conn,$query);
                  // }  
               ?> --> 
                    
                    <!-- if(isset($_POST['submit']))
                    {
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $databaseName="form";
                    $car_id = $_POST['car_id'];

                    $conn = new mysqli($servername, $username, $password, $databaseName);
                    $query="INSERT INTO order (car_id) VALUES ('$car_id' )";
                    
                    $result = mysqli_query($connect,$query);
                    if($result)
                    {
                      
                        header("location: payment.html");
                    }
                    else{
                        echo "Error : ";
                    }
                    }
                   -->
                  
                    
                  <!-- //   if($conn->connect_error){
                  //       die("Connection Failed : ".$conn->connect_error);
                  //   }else{
                  //       $stmt=$conn->prepare("insert into order(car_id)values(?)");
                  //       $stmt->bind_param("i",$car_id);
                  //       if($stmt->execute())
                  //       {
                  //           header("location: payment.html");
                  //       }
                  //       else{
                  //           echo "Error : ".$stmt->error;
                  //       }
                        
                  //   }
                  // } 
                  -->

                

                    <!-- <div class="datee">
                        <form action="i2.php "method="post">
                        <input type="number" id="car_id" name="car_id"/>
                        <a href="payment.php">
                        <button type="submit" name="submit">Submit</button> </a>
                    

                        </form>
                          </div> -->

                    <!-- <button class="btn fav-btn" aria-label="Add to favourite list">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <a href="payment.php">
                    <button class="btn">Rent now</button></a>
    -->
                    
                  </div>

                </div>

              </div>
           
            



          



              <?PHP
    include("footer.php");
    ?>













































































    


    