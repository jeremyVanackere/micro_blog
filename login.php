<?php

/**
 * Example Application
 *
 * @package Example-application
 */
require 'smarty/libs/Smarty.class.php';
$smarty = new Smarty;
//$smarty->force_compile = true;
//$smarty->caching = true;
$smarty->debugging = true;
$smarty->cache_lifetime = 120;
///////////////////////////////////////////////////////////

//on se connecte à la base donnée
include("includes/connexion.inc.php");
 //on vérifie si un user est connecter et nous donne l'id du user dans une variable $id
include("./includes/verification.inc.php");

$smarty->display('login.tpl');