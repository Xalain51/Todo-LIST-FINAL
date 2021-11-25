<?php


include("./config.php");

if (isset($_GET["id"]) && !empty($_GET["id"])) {
    $id = $_GET["id"];
    $req = $db->prepare("UPDATE `tasks` SET tasks.title, tasks.id WHERE `id`=$id ");
    if ($req->execute()) {
        header("Location: totool.php");
    } else {
        echo "Erreur lors de la modification de la tâche id: $id";
    }
}
