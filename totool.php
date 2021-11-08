<?php
session_start();
if (isset($_SESSION['user']))
    // header('Location:index.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mytotool</title>
    <link rel="stylesheet" href="./dist/css/main.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>

<body>
    <div class="totool">
        <div class="totool__menu">
            <h1>
                <?php echo $_SESSION['user']; ?> totool
            </h1>

            <a href="deconnexion.php">Se déconnecter</a>

        </div>
        <div class="totool__contenus">
            <form class="totool__contenus__formulaire" method="post">
                <input type="text" placeholder="Ajouter une tâche" name=""><i class="fas fa-paper-plane"></i>
            </form>
            <div class="totool__contenus__checkbox">
                <input type="checkbox">
                <label>Faire un bisous à Valentin</label>
                <i class="fas fa-trash-alt"></i>
            </div>
            <div class="totool__contenus__checkbox">
                <input type="checkbox">
                <label>Faire un bisous à Kamel</label>
                <i class="fas fa-trash-alt"></i>
            </div>
            <div class="totool__contenus__checkbox">
                <input type="checkbox">
                <label>Faire un bisous à Michel</label>
                <i class="fas fa-trash-alt"></i>
            </div>
            <div class="totool__contenus__checkbox">
                <input type="checkbox">
                <label>Faire un bisous à Val</label>
                <i class="fas fa-trash-alt"></i>
            </div>
            <div class="totool__contenus__checkbox">
                <input type="checkbox">
                <label>Faire un bisous à Thibault</label>
                <i class="fas fa-trash-alt"></i>
            </div>
        </div>
    </div>




</body>

</html>