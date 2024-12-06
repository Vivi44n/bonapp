<!DOCTYPE html>
<html lang="en">

<?php include('./include/head.html'); ?>

<body>
    
<?php include('./include/header.php'); ?>


<!-- <?php include('./include/barrederecherche.html'); ?> -->


<h1>Mes recettes</h1>

<!-- <?php
if (sizeof($recettes) > 0 ){
    foreach($recettes as $recette){
    echo $recette["nom"]."<br>";}
}
?> -->

<?php
if (sizeof($recettes) > 0) {
    foreach ($recettes as $recette) {
        if (isset($recette["id_recette"]) && isset($recette["nom"])) {
            echo '<a href="unerecette.php?id=' . $recette["id_recette"] . '" style="text-decoration: none;">' . htmlspecialchars($recette["nom"]) . '</a><br>';   
        } else {
            echo 'Données incomplètes pour cette recette.<br>';
        }
    }
} else {
    // Message affiché si le tableau $recettes est vide
    echo 'Aucune recette disponible.';
}


?>





<?php include('./include/footer.php'); ?>




</body>
</html>