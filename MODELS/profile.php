<?php

function verify_logout()
{
    if(isset($_POST['logout']))
    {
        session_destroy();  
        header('location: ../accueil');
        exit;
    }
}

?>