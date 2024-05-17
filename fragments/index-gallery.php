<h1 class="centered-text">Вибирайте перевірених спеціалістів</h1>
<div id="index-gallery-main-block">
    <div id="index-gallery-projtypes" class="block-label-white">
        <ul id="index-gallery-projtypes-list">
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

        <div id="index-gallery-freelancers-main-blocks">
                <div class="index-gallery-freelancer-block block-label-white" >
                 <img class="smooth-image" src="../images/Bite%20me!.jpg" alt="Suddenly, Uzi."/>
                <span><strong>Uzi</strong></span>
                <h6>bottom text</h6>
            </div>
            <div class="index-gallery-freelancer-block block-label-white">
                <img class="smooth-image" src="../images/DSCN0480.JPG" alt="Suddenly, Kate."/>
                <span><strong>Kate</strong></span>
                <h6>bottom text</h6>
            </div>
        </div>
        <div id="index-gallery-freelancers-secondary-blocks">
            <div id="index-gallery-secondary-pictures" >
                <div class="index-gallery-secondary-picture ">
                    <img src="../images/79f8e609de5501f933907954ab63a2de.jpg.png" class="index-gallery-secondary-picture rounded-image">
                </div>
                <div class="index-gallery-secondary-picture">
                    <img src="../images/unnamed.jpg" class="index-gallery-secondary-picture smooth-image">
                </div>
                <div class="index-gallery-secondary-picture">
                    <img src="../images/2bec457460f691df1df098fdc62bcb1b.jpg" class="index-gallery-secondary-picture rounded-image">
                </div>
                <div class="index-gallery-secondary-picture">
                    <img src="../images/31_1x%20(1).jpg" class="index-gallery-secondary-picture smooth-image">
                </div>
            </div>
            <div id="index-gallery-secondary-linkbox " class="block-label-bordered-black centered-text" style="padding: 2%">
                <a>11 343 Програмісти</a>
            </div>
        </div>


</div>
<div id="index-gallery-secondary-block">

<h4 class="centered-text">Топ спеціалізацій:</h4>
<div id="index-gallery-specs">
    <div class="index-gallery-spec">
        <span class="index-gallery-spec-title">1C</span>
        <span class="index-gallery-spec-amount">1474</span>
    </div>
    <div class="index-gallery-spec">
        <span class="index-gallery-spec-title">Blockchain</span>
        <span class="index-gallery-spec-amount">323</span>
    </div>
    <div class="index-gallery-spec">
        <span class="index-gallery-spec-title">C та C++</span>
        <span class="index-gallery-spec-amount">1042</span>
    </div>
    <div class="index-gallery-spec">
        <span class="index-gallery-spec-title">C#</span>
        <span class="index-gallery-spec-amount">1175</span>
    </div>
    <div class="index-gallery-spec">
        <span class="index-gallery-spec-title">Delphi та Object Pascal</span>
        <span class="index-gallery-spec-amount">70</span>
    </div>
    <div class="index-gallery-spec">
        <span class="index-gallery-spec-title">Java</span>
        <span class="index-gallery-spec-amount">710</span>
    </div>
    <div class="index-gallery-spec">
        <span class="index-gallery-spec-title">Go</span>
        <span class="index-gallery-spec-amount">74</span>
    </div>
    <div class="index-gallery-spec">
        <span class="index-gallery-spec-title">Javascript</span>
        <span class="index-gallery-spec-amount">3892</span>
    </div>
    <div class="index-gallery-spec">
        <span class="index-gallery-spec-title">Mac OS та Objective C</span>
        <span class="index-gallery-spec-amount">18</span>
    </div>
    <div class="index-gallery-spec">
        <span class="index-gallery-spec-title">Microsoft <span class="NET"></span></span>
        <span class="index-gallery-spec-amount">324</span>
    </div>
    <div class="index-gallery-spec">
        <span class="index-gallery-spec-title">Дивитись всі</span>
        <span class="index-gallery-spec-amount">-></span>
    </div>
</div>
</div>