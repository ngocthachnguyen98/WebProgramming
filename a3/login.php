<?php include("tools.php"); ?>
<?php echo topModule("Login Page"); ?>
<form class="login" action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=login" method="post" target="_blank">
    Email: <br><input type="email" name="email">
    <br>
    Password: <br><input type="password" name="password">
    <br>
    <input class="submit" type="submit" value="Login">
</form>
<?php echo endModule(); ?>
<?php printMyCode(); ?>