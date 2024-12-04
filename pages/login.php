
<!DOCTYPE html>
<html lang="en">

<?php include('./include/head.html'); ?>

<body class="d-flex flex-column min-vh-100">

    <?php include('./include/header.php'); ?>

    <h1>Se connecter</h1>

    <!--
   	Si utilisateur/trice est non identifié(e), on affiche le formulaire
	-->
    <?php if (!isset($loggedUser)) : ?>
        <form action="connexion" method="post">
            <!-- si message d'erreur on l'affiche -->
            <?php if (isset($errorMessage)) : ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $errorMessage; ?>
                </div>
            <?php endif; ?>
            <div class="mb-3">
                <label for="identifient" class="form-label">Identifient</label>
                <input type="text" class="form-control" id="identifient" name="identifient" aria-describedby="identifient help" placeholder="Veuillez entrer un identifient">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
        <!-- Si utilisateur/trice bien connectée on affiche un message de succès -->
    <?php else : ?>
        <div class="alert alert-success" role="alert">
            Bonjour <?php echo $loggedUser['identifient']; ?> et bienvenue sur le site !
        </div>
    <?php endif; ?>


    <div class="container">

        <!-- Formulaire de connexion -->
        <?php require_once(__DIR__ . '/login.php'); ?>

        <?php if (isset($loggedUser)) : ?>
            <?php foreach (($recipes) as $recipe) : ?>
                <article>
                    <h3><?php echo htmlspecialchars($recipe['title']); ?></h3>
                    <div><?php echo htmlspecialchars($recipe['recipe']); ?></div>
                </article>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <!-- inclusion du bas de page du site -->
    <?php include('./include/footer.php'); ?>

</body>

</html>