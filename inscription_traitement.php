<?php

require_once("config.php");
if (isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_retype'])) {

    $pseudo = htmlspecialchars($_POST['pseudo']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($post['password']);
    $password_retype = htmlspecialchars($_POST['password_retype']);

    $check = $db->prepare('SELECT pseudo, email, password FROM utilisateurs WHERE email =?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();

    if ($row == 0) {

        if (strlen($pseudo) <= 255) {

            if (strlen($email) <= 255) {

                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

                    if ($password == $password_retype) {
                        $password = hash('PASSWORD_BCRYPT', $password);
                        $insert = $db->prepare('INSERT INTO utilisateurs(pseudo, email, password) VALUES (:pseudo , :email, :password');
                        $insert->execute(array(
                            'pseudo' => $pseudo,
                            'email' => $email,
                            'password' => $password,
                        ));
                        header('Location:inscription.php?reg_err=success');
                    } else header('Location:inscription.php?reg_err=password');
                } else header('Location:inscription.php?reg_err=email');
            } else header('Location: inscription.php?reg_err=email_length');
        } else header('Location: inscription.php?reg_err=pseudo_length');
    } else header('Location: inscription.php?reg_err=already');
}