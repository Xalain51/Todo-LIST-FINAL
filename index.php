<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link>
    <title>Connexion </title>
    <link rel="stylesheet" href="./dist/css/main.min.css">

</head>

<body>
    <div class="accueil">
        <div class="connexion">
            <h1>Mytotool</h1>
            <h2>Connexion</h2>
            <?php if (isset($_GET['login_err'])) {
                $err = htmlspecialchars($_GET['login_err']);
                switch ($err) {
                    case 'password':
            ?>
                        <div class="alert alert-danger">
                            <strong>Erreur</strong>mot de passe incorrect
                        </div>
                    <?php break;
                    case 'email':
                    ?>
                        <div class="alert alert-danger">
                            <strong>Erreur</strong>email incorrect
                        </div>
                    <?php break;
                    case 'already':
                    ?>
                        <div class="alert alert-danger">
                            <strong>Erreur</strong>aucun compte ne correspond
                        </div>
            <?php break;
                }
            }
            ?>
            <form method="post" action="connexion.php">
                <input type="email" class="connexion__info" required="required" name="email" placeholder="Votre pseudo ou email">
                <input type="password" class="connexion__info" required="required" name="password" placeholder="Votre mot de passe">
                <input type="submit" class="connexion__boutton" placeholder="Se connecter">
            </form>
            <a href="#">Mot de passe oublié ?</a>
            <a href="inscription.php">S'inscrire</a>
        </div>
    </div>

</body>

</html>