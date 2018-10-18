<?php include("tools.php"); ?>
<?php echo topModule("Cart Page"); ?>
<h2>Your Cart</h2>
<table id="cart">
    <th>Product</th>
    <th>Option</th>
    <th>Quantity</th>
    <th>Unit price</th>
    <th>Subtotal</th>

    <?php cartOutput(); ?>    
    <tr class="total">
        <td><b>TOTAL (AUD)</b></td>
        <td><b><?php calTotal(); ?></b></td>
    </tr>
</table>
<br>

<button class="checkout"><a class="checkout" href="checkout.php">Proceed to Checkout</a></button>
<form method="post"><input class="submit cancle" id="cancle" type="submit" name="cancle" value="Cancle order"></form>

<?php echo endModule(); ?>
<?php printMyCode(); ?>