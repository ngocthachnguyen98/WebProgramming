<?php include("tools.php"); ?>

<?php
if (isset($_GET['id']) && product1Check($_GET['id'])) {
    product1();
}
else if (isset($_GET['id']) && product2Check($_GET['id'])) {
    product2();
}
else if (isset($_GET['id']) && product3Check($_GET['id'])) {
    product3();
}
else header("Location: products.php");
?>