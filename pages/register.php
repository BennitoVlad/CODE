<?php
$collision = @$_GET['collision'];
$missing = @$_GET['missing'];
$mfieldlist = explode(" ", $missing);
$mfieldkeys = array_flip($mfieldlist);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration page.</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body style="text-align: center">
    <form action="register-action.php" method="post">
        <?php
        if(array_key_exists('new_login', $mfieldkeys)){
            ?>
            <label class="errmsg">'Login' field needs to be filled in.</label>
            <br/>
            <?php
        }
        if($collision){
            ?>
            <label class="errmsg">Login (E-mail) is already registered.</label>
            <br/>
            <?php
        }?>
        <label for="new_login">Your login (E-mail):</label>
        <input name="new_login" id="login" type="text">
        <br/>

        <?php
        if(array_key_exists('first_name', $mfieldkeys)){
        ?>
        <label class="errmsg">'First name' field needs to be filled in.</label>
        <br/>
        <?php
        }?>
        <label for="first_name">Your first name:</label>
        <input name="first_name" id="first_name" type="text">
        <br/>
        <?php
        if(array_key_exists('last_name', $mfieldkeys)){
            ?>
            <label class="errmsg">'Last name' field needs to be filled in.</label>
            <br/>
            <?php
        }?>
        <label for="last_name">Your last name:</label>
        <input name="last_name" id="last_name" type="text">
        <br/>
        <?php
        if(array_key_exists('role', $mfieldkeys)){
            ?>
            <label class="errmsg">'Role' field needs to be filled in.</label>
            <br/>
            <?php
        }?>
        <label for="role">Who are you?</label>
        <select name="role" id="role">
            <option value="contractor">Freelancer</option>
            <option value="client">Client</option>
        </select>
        <br/>

        <?php
            require("../fragments/password-entry.php")
            ?>
        <button type="submit">Register.</button>

    </form>
</body>
</html>
