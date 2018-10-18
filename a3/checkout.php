<?php include("tools.php"); ?>
<?php echo topModule("Checkout Page"); ?>

<?php
    // For details form validation
    $fullnameErr=$emailErr=$addressErr=$mobileErr=$cardErr=$expiryErr="";
    $fullname=$email=$address=$mobile=$card=$expiry="";
    $error = false;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (empty($_POST['fullname'])){
            $fullnameErr = "* Fullname required";
            $error = true;
        }
        else{
            $fullname= $_POST['fullname'];
            trim($fullname);
            if (!preg_match("#^[a-zA-Z \.\,\'\-]+$#", $fullname)){
                $fullnameErr = "* Contained invalid character";
                $error = true;
            }
            else $error = false;
        }


        if (empty($_POST['email'])){
            $emailErr = "* Email required";
        }
        else{
            $email= $_POST['email'];
            trim($email);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailErr = "* Invalid email address";
            $error = true;
            }
            else $error = false;
        }


        if (empty($_POST['address'])){
            $addressErr = "* Address required";
            $error = true;
        }
        else{
            $address= $_POST['address'];
            trim($address);
            if (!preg_match("#^[\da-zA-Z \.\,\'\-\/\r\n]+$#", $address)) {
            $addressErr = "*Contained invalid character";
            $error = true;
            }
            else $error = false;
        }
        

        if (empty($_POST['mobile'])){
            $mobileErr = "* Mobile number required";
            $error = true;
        }
        else{
            $mobile= $_POST['mobile'];
            trim($mobile);
            if (!preg_match("#^(\+614|\(04\)|04)([ ]?\d){8}$#", $mobile)) {
            $mobileErr = "* Not an Australian number";
            $error = true;
            }
            else $error = false;
        }


        if (empty($_POST['card'])){
            $cardErr = "* Card number required";
            $error = true;
        }
        else{
            $card= $_POST['card'];
            trim($card);
            if (!preg_match("#^([ ]?\d){12,16}$#", $card)) {
            $cardErr = "* Card must in the range of 12 to 19 numbers"; 
            $error = true;
            }
            else $error = false;
        }


        if (empty($_POST['expiry'])){
            $expiryErr = "* Expiry date required";
            $error = true;
        }
        else{
            $expiry = $_POST['expiry'];
            list($year, $month, $day) = explode("-", $expiry);

            $expiryDate = strtotime(date("d-M-Y", mktime(0,0,0,$month,$day,$year)));
            if ($expiryDate < strtotime("28 days")) {
                $expiryErr = "* Card must NOT exprire in the next 28 days"; 
                $error = true;
            }
            else $error = false;
        }

        if (!$error) {
            header("Location: receipt.php");
        }
    }

?>

<form class="detail" id="detail" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" target="_self" onsubmit="">
    <fieldset>
    <legend>Enter your details</legend>
        <label for="fullname"></label>
        Your Full Name: 
        <input name="fullname" id="fullname" type="text" value="<?php echo isset($fullname) ? $fullname : ""; ?>">
        <span class="error"><?php echo $fullnameErr; ?></span>
        <br>

        <label for="email"></label>
        Your Email: 
        <input name="email" id="email" type="email" value="<?php echo isset($email) ? $email : ""; ?>">
        <span class="error"><?php echo $emailErr; ?></span>
        <br>

        <label for="address"></label>
        Your Address: <br>
        <textarea name="address" id="address" rows="3" cols="50" form="detail"><?php echo isset($address) ? $address : ""; ?></textarea>
        <span class="error"><?php echo $addressErr; ?></span>
        <br>

        <label for="mobile"></label>
        Your Mobile Number: 
        <input name="mobile" id="mobile" type="text" value="<?php echo isset($mobile) ? $mobile : ""; ?>">  
        <span class="error"><?php echo $mobileErr; ?></span>
        <br>

        <label for="card"></label>
        Your Card Number: 
        <input name="card" id="card" type="text" value="<?php echo isset($card) ? $card : ""; ?>" oninput="visaValidation();">
        <span id="visa"><img src="../../media/visa.png" alt="Visa"></span> 
        <span class="error"><?php echo $cardErr; ?></span>
        <br>

        <label for="expiry"></label>
        Expiry Date on Your Card: 
        <input name="expiry" id="expiry" type="date" value="<?php echo isset($expiry) ? $expiry : ""; ?>">
        <span class="error"><?php echo $expiryErr; ?></span>
        <br>

        <input class="submit addToCart" name="detail" type="submit" value="Submit">
    </fieldset>
</form>

<?php echo endModule(); ?>
<?php printMyCode(); ?>