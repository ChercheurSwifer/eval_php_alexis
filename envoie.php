<?php
	$bdd = new PDO('mysql:host=localhost;dbname=animaux;charset=utf8', 'visiteur', 'root');

if(isset($_POST['insert']))
{
	$nom = $_POST['nom'];
	$race = $_POST['race'];
  $sql = "INSERT INTO `chien`(`nom`, `race`) VALUES (:nom,:race)";
	$res = $bdd->prepare($sql);
  $rep = $res->execute(array(":nom"=>$nom,":race"=>$race));

}

header('Location: index.php'); 
?>