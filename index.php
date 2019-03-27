<?php

/**
 * Example Application
 *
 * @package Example-application
 */
require '../libs/Smarty.class.php';
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
$smarty->assign("emailTxt", $emailTxt, true);

if(isset($_GET['id'])) //si l'id du message est en get
{
    $select = true;
    var_dump($select);
	$query="SELECT * FROM messages where id=:id"; //on récupére le message par l'id
	$prep=$pdo->prepare($query); //on fais un prepare
	$prep->bindValue(':id', $_GET['id']);
    $prep->execute();
    $smarty->assign("prep", $prep, true);
}
else
    $select = false;

$query="SELECT * FROM messages"; //on récupére tout les messages
$stmt=$pdo->query($query);
$smarty->assign("stmt", $stmt, true);

$smarty->assign("select", $select, true);
$smarty->assign("id", $id, true);
$smarty->display('index.tpl');