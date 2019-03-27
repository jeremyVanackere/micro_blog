<?php 

include("includes/connexion.inc.php");
if(!isset($_POST['id']) && !isset($_GET['id'])) // Si on insert
{
	if(isset($_FILES)) // Si un fichier est a upload
	{
		var_dump($_POST);
		var_dump($_FILES);
	}
	$query="INSERT INTO messages(contenu, date) VALUES(:contenu, :date)";
	$prep=$pdo->prepare($query);
	$prep->bindValue(':contenu', $_POST['message']);
	$prep->bindValue(':date', date("Y-m-d H:i:s", time()));
	$prep->execute();
}
else // Si on Update ou on le supprime ( on différencie les id par le post ou le get )
{
	if(!isset($_GET['id'])) // Si l'id en get du message n'est pas vide avec l'id en post du message
	{
		$query="UPDATE messages SET contenu=:contenu, date=:date WHERE id=:id";
		$prep=$pdo->prepare($query);
		$prep->bindValue(':contenu', $_POST['message']);
		$prep->bindValue(':date', date("Y-m-d H:i:s", time()));
		$prep->bindValue(':id', $_POST['id']);
		$prep->execute();
	}
	else // sinon si l'id en get du message est vide alors on le supprime avec l'id en get du message
	{
		$query="DELETE FROM messages WHERE messages.id=:id";
		$prep=$pdo->prepare($query);
		$prep->bindValue(':id', $_GET['id']);
		$prep->execute();
	}
}
//header("Location:index.php");

?>