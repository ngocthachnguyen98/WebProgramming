<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <base href="https://titan.csit.rmit.edu.au/~s3651311/wp/a2/index.php" target="_self"/>
    <title>Home Page</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <script src='../wireframe.js'></script>

    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  </head>

  <body>

    <header>
      <div class="banner">WELCOME TO VB ROLLS</div>
      <div class="banner"><img src="../../media/VB-Rolls-Logo.png" alt="VB Rolls Logo" height=80px></div>
    </header>

    <nav>
      <div class="sticky">
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
      <h3>About us</h3>
      <p>We are selling the Vietnamese traditional foods. The shop has been operating for a few years now and is located in the heart of CBD - on Bourke Street. They are Vietnamese baguettes, fresh rice paper rolls and drinks. The shop has adorable staff who are very enthusiastic and love to brighten people day with their food.</p>
      <img class="main" src="../../media/shop.jpg" alt="VB Rolls Shop">
      <p>Below is what what you guys can find at our shop: <br>
        1. Banh Mi <br>
        2. Rice Paper Roll <br>
        3. Drink <br>
        <br>
      You can click on this <a class="link" href="products.php" target="_self">link</a> to start planning your order. Or click "Products" on the navigation bar.</p>
      <hr>
        <span class="italic">The shop is located on 235 Bourke Street and opens from 11:30 am - 3:30 pm</span>
      <details>
        <summary><b>About Banh Mi</b></summary>
        Bánh mì or banh mi refers to a kind of sandwich that consists of a Vietnamese single-serving baguette, also called bánh mì in Vietnamese, which is split lengthwise and filled with various savory ingredients. We have the right bread: pillowy soft on the inside, crusty AF on the outside (if it’s not covering your lap in crumbs and bread-shrapnel, it’s not a proper banh mi at all). The meat should be a little bit fatty and suspicious. The carrots crisp and crunchy. Always a ‘Yes’ to margarine, and go heavy on the cucumber and coriander (yep, we went there). Oh yeah, and it shouldn’t cost you more than a tenner under any circumstances.<br>
        <img class="main" id="Banh Mi" src="../../media/banh-mi.jpg" alt="Banh Mi">
      </details>
      <details>
        <summary><b>About Rice Paper Roll</b></summary>
        Gỏi cuốn, Vietnamese spring roll or summer roll, is a Vietnamese dish traditionally consisting of pork, prawn, vegetables, bún (rice vermicelli), and other ingredients wrapped in Vietnamese bánh tráng (commonly known as rice paper). Contrary to popular belief that they are from China, the fresh spring roll's origins are in Vietnam since the ingredients are different, and they are served fresh while others are served fried, like the Vietnamese chả giò. They are served at room temperature (or cooled) and are not deep fried or cooked on the outside. These rolls are considered to be a very popular appetizer with customers in Vietnamese restaurants.<br>
        <img class="main" src="../../media/paper-rolls.jpeg" alt="Rice Paper Rolls">
      </details>
    </main>

    <br>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Nguyen Ngoc Thach  /  s3651311</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button>
    </footer>

  </body>
</html>
