<!DOCTYPE html>
<html lang="<?=$locale?>">
<head>
    <title>Contactors page.</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/contractors.css">
</head>
<body>
<?php
require_once("../connect/session.php");
require("../fragments/top-pane.php");


?>


<div id="projects-wrapper">
    <div id="projects-top-grid">
        <?php require("../fragments/contractortypes.php");?>
        <div id="projects-main-block">
            <?php       //  Preparations.
            $stmt = $mysqli->prepare("SELECT COUNT(*) FROM ParticipantsTypes WHERE projecttype_id = ?;");
            $stmt->bind_param("i", $cat);
            $stmt->execute();

            $real_amount = $stmt->get_result()->fetch_row()[0];

            $stmt = $mysqli->prepare("SELECT ParticipantsTypes.participant_id, Participant.first_name, Participant.last_name FROM ParticipantsTypes INNER JOIN Participant "
                ."ON Participant.id = ParticipantsTypes.participant_id WHERE  ParticipantsTypes.projecttype_id = ?;");
            $stmt->bind_param("i", $cat);
            $stmt->execute();

            $contractors = array_reverse($stmt->get_result()->fetch_all());

            $contractors_on_page = 10;
            $pages = intval($real_amount/$contractors_on_page);
            $page = is_null($_GET['page'])?0:$_GET['page'];
            ?>
            <div id="projects-page-panel" class="centered-text block-label-bordered">
                <a href="../pages/contractors.php?cat=<?=$cat?>&page=<?=0?>"><<</a>
                <a href="../pages/contractors.php?cat=<?=$cat?>&page=<?=($page>0?$page-1:0)?>"><</a>
                <a href="../pages/contractors.php?cat=<?=$cat?>&page=<?=$page?>"><?=$page+1?></a>
                <a href="../pages/contractors.php?cat=<?=$cat?>&page=<?=($pages>0?($page<$pages-1?$page+1:$pages-1):0)?>">></a>
                <a href="../pages/contractors.php?cat=<?=$cat?>&page=<?=($pages>0?$pages-1:0)?>">>></a>
            </div>
            <?php
            if($real_amount > 0){
                $contractors_on_current_page =
                    ($page==0?
                        ($real_amount%$contractors_on_page==0?
                            $contractors_on_page:
                            $real_amount%$contractors_on_page):
                        $contractors_on_page
                    );


                for($i = 0; $i<$contractors_on_current_page; ++$i){
                    ?>
                    <a class="block-label-bordered centered-text" style="padding: 1%" href="../pages/user.php?id=<?=$contractors[$i][0]?>">
                        <div style="display: grid; grid-template-columns: 1fr 4fr">
                            <div class="index-gallery-secondary-picture">
                                <img src="../uploads/image<?=$contractors[$i][0]?>" alt="<?=$MSG['image_missing']?>" class="index-gallery-secondary-picture rounded-image">
                            </div>
                            <strong><?=$contractors[$i][1]?> <?=$contractors[$i][2]?></strong>
                        </div>
                    </a>

                    <?php
                }
            }
            else{
                ?>
                <div class="block-label-bordered centered-text" style="padding: 1%"><?=$MSG['no_contractors']?></div>
                <?php
            }
            ?>
        </div>
    </div>
</div>
</body>

