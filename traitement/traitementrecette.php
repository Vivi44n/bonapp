<?php

if(is_numeric($maRoute[1])) {
$recette = $maRoute[1]  ;

$sql = "SELECT * FROM recette WHERE id_recette = :id_recette";
$query = $pdo->prepare($sql);
$query->execute([":id_recette" => $recette]);
$recette = $query->fetch();

if ($recette) {

$sql = "SELECT * FROM ingredient INNER JOIN recette_ingredient ON recette_ingredient. id_ingredient = ingredient.id_ingredient WHERE recette_ingredient .id_recette = :recette";
$query = $pdo->prepare($sql);
$query->execute([":recette" => $recette["id_recette"]]);
$ingredient = $query->fetchAll();


include ("./pages/recettes/une_recette.php");




}
}

?>