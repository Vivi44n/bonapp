<!DOCTYPE html>
<html lang="en">

<?php include('./include/head.html'); ?>

<body class="d-flex flex-column min-vh-100">

<?php include('./traitement/traitementinscription.php'); ?>

    <?php include('./include/header.php'); ?>

    <h1>S'inscrire</h1>

    <?php if (!isset($inscripUser  )) : ?>
    <form action="inscription" method="post">
        <!-- si message d'erreur on l'affiche -->
        <?php if (isset($errorMessage)) : ?>
            <div class="alert alert-danger" role="alert">
                <?php echo htmlspecialchars($errorMessage); ?>
            </div>
        <?php endif; ?>
        <div class="mb-4">
            <label for="identifiant" class="form-label">Identifiant</label><br>
            <input type="text" class="form-control" id="identifiant" name="identifiant" aria-describedby="identifiantHelp" placeholder="Veuillez entrer un identifiant" required><br><br>
        </div>
        <div class="mb-4">
            <label for="email" class="form-label">Adresse e-mail</label><br>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Veuillez entrer une adresse e-mail" required><br><br>
        </div>
        <div class="mb-4">
            <label for="password" class="form-label">Mot de passe</label><br>
            <input type="password" class="form-control" id="password" name="mdp" aria-describedby="passwordHelp" required>
        </div>    

<div class="mb-4">
<input type="hidden" name="hid" value="true">




        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>

<?php     echo($erreur);
endif;
?>



    <!-- inclusion du bas de page du site -->
    <?php include('./include/footer.php'); ?>


</body>

</html>