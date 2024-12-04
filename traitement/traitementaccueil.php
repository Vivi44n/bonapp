<?php
$sql = "SELECT * FROM recette";
$query = $pdo->prepare($sql);
$query->execute();
$recettes = $query->fetchAll();



include ("./pages/recettes/accueil.php");
?>