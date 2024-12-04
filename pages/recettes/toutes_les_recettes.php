<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    include("./include/header.php")
    ?>

    <!-- <form method="GET" action="?route=recettes">
        <input type="text" name="search" placeholder="Rechercher une recette..." value="<?php echo isset($searchQuery) ? htmlspecialchars($searchQuery) : ''; ?>">
        <button type="submit">Rechercher</button>
    </form> -->

    <?php
    include('./include/footer.php');
    ?>


</body>

</html>