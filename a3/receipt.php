<?php include("tools.php"); 
writeOrders("orders.txt"); ?>

<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="utf-8">
        <title>Receipt Page</title>

        <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
        <link id='receiptcss' type="text/css" rel="stylesheet" href="css/receipt.css">

        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    </head>

    <?php printReceipt(); ?>

    <table>
              <tr>
                  <th>Product ID</th>
                  <th>Option ID</th>
                  <th>Quanity</th>
                  <th>Unit Price</th>
                  <th>Subtotal</th>
              </tr>

              <?php printReceiptTable(); ?>
          </table>

          <div class="total">
              <span class="total1"><b>TOTAL: </b></span><br>
              <span class="total2"><b>$<?php calTotal();?></b></span>
          </div>

      </main>
      <footer>
        <hr>
        <div class="ty">Thank you and have a nice day!</div>
      </footer>
    </body>
</html>