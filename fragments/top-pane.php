<?php

require_once("../connect/session.php");
?>
<div id="top-panel" style="text-align: center">
<?php
if(!@$login){   //  Basic panel.
    ?>
    <div style="display: grid; grid-template-columns: 3fr repeat(2, 1fr) 3fr">
        <a style="text-decoration: none; color: black" href="../pages/index.php"><strong>Free</strong>lance</a>
        <a style="text-decoration: none; color: black" href=""><?=$MSG['for_clients']?></a>
        <a style="text-decoration: none; color: black" href=""><?=$MSG['for_contractors']?></a>
        <div style="display: grid; grid-template-columns: repeat(2, 1fr)">
            <a class="block-label-blue" href="../pages/sign-in.php"><?=$MSG['the_login']?></a>
            <a class="block-label-blue" href="../pages/register.php"><?=$MSG['the_registration']?></a>
        </div>
    </div>
    <?php
} elseif($is_contractor){   //  Contractor panel.
    ?>
    <div style="display: grid; grid-template-columns: 3fr 1fr 3fr">
        <a style="text-decoration: none; color: black" href="../pages/index.php"><strong>Free</strong>lance</a>
        <a style="text-decoration: none; color: black" href=""><?=$MSG['my_projects']?></a>
        <div style="display: grid; grid-template-columns: 3fr repeat(3, 1fr)">
            <a class="block-label-blue" href=""><?=$MSG['find_project']?></a>
            <form action="sign-out-action.php" method="post">
                <button type="submit" name="submit" class="block-label-red" style="padding: 8%"><?=$MSG['user_log_out']?></button>
            </form>
            <a href="user.php" class="block-label-blue" style="padding: 8%"><?=$MSG['user_profile']?></a>
            <span class="block-label-white">N/A</span>
        </div>
    </div>
    <?php
}else{                      //  Client panel.
    ?>
    <div style="display: grid; grid-template-columns: 3fr repeat(3, 1fr) 3fr">
        <a style="text-decoration: none; color: black" href="../pages/index.php"><strong>Free</strong>lance</a>
        <a style="text-decoration: none; color: black" href=""><?=$MSG['my_projects']?></a>
        <a style="text-decoration: none; color: black" href=""><?=$MSG['projects']?></a>
        <a style="text-decoration: none; color: black" href=""><?=$MSG['contractors']?></a>
        <div style="display: grid; grid-template-columns: 3fr repeat(3, 1fr)">
            <a class="block-label-blue" href="../pages/add-project.php"><?=$MSG['new_project']?></a>
            <form action="sign-out-action.php" method="post">
                <button type="submit" name="submit" class="block-label-red" style="padding: 8%"><?=$MSG['user_log_out']?></button>
            </form>
            <a href="user.php" class="block-label-blue" style="padding: 8%"><?=$MSG['user_profile']?></a>
            <span class="block-label-white">N/A</span>
        </div>
    </div>
    <?php

}
?>
</div>

