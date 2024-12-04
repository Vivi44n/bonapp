<?php

/**
 * On ne traite pas les super globales provenant de l'utilisateur directement,
 * ces données doivent être testées et vérifiées.
 */

$sql = "SELECT id_user, nom, mdp FROM users";
$result = $conn->prepare($sql);
$result->execute();
$usersdata = $result->fetchAll();
if (sizeof($usersdata) > 0 && isset($usersdata)) {
	foreach ($usersdata as $users) {
		if ($_POST["identifient"] === $users["nom"]) {
			if ($users["mdp"] === $_POST["password"]) {;
			}
		}

	}
} else {
	echo ("0 résultats");
}




$postData = $_POST;


// Validation du formulaire
if (isset($postData['email']) &&  isset($postData['password'])) {
	if (!filter_var($postData['email'], FILTER_VALIDATE_EMAIL)) {
		$errorMessage = 'Il faut un email valide pour soumettre le formulaire.';
	} else {
		foreach ($users as $user) {
			if (
				$user['email'] === $postData['email'] &&
				$user['password'] === $postData['password']
			) {
				$loggedUser = [
					'email' => $user['email'],
				];
			}
		}

		if (!isset($loggedUser)) {
			$errorMessage = sprintf(
				'Les informations envoyées ne permettent pas de vous identifier : (%s/%s)',
				$postData['email'],
				strip_tags($postData['password'])
			);
		}
	}
}
