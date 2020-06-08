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

function getURL()
{
    $adresse = "";
    
    foreach($_GET as $cle => $valeur){
        if($valeur != "login")
        {
            $adresse .= $valeur;
            $adresse .= "-";
        }
    }
    $adresse = rtrim($adresse, "-");
    return $adresse;
}



function getDatabaseConnection()
{
    $server = "localhost";
    $username = "admin";
    $password = "R0m@inDev2019";
    $dbname = "throows_site";

    $connection = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $connection;
}

if(!isset($_GET['page']))
{
    require('CONTROLLERS/accueil.php');
    return;
}
else
{
    $page = $_GET['page'];

    if($page == "tutoriel") require('CONTROLLERS/tutoriel.php');
    else if($page == "boutique") require('CONTROLLERS/boutique.php');
    else if($page == "blog") require('CONTROLLERS/blog.php');
    else if($page == "contact") require('CONTROLLERS/contact.php');
    else if($page == "login") require('CONTROLLERS/login.php');
    else if($page == "profil") require('CONTROLLERS/profile.php');
    else require('CONTROLLERS/accueil.php');
}