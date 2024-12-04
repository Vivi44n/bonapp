<!DOCTYPE html>
<html lang="en">

<?php include('./include/head.html'); ?>

<body>
    
<?php include('./include/header.php'); ?>

<br>

<?php include('./include/barrederecherche.html'); ?>


<h1>Mes recettes</h1>

<?php
if (sizeof($recettes) > 0 ){
    foreach($recettes as $recette){
    echo $recette["nom"]."<br>";}
}
?>




<?php include('./include/footer.php'); ?>




</body>
</html>