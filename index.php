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
    require('CONTROLER/accueil.php');
    return;
}
else
{
    $page = $_GET['page'];
    switch ($page){
        case "tutoriel":
            require('CONTROLER/tutoriel.php');
        break;
        case "boutique":
            require('CONTROLER/boutique.php');
        break;
        case "blog":
            require('CONTROLER/blog.php');
        break;
        case "contact":
            require('CONTROLER/contact.php');
        break;
        default:
            require('CONTROLER/accueil.php');
        break;  
    }
}