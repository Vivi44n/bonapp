<?php include('./traitement/traitementcontact.php'); ?>


<!DOCTYPE html>
<html lang="en">

<?php include('./include/head.html'); ?>

<body>
    
<?php include('./include/header.php'); ?>



    <h1>Contactez-nous</h1>
    <?php if ($successMessage): ?>
        <p style="color: green;"><?= $successMessage; ?></p>
    <?php endif; ?>
    <div class="nomemailmessage">
    <form method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Nom:</label><br>
        <input type="text" id="name" name="name" value="<?= htmlspecialchars($name); ?>">
        <span style="color: red;"><?= $nameErr; ?></span><br>

        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email" value="<?= htmlspecialchars($email); ?>">
        <span style="color: red;"><?= $emailErr; ?></span><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message"><?= htmlspecialchars($message); ?></textarea>
        <span style="color: red;"><?= $messageErr; ?></span>    <br>
        </div>

        <button type="submit" class="btn-primary">Envoyer</button>
        <br>

        </form>

        <br>

    <?php include('./include/footer.php'); ?>

</body>
</html>


