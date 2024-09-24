<?php

session_start();
require_once "db_connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate and sanitize input data
    $first_name = isset($_POST['fName']) ? trim($_POST['fName']) : '';
    $last_name = isset($_POST['lName']) ? trim($_POST['lName']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $phone = isset($_POST['phnno']) ? trim($_POST['phnno']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';
    $repeat_password = isset($_POST['repeat_password']) ? trim($_POST['repeat_password']) : '';
    $address = isset($_POST['massage']) ? trim($_POST['massage']) : '';

    // Simple validation
    if (empty($first_name) || empty($last_name) || empty($email) || empty($phone) || empty($password) || empty($repeat_password) || empty($address)) {
        $_SESSION["error"] = "Please fill all the fields.";
        header("location: register.php"); 
        exit(); 
    }

    if ($password !== $repeat_password) {
        $_SESSION["error"] = "Passwords do not match.";
        header("location: register.php"); 
        exit(); 
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and bind
    $stmt = $pdo->prepare("INSERT INTO users (first_name, last_name, email, phone, password, address, created_at) VALUES (?, ?, ?, ?, ?, ?, NOW())");
    if ($stmt->execute([$first_name, $last_name, $email, $phone, $hashed_password, $address])) {
        header("Location: login.php?signup=success");
        exit();
    } else {
        echo "Error: Could not execute query.";
    }


    exit();
    
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cs.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"> 
    <title>Document</title>
    

    
</head>
<body>
  <header>
    <div class="nav">
        <div><a href=""><h3>THREADS REBORN</h3></a></div>
        <div>
        <p class="nav-item-holder">
            <span class="nav-item"><a href="home.php">HOME</a></span>
            <span class="nav-item"><a href="aboutUs.php">ABOUT US</a></span>
            <span class="nav-item"><a href="shop.php">SHOP</a></span>
            <span class="nav-item"><a href="register.php">REGISTER</a></span>
            <span class="nav-item"><a href="login.php">LOGIN</a></span>
            <span class="nav-item icon"><a href="#cart"><i class="fa-solid fa-cart-shopping"></i></a></i></span>
            <span class="nav-item icon"><a href="#search"><i class="fa-solid fa-magnifying-glass"></i></a></i></span>
            
        </p>
    </div>

    </div>
</header>
  


  <div class="flex">
    <div class="background">
      <div id="Address">
        <div class="address pad">
          
          <p><i class="fa-solid fa-location-dot"></i>Address</p>
          <p>Bashundhara R/A Block D Road 5, Dhaka 1229</p>

        
        </div>
        <div>
          <p class="pad"><i class="fa-solid fa-phone"></i> Lets Talk <br><strong>+8801773969207</strong>
          </p>
          
        </div>
        <div>
        <p class="pad"><i class="fa-solid fa-envelope"></i>General Support <br> <strong>threads@gmail.com.com</strong></p>

        </div>
      </div>
    </div>

    
  
  <div  class="form">
    <form action="register.php" method="POST">
      <h1 class="big-text">Be A Member</h1>
      
      <div class="mb-5 mt-5">
          <label for="formGroupExampleInput2" class="form-label">Your Name</label>
          <div class="row g-3">
              <div class="col">
                  <input type="text" class="form-control" name="fName" placeholder="First name" aria-label="First name" required>
              </div>
              <div class="col">
                  <input type="text" class="form-control" name="lName" placeholder="Last name" aria-label="Last name" required>
              </div>
          </div>
      </div>
      <div class="mb-5">
          <label for="formGroupExampleInput" class="form-label">Enter Your Email</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
      </div>
      <div class="mb-5">
          <label for="formGroupExampleInput" class="form-label">Enter Phone Number</label>
          <input type="tel" class="form-control" name="phnno" placeholder="Phone Number" required>
      </div>
      <div class="mb-5">
          <label for="formGroupExampleInput" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" placeholder="Set a password" required>
      </div>
      <div class="mb-5">
          <label for="formGroupExampleInput" class="form-label">Repeat Password</label>
          <input type="password" class="form-control" name="repeat_password" placeholder="Repeat the password" required>
      </div>
      <div class="mb-5">
          <label for="formGroupExampleInput" class="form-label">Address Details</label>
          <input type="text" class="form-control size" name="massage" placeholder="Enter your full address" required>
      </div>
      
      <div class="bb">
          <input type="submit" value="Sign Up" name="button" id="switch"> 
      </div>
  </form>
  <div class="loginanchore"><p>Already a Member? <a href="login.html">Sign In</a></p></div>

      
  </div>
  </div>

    
    

    
</body>
<footer style="text-align: center; font-size: 18px; color: black;">
  <p>© 2024 Threads Reborn. All rights reserved.</p>
</footer>
</html>