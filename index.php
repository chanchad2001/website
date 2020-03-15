<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);
session_start();

function get_ip()
{
    if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    elseif (isset($_SERVER['HTTP_CLIENT_IP']))
    {
        $ip  = $_SERVER['HTTP_CLIENT_IP'];
    }
    else
    {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

if(!isset($_GET['page']))
{
    require('CONTROLLERS/accueil.php');
    return;
}
else
{
    $page = $_GET['page'];
    switch ($page){
        case "tutoriel":
            require('CONTROLLERS/tutoriel.php');
        break;
        case "boutique":
            require('CONTROLLERS/boutique.php');
        break;
        case "blog":
            require('CONTROLLERS/blog.php');
        break;
        case "contact":
            require('CONTROLLERS/contact.php');
        break;
        case "login":
            require('CONTROLLERS/login.php');
        break;
        default:
            require('CONTROLLERS/accueil.php');
        break;  
    }
}