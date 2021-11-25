<?php
session_start();
require_once("config.php");
if (isset($_SESSION['user']))
    $user_id = $_SESSION['user'];
// header('Location:index.php');

if (isset($_POST['envoyer'])) {
    $title = $_POST['title'];

    $sql = "INSERT INTO `tasks`(`title`, `user_id`)VALUES (:title, :user_id)";
    $stwt = $db->prepare($sql);
    $stwt->bindValue(':title', $title);
    $stwt->bindValue(':user_id', $user_id);
    $stwt->execute();
    header('location: totool.php');
}
