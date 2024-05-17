<h1 class="centered-text">Шукайте роботу серед 1816 відкритих фриланс-проєктів</h1>
<div id="index-projects-main-block">
    <div id="index-projects-projtypes" class=" block-label-white">
        <ul id="index-projects-projtypes-list">
            <?php
            $stmt = $mysqli->prepare("SELECT id, title FROM ProjectType;");
            $stmt->execute();
            $result = $stmt->get_result();
            while ($TYPE = $result->fetch_assoc()){
                ?>
                <li><a href="index.php?cat=<?=$TYPE['id']?>"><?=$TYPE['title']?></a></li>
                <?php
            }
            ?>
        </ul>
    </div>

    <div id="index-projects-secondary-block">
        <div id="index-projects-picture-block">
            <img src="../images/Women%20Programmer.jpeg.img.jpeg"/>
        </div>


    <h4 class="centered-text">Топ спеціалізацій:</h4>
    <div id="index-projects-specs">
        <div class="index-projects-spec">
            <span class="index-projects-spec-title">1C</span>
            <span class="index-projects-spec-amount">1474</span>
        </div>
        <div class="index-projects-spec">
            <span class="index-projects-spec-title">Blockchain</span>
            <span class="index-projects-spec-amount">323</span>
        </div>
        <div class="index-projects-spec">
            <span class="index-projects-spec-title">C та C++</span>
            <span class="index-projects-spec-amount">1042</span>
        </div>
        <div class="index-projects-spec">
            <span class="index-projects-spec-title">C#</span>
            <span class="index-projects-spec-amount">1175</span>
        </div>
        <div class="index-projects-spec">
            <span class="index-projects-spec-title">Delphi та Object Pascal</span>
            <span class="index-projects-spec-amount">70</span>
        </div>
        <div class="index-projects-spec">
            <span class="index-projects-spec-title">Java</span>
            <span class="index-projects-spec-amount">710</span>
        </div>
        <div class="index-projects-spec">
            <span class="index-projects-spec-title">Go</span>
            <span class="index-projects-spec-amount">74</span>
        </div>
        <div class="index-projects-spec">
            <span class="index-projects-spec-title">Javascript</span>
            <span class="index-projects-spec-amount">3892</span>
        </div>
        <div class="index-projects-spec">
            <span class="index-projects-spec-title">Mac OS та Objective C</span>
            <span class="index-projects-spec-amount">18</span>
        </div>
        <div class="index-projects-spec">
            <span class="index-projects-spec-title">Microsoft <span class="NET"></span></span>
            <span class="index-projects-spec-amount">324</span>
        </div>
        <div class="index-projects-spec">
            <span class="index-projects-spec-title">Дивитись всі</span>
            <span class="index-projects-spec-amount">-></span>
        </div>
    </div>

    </div>
</div>

