<?php
$collision = @$_GET['collision'];
$missing = @$_GET['missing'];
$mfieldlist = explode(" ", $missing);
$mfieldkeys = array_flip($mfieldlist);

require("../fragments/top-pane.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/register.css">
    <link rel="stylesheet" href="../css/styles.css">


    <title>Registration page.</title>
</head>
<body>

    <form action="register-action.php" method="post">
        <div id="register-block-main">
        <div class="block-label-bordered">
        <?php
        if(array_key_exists('new_login', $mfieldkeys)){
            ?>
            <div class="warning-label">
                <label class="errmsg">'Login' field needs to be filled in.</label>
            </div>
            
            <?php
        }
        else if($collision){
            ?>
            <div class="warning-label">
                <label class="errmsg">Login (E-mail) is already registered.</label>
            </div>
            
            <?php
        }?>
            <div class="double-row">
            <label for="new_login" class="block-label-white">Your login (E-mail):</label>
            <input name="new_login" id="login" type="text"/>
            </div>
        </div>
        

        <div class="block-label-bordered">
        <?php
        if(array_key_exists('first_name', $mfieldkeys)){
        ?>
            <div class="warning-label">
                <label class="errmsg">'First name' field needs to be filled in.</label>
            </div>
        
        <?php
        }?>
            <div class="double-row">
            <label for="first_name" class="block-label-white">Your first name:</label>
            <input name="first_name" id="first_name" type="text">
        </div>
        </div>

        <div class="block-label-bordered">
        <?php
        if(array_key_exists('last_name', $mfieldkeys)){
            ?>
            <div class="warning-label">
                <label class="errmsg">'Last name' field needs to be filled in.</label>
            </div>
            
            <?php
        }?>
            <div class="double-row">
            <label for="last_name" class="block-label-white">Your last name:</label>
            <input name="last_name" id="last_name" type="text">
        </div>
        </div>


        <div class="block-label-bordered">
        <?php
        if(array_key_exists('role', $mfieldkeys)){
            ?>
            <div class="warning-label">
                <label class="errmsg">'Role' field needs to be filled in.</label>
            </div>
            
            <?php
        }?>
            <div class="double-row">
            <label for="role" class="block-label-white">Who are you?</label>
            <select name="role" id="role" class="block-label-blue">
                <option value="contractor">Freelancer</option>
                <option value="client">Client</option>
            </select>
        </div>
        </div>


        <?php
            require("../fragments/password-entry.php")
        ?>

            <button type="submit" class="block-label-blue" id="register-button">Register.</button>
        </div>
    </form>
</body>
</html>
