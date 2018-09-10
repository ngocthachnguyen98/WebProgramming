<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <base href="https://titan.csit.rmit.edu.au/~s3651311/wp/a2/index.php" target="_self"/>
    <title>Products Page</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <script src='../wireframe.js'></script>

    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

    <script src="myJS.js"></script>
  </head>

  <body>
    <form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=product" medthod="post" onsubmit="return test()">
    <label for="qty">Quantity: <br></label>
      <input id="qty" type="number" min=0 value=0>
    <label for="submit"></label>
      <input type="submit" value="BUY">
    </form>
  </body>
</html>
