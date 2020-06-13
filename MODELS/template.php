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

function loginPage()
{
    if((!isset($_SESSION['login'])))
    {
        ?>
        <li class="btn-cta"><a href="login/returnto=<?= getURL(); ?>"><span>Login</span></a></li>
        <?php
    }
    else{
        $url = "profil=". $_SESSION['pseudo'];
        $photo = $_SESSION['photo'];
        ?>
        <li class="btn-cta"><a href="<?=$url ?>"><img src="images/<?= $photo ?>" alt=""></a></li>
        <?php  // image
    }
}