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
  <link rel="stylesheet" href="./assets/css/style2.css">
  <link rel="stylesheet" href="./assets/css/thankyou.css">


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
      
          
          <!-- <input type="checkbox" id="show">
          <label for="show" class="show-btn">Login</label>
  
              <div class="containerlogin">
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

              
         <a href="#" class="btn user-btn"  aria-label="Profile">
            <ion-icon name="person-outline"></ion-icon>
  
        
           </a>  -->
  
          <button class="nav-toggle-btn" data-nav-toggle-btn aria-label="Toggle Menu">
            <span class="one"></span>
            <span class="two"></span>
            <span class="three"></span>
          </button>
  
        </div>
  
      </div>
    </header>