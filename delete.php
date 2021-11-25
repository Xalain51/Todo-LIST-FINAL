<?php


include("./config.php");

if (isset($_GET["id"]) && !empty($_GET["id"])) {
    $id = $_GET["id"];
    $req = $db->prepare("DELETE FROM `tasks` WHERE id = $id");
    if ($req->execute()) {
        header("Location: totool.php");
    } else {
        echo "Erreur lors de la suppression de la tâche id: $id";
    }
}
