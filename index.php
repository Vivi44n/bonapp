


<?php 

include("./db/connexion.php");

$maRoute = explode('/', $_GET['route']);

if ($maRoute [0] == 1 ) {


include("./traitement/traitementrecette.php");



} else if ($maRoute [0] == "accueil" ) {
    
    include("./traitement/traitementaccueil.php");



} else if($maRoute [0] == "contact") {

    include("./pages/contact.php");


}
else {
echo ("page non trouvée");
}










