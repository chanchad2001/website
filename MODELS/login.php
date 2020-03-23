<?php

function verify_credentials()
{
    if(!empty($_POST))
    {
        $error = "";
        $account = "";
        if(isset($_POST['submit_login']))  // user login 
        {
            $email = htmlspecialchars($_POST['email']);
            $pwd = htmlspecialchars($_POST['password']);

            // verification validité
            if(empty($email || $pwd))  $error = "Veuillez remplir tout les champs !";
            $account = getAccount($email);
            if(empty($account) || !password_verify($pwd, $account['password'])) $error = "votre login ou mot de passe n'est pas valide";
        }
        elseif(isset($_POST['submit_register']))
        {
                $name = $_POST['name'];
                $pseudo = $_POST['pseudo'];
                $email = $_POST['email'];
                $pwd = $_POST['password'];
                
                if(!filter_var($email, FILTER_VALIDATE_EMAIL))  $error = "L'addresse email n'est pas valide";
                $account = getAccount($email);
                if(!empty($account) || existPseudo($pseudo)) $error = "ce compte existe deja veuillez vous connecter !";
                if($error == "")
                {
                    $pwd = password_hash($pwd, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO client_account (name, pseudo, email, password) VALUES ('$name', '$pseudo', '$email', '$pwd') ";
                    $connection = getDatabaseConnection();
                    $connection->exec($sql);
                    $account = getAccount($email);
                }
                
                
        }
        if($error == "" && !empty($account))
        {
            $_SESSION['email'] = $account['email']; // etc
            $_SESSION['name'] = $account['name'];
            $_SESSION['pseudo'] = $account['pseudo'];
            $_SESSION['login'] = TRUE;
            $_SESSION['photo'] = $account['image'];
            echo "<h1/>Vous êtes connecté !</h1>";
            header('Refresh: 2; http://192.168.1.43/throows-dev/'.$_GET['source']);
        }
        else echo $error;
    }
}

function getAccount(string $email = null): ?array
{
    $sql = "SELECT * FROM client_account WHERE email='$email'";
    $connection = getDatabaseConnection();
    $requete = $connection->query($sql);
    if($requete->rowCount() == 0) return null;
    return $requete->fetch();
}

function existPseudo(string $pseudo = null) : bool
{
    $sql = "SELECT id from client_account WHERE pseudo='$pseudo'";
    $connection = getDatabaseConnection();
    $requete = $connection->query($sql);
    if($requete->rowCount() == 0 ) return FALSE;
    else return TRUE;
}