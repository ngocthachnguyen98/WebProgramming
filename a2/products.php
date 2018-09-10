<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <title>Products Page</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <script src='../wireframe.js'></script>

    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  </head>

  <body>
    <header>
      <div class="banner"><img src="../../media/VB-Rolls-Logo.png" alt="VB Rolls Logo" height=80px></div>
    </header>

    <nav>
      <div>
        <ul class="no-bullet">
          <li>
            <a class="nav" href="index.php" target="_self">Home</a>
          </li>
          <li>
            <a class="nav" href="products.php" target="_self">Products</a>
          </li>
          <li>
            <a class="nav" href="login.php" target="_self">Login</a>
          </li>
        </ul>
      </div>
    </nav>

    <main>
      <p>At VB Rolls, everything is made fresh and new everyday (bread rolls, veggie, meat etc.). They are also served hot and freshly done to assure the best quality of the meal. Have a look at what we are offering at VB Rolls and see if you find anything that suits you!</p>
      <div class="center">
        <div class="gallery">
            <a href="product.php" target="_self"><img id="Banh Mi" src="../../media/banh-mi.jpg" alt="Banh Mi" width=200px></a>
            <div class="caption">Banh Mi</div>
        </div>
        <div class="gallery">
            <a href="product.php" target="_self"><img src="../../media/paper-rolls.jpeg" alt="Rice Paper Rolls" width=200px></a>
            <div class="caption">Rice Paper Roll</div>
        </div>
        <div class="gallery">
            <a href="product.php" target="_self"><img src="../../media/drinks.png" alt="Drinks" width=200px></a>
            <div class="caption">Drink</div>
        </div>
      </div>
    </main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Nguyen Ngoc Thach  /  s3651311</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button>
    </footer>

  </body>
</html>
