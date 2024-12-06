<?php

if (isset ($_POST [ 'identifiant'] ) && !empty ($_POST [ 'identifiant'] ) 
// && !empty ($_POST [ 'password'] ) && isset ($_POST [ 'password'] )
) {
	
/**
 * On ne traite pas les super globales provenant de l'utilisateur directement,
 * ces données doivent être testées et vérifiées.
 */

$sql = "SELECT id_user, nom, mdp FROM users WHERE nom=:Bernard";
$result = $pdo->prepare($sql);
$result->execute(["Bernard"=>$_POST['identifiant']]);
$usersdata = $result->fetchAll();
if (sizeof($usersdata) > 0 && isset($usersdata)) {
	foreach ($usersdata as $users) {
		if ($_POST["identifiant"] === $users["nom"]) {
			if ($users["mdp"] === $_POST["password"]) 
			header ("Location: accueil");{
			
			} 
	} 
}
} 
else {
	header ("Location: login");
	}
}

?>
