<!DOCTYPE html>
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
  

    <section style="height: 900px; display: flex; justify-content: center; align-items: center; background-color: #fafafa;color: #000;">
        <div style="height: 600px;width:400px;  ">
            <form action="">
                <label for="name">Item's title</label><br>
                <input class="BOX" type="text" id="name"><br>
                <label for="name">Price</label><br>
                <input class="BOX" type="number" id="price"><br>
                <label for="images">Upload Images</label> <br>
                <label for="images" class="box2" id="dropp"><input class="imagesize" type="file" id="myFile" name="filename"></label><br>
    
                
                <label for="lang">Condition</label><br>
                    <select class="BOX"  name="condition" id="cond">
                        <option value="blank"></option>
                        <option value="new">New</option>
                        <option value="uselyknew">Used-Like New</option>
                        <option value="uselykgood">Used-Good</option>
                        <option value="uselykfair">Used-Fair</option>
            
                    </select><br>
                    <label for="name">Description</label><br>
                <input class="box2" type="text" placeholder="Product Details"><br>
    
                <input id="switch" type="submit" value="Post"/>
    
    
            
    
            </form>
        </div>
          
    </section>
    
</body>
<footer style="text-align: center; font-size: 18px; color: black;">
    <p>© 2024 Threads Reborn. All rights reserved.</p>
  </footer>
</html>