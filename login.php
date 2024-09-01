<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cs.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"> 
    <title>Document</title>

    <!-- Added this -->
<script>
  window.onload = function() {
      const urlParams = new URLSearchParams(window.location.search);
      if (urlParams.get('signup') === 'success') {
          alert('Signup successful! You can now log in.');
      }
  };
</script>


    
</head>
<body>
  <header>
    <div class="nav">
        <div><a href=""><h3>THREADS REBORN</h3></a></div>
        <div>
        <p class="nav-item-holder">
            <span class="nav-item"><a href="home.html">HOME</a></span>
            <span class="nav-item"><a href="aboutUs.html">ABOUT US</a></span>
            <span class="nav-item"><a href="shop.html">SHOP</a></span>
            <span class="nav-item"><a href="register.html">REGISTER</a></span>
            <span class="nav-item"><a href="login.html">LOGIN</a></span>
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
          <p>Mada Center 8th floor, 379 hudson St,<br> New York, NY 10018 US</p>

        
        </div>
        <div>
          <p class="pad"><i class="fa-solid fa-phone"></i> Lets Talk <br><strong>+18046627578</strong>
          </p>
          
        </div>
        <div>
        <p class="pad"><i class="fa-solid fa-envelope"></i>General Support <br> <strong>contact@example.com</strong></p>

        </div>
      </div>
    </div>

    
  
    <div  class="form" id="loginform" >
      <div >
        <h1 class="big-text">Sign In</h1>
      
      <div class="mb-2">
          <label for="formGroupExampleInput" class="form-label">Enter Your Email</label>
          <input type="text" class="form-control" name="emaiL" id="email" placeholder="Email">
      </div>
      
      <div class="mb-5">
        <label for="formGroupExampleInput" class="form-label">Password</label>
        <input type="password" class="form-control" name="phnNo" placeholder="Enter your password">
    </div>
    
     
      
      <div class="bb">
        
        <a href="chooseitem.html">
        <input type="submit" value="Sign In" name="buttoN" id="switch"> 
      </a>

      </div>
      
      
      </form>
      <div class="pass"><a class="anchore" href="">Forgot password?</a></div>
      <div class="loginanchore"><p>Dont have an account? <a class="anchore" href="register.html">Sign Up</a></p></div>

      
      </div>
    </div>
  </div>

    


    
</body>
<footer style="text-align: center; font-size: 18px; color: black;">
  <p>© 2024 Threads Reborn. All rights reserved.</p>
</footer>
</html>