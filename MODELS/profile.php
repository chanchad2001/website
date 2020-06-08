<?php

function verify_logout()
{
    if (isset($_POST['logout'])) {
        session_destroy();
        header('location: ../accueil');
        exit;
    }
}

function modify_info()
{
    if (isset($_POST['submit_info'])) {
        $connection = getDatabaseConnection();
        $newPassword = "";
        $error = "";

        if (!empty($_POST['firstname'])) {
            if (str_replace(" ", "", $_POST['firstname']) != "") $_SESSION['name'] = $_POST['firstname'];
            else $error = "Erreur : impossible de modifier ces information.";
        }

        if (!empty($_POST['name'])) {
            if (str_replace(" ", "", $_POST['name']) != "") $_SESSION['pseudo'] = $_POST['name'];
            else $error = "Erreur : impossible de modifier ces information.";
        }

        if (!empty($_POST['email'])) {
            if (str_replace(" ", "", $_POST['email']) != "" && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) $_SESSION['email'] = $_POST['email'];
            else $error = "Erreur : impossible de modifier ces information.";
        }
        if (!empty($_POST['password']) && !empty($_POST['password_conf'])) {
            if (str_replace(" ", "", $_POST['password']) != "" && str_replace(" ", "", $_POST['password_conf']) != "" && $_POST['password'] == $_POST['password_conf']) $newPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
            else $error = "Erreur : impossible de modifier ces information.";
        }

        if ($_FILES['avatar']) 
        {
            $file = "images/". basename($_FILES['avatar']['name']);
            $fileType = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            if($fileType == "jpg" || $fileType == "png" || $fileType == "jpeg" || $fileType == "gif")
            {
                if ($_FILES['avatar']['name'] != $_SESSION['photo'])
                {
                    if (move_uploaded_file($_FILES['avatar']['tmp_name'], $file)) 
                    {
                        unlink("images/" . $_SESSION['photo']);
                        $_SESSION['photo'] = $_FILES['avatar']['name'];
                    } else 
                    {
                        $error = "Erreur : impossible d'uploader l'image (move)";
                    }
                }
                
            }
            else $error = "Erreur : impossible d'uploader l'image (extension)";


        }
    
        if ($error == "")
        {
            $sql = "UPDATE client_account SET name = '" . $_SESSION['name'] . "', pseudo  = '" . $_SESSION['pseudo'] . "', email = '" . $_SESSION['email'] . "', image = '".$_SESSION['photo']."' ";
            if ($newPassword != "") $sql .= ", password = '" . $newPassword . "' ";
            $sql .= "WHERE id = '" . $_SESSION['id'] . "'";
            $connection->exec($sql);

            ?><center><h2>Vos informations ont bien été mises a jour !</h2></center><?php
        } else 
        {
            ?><center><h2><?= $error ?></h2></center><?php
        }
    } 
}

function modify_bio()
{
    if(!isset($_POST['submit_bio'])) return;
    $connection = getDatabaseConnection();

    $sql = "UPDATE client_account SET ";
    if($_POST['message'] != "")
    {
        $sql .= "bio = '". htmlentities($_POST['message'], ENT_QUOTES)."', ";
    }
    $sql .= "status = '". $_POST['status']."' WHERE id = '" . $_SESSION['id'] . "'";
    $connection->exec($sql);
    
}

function getBio()
{

    $sql = "SELECT bio FROM client_account WHERE id = '".$_SESSION['id']."'";
    $req = getDatabaseConnection()->query($sql);
    $bio = $req->fetch()[0];
    if($bio == "")  return "Votre Biographie";
    else                        return $bio;
}

function is_selected(string $case)
{
    $sql = "SELECT status FROM client_account WHERE id = '".$_SESSION['id']."'";
    $req = getDatabaseConnection()->query($sql);
    if ($req->fetch()[0] == $case)
    {
        return "selected";
    }
}

?>