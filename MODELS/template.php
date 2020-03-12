<?php

function isActivePage($page)
{
    if(!isset($_GET['page'])){
        if($page == "accueil") return "active";
        else return "";
    }
    if($page == $_GET['page']) return "active";
    else return "";
}