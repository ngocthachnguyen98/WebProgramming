<?php
session_start();

if (isset($_POST["add"], $_POST['id'], $_POST['qty'], $_POST['oid'])){ // Before adding to cart
  if ($_POST['qty'] >= 1){
    if ($_POST['id'] == "BM1") {
      if ($_POST['oid'] == "CK" || $_POST['oid'] == "TF") {
        $_SESSION['cart'][]=$_POST;
      }
    }
    else if ($_POST['id'] == "PR1") {
      if ($_POST['oid'] == "PR" || $_POST['oid'] == "SA") {
        $_SESSION['cart'][]=$_POST;
      }
    }
    else if ($_POST['id'] == "DR1") {
      if ($_POST['oid'] == "WA" || $_POST['oid'] == "CO") {
        $_SESSION['cart'][]=$_POST;
      }
    }
  }
} 
else if (isset($_POST["detail"])) $_SESSION['detail']=$_POST;
else if (isset($_POST["cancel"])){
  unset($_SESSION['cart']);
  unset($_SESSION['detail']);
  header("Location: products.php");
}

function product1Check($value){
  if ($value == "BM1") return true;
  return false;
}

function product2Check($value){
  if ($value == "PR1") return true;
  else return false;
}

function product3Check($value){
  if ($value == "DR1") return true;
  else return false;
}

function product1(){
  $topModule = topModule("Product 1 Page");
  $orderForm = orderForm($_GET['id'], "8.50", "Chicken", "Tofu");
  $endModule = endModule();

  $html = <<<"HTML"
  $topModule

  <h2>Banh Mi</h2>
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

  <p><i>Bánh mì or banh mi refers to a kind of sandwich that consists of a Vietnamese single-serving baguette, also called bánh mì in Vietnamese, which is split lengthwise and filled with various savory ingredients. We have the right bread: pillowy soft on the inside, crusty on the outside (if it’s not covering your lap in crumbs and bread-shrapnel, it’s not a proper banh mi at all). The meat should be a little bit fatty and suspicious. The carrots crisp and crunchy. Always a ‘Yes’ to margarine, and go heavy on the cucumber and coriander (yep, we went there). Oh yeah, and it shouldn’t cost you more than a tenner under any circumstances.</i></p>

  $orderForm

  $endModule
HTML;
  echo $html;
  printMyCode();
}

function product2(){
  $topModule = topModule("Product 2 Page");
  $orderForm = orderForm($_GET['id'], "3.00", "Prawn", "Salmon");
  $endModule = endModule();

  $html = <<<"HTML"
  $topModule

  <h2>Rice Paper Roll</h2>
  <blockquote><i>" If I took a platter of these to a gathering with my friends, they’d be one of the first things to go. "</i></blockquote>
  <img class="main" src="../../media/paper-rolls.jpeg" alt="Rice Paper Roll">
  <p>The standard banh mi at VB Rolls will have pate, mayonnaise, coriander, pickled daikon, carrot, chilli, sauces and a "base" of your choice. At the shop, we offer to 2 "bases" which could be either Grilled Chicken for non-vegetarian or Tofu for vegetarian.</p>

  <div class="center">
    <div class="gallery">
      <img src="../../media/prawn-rice-paper-roll.jpg" alt="Prawn Rice Paper Roll">
      <div class="caption">Prawn Rice Paper Roll</div>
    </div>
    <div class="gallery">
      <img src="../../media/salmon-rice-paper-roll.jpg" alt="Salmon Rice Paper Roll">
      <div class="caption">Salmon Rice Paper Roll</div>
    </div>
  </div>

  <p><i>Vietnamese Rice Paper Rolls are packed with bright, fresh flavours and served with an insanely addictive Vietnamese Peanut Dipping Sauce that takes a minute to make. Vietnamese Rice Paper Rolls are packed with bright, fresh flavours and served with an insanely addictive Vietnamese Peanut Dipping Sauce that takes a minute to make.</i></p>

  $orderForm

  $endModule
HTML;
  echo $html;
  printMyCode();
}

function product3(){
  $topModule = topModule("Product 3 Page");
  $orderForm = orderForm($_GET['id'], "2.00", "Water", "Coke");
  $endModule = endModule();

  $html = <<<"HTML"
  $topModule

  <h2>Drink</h2>
  <blockquote><i>" Keep in mind. Always stay hydrated! "</i></blockquote>
  <img class="main" src="../../media/drink.png" alt="Drink">
  <p>Besides all the tasty food at VB Rolls, you can order a water bottle or a coke bottle. They are always refrigerated for your service.</p>

  <div class="center">
    <div class="gallery">
      <img src="../../media/coke.jpg" alt="Coke">
      <div class="caption">Coke</div>
    </div>
    <div class="gallery">
      <img src="../../media/water.jpg" alt="Water">
      <div class="caption">Water</div>
    </div>
  </div>
  <p><i>**We only have 400ml bottles only</i></p>

  $orderForm

  $endModule
HTML;
  echo $html;
  printMyCode();
}

/* Provided functions */
  //"preShow()" function prints data and shape/structure of data 
function preShow( $arr, $returnAsString=false ) {
  $ret  = '<pre>' . print_r($arr, true) . '</pre>';
  if ($returnAsString)
    return $ret;
  else 
    echo $ret; 
}



// Output your current file's source code
function printMyCode() {
  $lines = file($_SERVER['SCRIPT_FILENAME']);
  echo "<pre class='mycode'>\n";
  foreach ($lines as $lineNo => $lineOfCode)
    printf("%3u: %1s \n", $lineNo, rtrim(htmlentities($lineOfCode)));
  echo "</pre>";
}

// A "php associative array to javascript object" function 
function php2js( $arr, $arrName ) {
  $lineEnd="";
  echo "<script>\n";
  echo "  var $arrName = {\n";
  foreach ($arr as $key => $value) {
    echo "$lineEnd    $key : $value";
    $lineEnd = ",\n";
  }
  echo "  \n};\n";
  echo "</script>\n\n";
}

// Output dynamically CSS to style the current nav link
function styleCurrentNavLink( $css ) {
  $here = $_SERVER['SCRIPT_NAME']; 
  $bits = explode('/',$here); 
  $filename = $bits[count($bits)-1]; 
  echo "<style>nav a[href$='$filename'] { $css }</style>";
}


  /* MyPHP */
function topModule($pageTitle){
  $navCSS = styleCurrentNavLink("background-color: #111");

  $html = <<<"HTML"
  <!DOCTYPE html>
    <html lang='en'>
    <head>
      <meta charset="utf-8">
      <title>$pageTitle</title>

      <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
      <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
      <script src='../wireframe.js'></script>
      <script src='js/myJS.js'></script>

      <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

      $navCSS

    </head>

    <body>
      <header>
        <div class="banner">WELCOME TO VB ROLLS</div>
        <div class="banner"><img src="../../media/VB-Rolls-Logo.png" alt="VB Rolls Logo" height=80px></div>
      </header>

      <nav>
      <div class="sticky">
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
            <li>
              <a class="nav cart" href="cart.php" target="_self">Your Cart</a>
            </li>
          </ul>
        </div>
      </nav>

      <main>
HTML;
  return $html;
}

function endModule(){
  $post = preShow($_POST, true);
  $session = preShow($_SESSION, true);
  $get = preShow($_GET, true);

  $html = <<<"HTML"
  </main>

    <br>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Nguyen Ngoc Thach - 3651311</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div>Maintain links to your <a href='products.txt'>products spreadsheet</a> and <a href='orders.txt'>orders spreadsheet</a> here. <button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>
    <form method="post">
    <input type="submit" value="Cancel" name="cancel">
    </form>

    Get: $get

    Post: $post

    Session: $session

  </body>
  </html>
HTML;
  return $html;
}

function orderForm($code, $price, $OP1, $OP2){
  switch ($OP1){
    case 'Chicken':
      $op1 = 'CK';
      break;
    case 'Prawn':
      $op1 = 'PR';
      break;
    case 'Water':
      $op1 = 'WA';
      break;
    default: $op1 ='N/A';
  }

  switch ($OP2){
    case 'Tofu':
      $op2 = 'TF';
      break;
    case 'Salmon':
      $op2 = 'SA';
      break;
    case 'Coke':
      $op2 = 'CO';
      break;
    default: $op2 ='N/A';
  }

  $price = number_format((float)$price, 2, '.', '');

  $html = <<<"HTML"
  <form class="product" action="products.php" method="post" target="_self" onsubmit="return formValidate()">
    <fieldset>
      <legend>Make your order</legend>
        <b>Unit price: $$price</b>

      <label for="id"></label>
        <input name="id" id="id" type="hidden" value=$code>

      <label for="option"><b><br>Option: </b></label>
      <span class="field">
        <select name="oid">
          <option value=$op1 selected>$OP1</option>
          <option value=$op2>$OP2</option>
        </select>
      </span><br>

      <label for="quantity"><b>Quantity: </b></label>
        <span class="field">
          <button type="button" onclick="decr(); calSubtotal();">-</button> 
          <input name="qty" id="qty" class="qty" type="number" value="0" min=0>
          <button type="button" onclick="incr(); calSubtotal();">+</button>
        </span><br>

      <label for="subtotal"><b>Subtotal: </b></label>
        <input name="unit price" id="unit price" type="hidden" value=$price>
        <span class="field">
          <input name="subtotal" id="subtotal" class="qty" type="number" readonly> AUD
        </span><br>
        <span id="qtyErr">* The quantity should be at least 1</span>

      <label for="submit"><br></label>
        <input class="addToCart submit" type="submit" name="add" value="Add to Cart">
    </fieldset>
  </form>
HTML;
    return $html;
}

function readProducts($filename){
  $fp = fopen($filename, "r");
  flock($fp, LOCK_SH);
  $headings = fgetcsv($fp, 0, "\t");
  while ($aLineOfCells = fgetcsv($fp, 0, "\t")) {
    $records[] = $aLineOfCells;
  }
  flock($fp, LOCK_UN);
  fclose($fp);
  
  foreach ($headings as $value){
    echo "<th>" . $value . "</th>";
  }

  foreach ($records as $key => $value){
    echo "<tr>";
    foreach ($value as $v){
      echo "<td>" . $v . "</td>";      
    }
    echo "</tr>";
  }
}

function cartOutput(){
  foreach ($_SESSION['cart'] as $key => $k){
    echo "<tr>";
    foreach ($k as $value => $v){
      // update id code with name
      if ($v == 'BM1') $v = "Banh Mi";
      else if ($v == 'PR1') $v = "Rice Paper Roll";
      else if ($v == 'DR1') $v = "Drink";

      // skip printing 'add to cart'
      if ($value == 'add'){
        continue;
      }
      echo "<td>$v</td>";
    }
    echo "</tr>";
  }
}

function calTotal(){
  $total = 0;
  foreach ($_SESSION['cart'] as $key => $value) {
    // Recalculate subtotal (server side)
    $_SESSION['cart'][$key]['subtotal'] = $_SESSION['cart'][$key]['qty'] * $_SESSION['cart'][$key]['unit_price'];
    
    $total += $_SESSION['cart'][$key]['subtotal'];
  }
  echo number_format((float)$total, 2, '.', '');
}
  
function writeOrders($filename){
  $fp = fopen($filename, "a");
  flock($fp, LOCK_EX);
  
  foreach ($_SESSION['cart'] as $key => $value) {
    $myOrder=[
      date("d-M-Y", time()),
      $_SESSION['detail']['fullname'],
      $_SESSION['detail']['email'],
      $_SESSION['detail']['mobile'],
      $_SESSION['detail']['address'],
      $_SESSION['cart'][$key]['id'],
      $_SESSION['cart'][$key]['oid'],
      $_SESSION['cart'][$key]['qty'],
      $_SESSION['cart'][$key]['unit_price'],
      $_SESSION['cart'][$key]['subtotal']
    ];

    fputcsv($fp, $myOrder, "\t");
  }

  flock($fp, LOCK_UN);
  fclose($fp);
}

function printReceipt(){
  $fullname = $_SESSION['detail']['fullname'];
  $mobile = $_SESSION['detail']['mobile'];
  $email = $_SESSION['detail']['email'];
  $address = $_SESSION['detail']['address'];
  $date =  date("d-M-Y", time());

  $body = <<<"HTML"
    <body>
      <header>
          <div class="text">
              <b>VB Rolls Company</b><br>
              Address: 235 Bourke Street, Melbourne Victoria 3000 <br>
              Phone: 0123 456 789
          </div>
          <div class="img"><img class="logo" src="../../media/VB-Rolls-Logo.png" alt="VB Rolls Logo" height=80px></div>
          <div class="banner">Your Receipt</div>
      </header>
      <hr>
      <main>
          <div class="stats">
              <div class="detail">
                  Customer: $fullname<br>
                  Mobile number: $mobile<br>
                  Email: $email<br>
                  Address: $address
              </div>    

              <div class="number">
                  Order Number: 11223344 <br>
                  Date: $date<br>
                  Issued at VB Rolls Store
              </div>
          </div>    
          <hr>
          <br>
          
HTML;
  echo $body;
}

function printReceiptTable(){
  foreach ($_SESSION['cart'] as $key => $value) {
    echo "<tr>";
    foreach ($value as $k => $v) {
      if ($k == 'add') {
        continue;
      }
      echo "<td>".$v."</td>";
    }
    echo "</tr>";
  }
}
?>