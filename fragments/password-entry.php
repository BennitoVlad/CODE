<?php
if(array_key_exists('password', $mfieldkeys)){
    ?>
    <label class="errmsg">'Password' field needs to be filled in.</label>
    <br/>
    <?php
}
?>
    <div class="double-row" style="margin: 2%">
        <label for="password" class="block-label-white">Your password:</label>
        <input name="password" id="new_password" type="password" autocomplete="new-password">
    </div>
<?php
if(@$_GET['passmatch']){
    ?>
    <label class="errmsg">Passwords must match.</label>
    <br/>
    <?php
}?>
    <div class="double-row" style="margin: 2%">
        <label for="password" class="block-label-white">Retype password:</label>
        <input name="passcopy" id="copy_password" type="password" autocomplete="new-password">
    </div>
