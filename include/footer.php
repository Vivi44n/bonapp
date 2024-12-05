<?php
$currentYear = date("Y");
$siteName = "Bon app 🍏"; 
?>

<footer class="footer">
    <p>&copy; <?php echo $currentYear; ?> <?php echo htmlspecialchars($siteName); ?>Tous droits réservés.</p>
    <nav class="footer-nav">
        <a href="./accueil">Accueil</a>
        <a href="./contact">Contact</a>
    </nav>
</footer>