<select name="type" id="type" class="block-label-blue">
<?php
$result = $mysqli->query("SELECT * FROM ProjectType ORDER BY Title ASC");
while($record = mysqli_fetch_assoc($result)) {
    ?>
    <option value="<?=$record['id']?>"><?=$record['title']?></option>
    <?php
    }
?>
</select>
