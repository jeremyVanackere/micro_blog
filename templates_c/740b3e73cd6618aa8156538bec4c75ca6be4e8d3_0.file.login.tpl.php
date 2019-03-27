<?php
/* Smarty version 3.1.33, created on 2019-03-27 13:32:12
  from 'C:\EasyPhp\eds-www\avance\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c9b6d4cc4cab4_29561722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '740b3e73cd6618aa8156538bec4c75ca6be4e8d3' => 
    array (
      0 => 'C:\\EasyPhp\\eds-www\\avance\\templates\\login.tpl',
      1 => 1547648387,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c9b6d4cc4cab4_29561722 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>

<html>

<body>

<form class="form-inline" method="POST" action="includes/action.php" id="fromulaireLogin">
  <div class="form-group">
    <label for="email">Login:</label>
    <input type="text" name="login" class="form-control" id="login">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" name="pwd" class="form-control" id="pwd">
  </div>
  <button type="submit" class="btn btn-default">Connexion</button>
  <div id="notif" class="alert alert-danger hide" role="alert">
  </div>
</form>


<?php echo '<script'; ?>
>
$("#fromulaireLogin").submit(function(event){ //qaund on appuie sur le button submit 
	$("#notif").removeClass(); //on supprime la class de l'élément alert
	
	if(!$("#login").val()) //si valeur du login est vide
	{
		$("#notif").html("erreur"); //on affiche le message d'erreur
		$("#notif").addClass("alert alert-danger"); //on affiche le alert sans le cacher en changent la class
		return false; //on sort
	}
	
	$("#notif").html("bien remplie "); //si login n'est oas vide
	$("#notif").addClass("alert alert-success"); //on affiche le alert avec success
	$("#notif").fadeOut(500); //un petit fadeOut pour faire bien
	return true //on sort
});
<?php echo '</script'; ?>
>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
