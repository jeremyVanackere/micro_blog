<?php 


include("includes/connexion.inc.php");
if(!isset($_POST['id']) && !isset($_GET['id']))
{
	$query="INSERT INTO messages(contenu, date) VALUES(:contenu, :date)";
	$prep=$pdo->prepare($query);
	$prep->bindValue(':contenu', $_POST['message']);
	$prep->bindValue(':date', date("Y-m-d H:i:s", time()));
	$prep->execute();
}
else
{
	if(!isset($_GET['id']))
	{
		$query="UPDATE messages SET contenu=:contenu, date=:date WHERE id=:id";
		$prep=$pdo->prepare($query);
		$prep->bindValue(':contenu', $_POST['message']);
		$prep->bindValue(':date', date("Y-m-d H:i:s", time()));
		$prep->bindValue(':id', $_POST['id']);
		$prep->execute();
	}
	else
	{
		$query="DELETE FROM messages WHERE messages.id=:id";
		$prep=$pdo->prepare($query);
		$prep->bindValue(':id', $_GET['id']);
		$prep->execute();
	}
}
header("Location:index.php");

?>