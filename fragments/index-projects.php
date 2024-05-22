<?php
    $stmt = $mysqli->prepare("SELECT COUNT(*) FROM Project WHERE completed = FALSE AND ISNULL(contractor_id);");
    $stmt->execute();
    $open_projs = $stmt->get_result()->fetch_row()[0];
?>
<h1 class="centered-text">Шукайте роботу серед <?=$open_projs?> відкритих фриланс-проєктів</h1>
<div id="index-projects-main-block">
    <div id="index-projects-projtypes" class=" block-label-white">
        <ul id="index-projects-projtypes-list">
            <?php
            $stmt = $mysqli->prepare("SELECT id, title FROM ProjectType;");
            $stmt->execute();
            $result = $stmt->get_result();
            while ($TYPE = $result->fetch_assoc()){
                ?>
                <li><a href="projects.php?cat=<?=$TYPE['id']?>"><?=$TYPE['title']?></a></li>
                <?php
            }
            ?>
        </ul>
    </div>

    <div id="index-projects-secondary-block">
        <div id="index-projects-picture-block">
            <img src="../images/Women%20Programmer.jpeg.img.jpeg"/>
        </div>


    </div>
</div>

