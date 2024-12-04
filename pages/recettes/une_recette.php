<!DOCTYPE html>
<html lang="en">

<?php include('./include/head.html'); ?>

<body>
    
<?php include('./include/header.php'); ?>

<?php include('./include/accueil.html'); ?>




<h1><?php echo ($recette["nom"]); ?></h1>


<?php
if ($ingredient) {
foreach ($ingredient as $ingredient) {
echo htmlspecialchars($ingredient['nom']) . "<br>";
}
}else{
    echo "Aucun ingrédient pour cette recette";
}

?>

<?php include('./include/footer.php'); ?>

</body>
</html>