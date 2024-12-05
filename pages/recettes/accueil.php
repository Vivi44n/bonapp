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

$recettes = [
    [
        "id_recette" => 1,
        "nom" => "Lasagne à la bolognaise",
        "image" => "assets\images\lasagnes.jpg"
    ],
    [
        "id_recette" => 2,
        "nom" => "Pot au feu",
        "image" => "assets\images\potaufeu.jpg"
    ],
    [
        "id_recette" => 3,
        "nom" => "Crêpes",
        "image" => "assets\images\crepe.jpg"
    ],
    [
        "id_recette" => 4,
        "nom" => "Steak Frite",
        "image" => "images/steak_frite.jpg"
    ],
    [
        "id_recette" => 5,
        "nom" => "Œuf à la coque",
        "image" => "images/oeuf_a_la_coque.jpg"
    ],
];
?>





<?php include('./include/footer.php'); ?>




</body>
</html>