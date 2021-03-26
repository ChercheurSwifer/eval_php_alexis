<!DOCTYPE html>
<html lang="fr">

<head>
						<link href="styles.css" rel="stylesheet" type="text/css">
						<meta charset="utf-8">
						<meta name="viewport"    content="width=device-width, initial-scale=1.0">
						<meta name="description" content="">
						<title> PHP </title>
						
</head>

<body>
<form action="envoie.php" method="post">
 <p> Nom du chien: <input type="text" name="nom" /></p>
 <p> Race du chien : <input type="text" name="race" /></p>
 <p><input type="submit" name="insert" value="Envoyer"></p>
</form>

					<p> Liste des Animaux : </p>





</body>

</html>

<?php
session_start();
	$bdd = new PDO('mysql:host=localhost;dbname=animaux;charset=utf8', 'visiteur', 'root');

$reponse = $bdd->query('SELECT * FROM chien');
while ($donnees = $reponse->fetch())
{
	?>

<p>
    <?php echo $donnees['nom']; ?><br />
   <?php echo $donnees['race']; ?>
    
</p>
<?php
}

?>
