<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <title>Banh Mi Page</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <script src='../wireframe.js'></script>
    <script src='js/myJS.js'></script>
  </head>

  <body>

    <header>
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
      <h1>Banh Mi</h1>
      <blockquote><i>" Symphony in a sandwich "</i></blockquote>
      <img class="main" src="../../media/close-up-banh-mi.jpg" alt="Banh Mi">
      <p>The standard banh mi at VB Rolls will have pate, mayonnaise, coriander, pickled daikon, carrot, chilli, sauces and a "base" of your choice. At the shop, we offer to 2 "bases" which could be either Grilled Chicken for non-vegetarian or Tofu for vegetarian.</p>

      <div class="center">
        <div class="gallery">
          <img src="../../media/chicken-banh-mi.jpg" alt="Chicken Banh Mi">
          <div class="caption">Grilled Chicken</div>
        </div>
        <div class="gallery">
          <img src="../../media/tofu-banh-mi.jpg" alt="Tofu Banh Mi">
          <div class="caption">Tofu</div>
        </div>
      </div>

      <p><i>Bánh mì or banh mi refers to a kind of sandwich that consists of a Vietnamese single-serving baguette, also called bánh mì in Vietnamese, which is split lengthwise and filled with various savory ingredients. We have the right bread: pillowy soft on the inside, crusty AF on the outside (if it’s not covering your lap in crumbs and bread-shrapnel, it’s not a proper banh mi at all). The meat should be a little bit fatty and suspicious. The carrots crisp and crunchy. Always a ‘Yes’ to margarine, and go heavy on the cucumber and coriander (yep, we went there). Oh yeah, and it shouldn’t cost you more than a tenner under any circumstances.</i></p>

      <form class="product" action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=product" method="post" target="_blank" onsubmit="return formValidate()">
        <fieldset>
          <legend>Make your order</legend>
          <label for="unit price"><b>Unit price: $8</b></label><br>
          <label for="product code"></label>
            <input type="hidden" value="BM1" name="id">
          <label for="quantity"><b>Quantity: </b></label>
            <span class="field">
              <button type="button" onclick="decr()">-</button>
              <input id="qty" class="qty" type="number" value="0" min=0>
              <button type="button" onclick="incr()">+</button>
            </span>
          <label for="option"><b><br>Option: </b></label>
            <span class="field">
              <select name="option" id="option" name="option">
                <option value="grilled chicken" selected>Grilled Chicken</option>
                <option value="tofu">Tofu</option>
              </select>
            </span>
          <label for="submit"><br></label>
            <input class="buy submit" type="submit" value="BUY">
        </fieldset>
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
