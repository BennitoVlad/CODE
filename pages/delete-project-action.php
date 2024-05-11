<?php
require_once("../connect/session.php");

$host = $_SERVER['HTTP_HOST'];
$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$id = 0 + @$_POST['id'];

if(!$login || !$id) {
    $extra = "index.php";
} else {
    $extra = "view-project.php?id=$id";

    $is_delete_op = array_key_exists("delete", $_POST);
    $is_revoke_op = array_key_exists("revoke", $_POST);

    if($is_delete_op || $is_revoke_op) {
        if($is_delete_op) {
            $stmt = $mysqli->prepare("DELETE FROM Project WHERE id=? AND client_id=?");
        } else {
            $stmt = $mysqli->prepare("UPDATE Project SET contractor_id=NULL WHERE id=? AND client_id=?");
        }
        $stmt->bind_param("ii", $id, $login_id);
        $stmt->execute();
    
        if($mysqli->errno){
            $extra .= '&errno='.$errno;
        } else if($is_delete_op) {
            $extra = "index.php";
        }
    
        $stmt->close();
        $mysqli->close();
    }
}

header("Location: http://$host$uri/$extra");
