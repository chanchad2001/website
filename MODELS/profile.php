<?php

function getAccountByName(string $name = null) : ?array
{
    if($name == null) header('Location : accueil');

    $sql = "SELECT * FROM client_account WHERE pseudo='$name'";
    $connection = getDatabaseConnection();
    $requete = $connection->query($sql);
    if($requete->rowCount() == 0) return null;
    return $requete->fetch();
    
}

?>