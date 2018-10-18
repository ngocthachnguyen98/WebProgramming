<?php include("tools.php"); ?>
<?php echo topModule("Products Page"); ?>
<h2>Products</h2>
<p>At VB Rolls, everything is made fresh and new everyday (bread rolls, veggie, meat etc.). They are also served hot and freshly done to assure the best quality of the meal. Have a look at what we are offering at VB Rolls and see if you find anything that suits you!</p>
<table><?php readProducts("products.txt"); ?></table>
<br><br>
<h4>Start making your order now</h4>
<div class="center">
    <div class="gallery">
        <a href="product.php?id=BM1" target="_self"><img id="Banh Mi" src="../../media/banh-mi.jpg" alt="Banh Mi" width=200px></a>
        <div class="caption">Banh Mi</div>
    </div>
    <div class="gallery">
        <a href="product.php?id=PR1" target="_self"><img  src="../../media/paper-rolls.jpeg" alt="Rice Paper Rolls" width=200px></a>
        <div class="caption">Rice Paper Roll</div>
    </div>
    <div class="gallery">
        <a href="product.php?id=DR1" target="_self"><img src="../../media/drink.png" alt="Drinks" width=200px></a>
        <div class="caption">Drink</div>
    </div>
</div>

<?php echo endModule(); ?>
<?php printMyCode(); ?>