<?php 

include("./db/connexion.php");

$maRoute = explode('/', $_GET['route']);

if ($maRoute [0] == 1 ) {


include("./traitement/traitementrecette.php");



} else if ($maRoute [0] == "accueil" ) {
    
    include("./traitement/traitementaccueil.php");


} else if($maRoute [0] == "contact") {

    include("./pages/contact.php");


} else if($maRoute [0] == "recette") {

    include("./pages/recettes/une_recette.php");


} else if($maRoute [0] == "login") {

    include("./pages/login.php");







}

else if ($maRoute [0] == "connexion") {
    include("./traitement/traitementconnexion.php");
}

else {
echo ("page non trouvée");
}










