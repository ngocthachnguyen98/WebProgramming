<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <script src='../wireframe.js'></script>
  </head>

  <body>

    <header>
      <div class="banner"><img src="../../media/VB-Rolls-Logo.png" alt="VB Rolls Logo" height=80px></div>
    </header>

    <nav>
      <div>
        <!-- Put website navigation links here: -->
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
      <form class="login" action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=login" method="post" target="_blank">
        Email: <br><input type="email" name="email">
        <br>
        Password: <br><input type="password" name="password">
        <br>
        <input class="submit" type="submit" value="Login">
      </form>
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
