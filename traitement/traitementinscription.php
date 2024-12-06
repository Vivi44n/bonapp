<?php 


if ($_POST) {
    if (isset($_POST["hid"]) && $_POST["hid"] == "true") {
    } else {
    }
}
 





    if(!empty($_POST['identifiant']) AND !empty($_POST['email']) AND !empty($_POST['mdp']))
    {
        $nom = htmlspecialchars($_POST['identifiant']);
        $mail = htmlspecialchars($_POST['email']);
        $mdp = sha1($_POST['mdp']);

        $nomlength = strlen($nom);
        if($nomlength <= 255){
                if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
                    $reqnom = $pdo->prepare("SELECT * FROM users WHERE nom=?");
                    $reqnom->execute(array($nom));
                    $nomexist = $reqnom->rowCount();
                    if($nomexist == 0){
                        $reqmail = $pdo->prepare("SELECT * FROM users  WHERE mail=?");
                        $reqmail->execute(array($mail));
                        $mailexist = $reqmail->rowCount();
                        if($mailexist == 0){
                                $insertmbr = $pdo->prepare("INSERT INTO users(nom, mail, mdp) VALUES(?,?,?)");
                                $insertmbr->execute(array($nom, $mail, $mdp));
                                $erreur = "Votre compte a bien été créé!";
 
                        }else{
                                $erreur = "Adresse mail deja utilisée!";
                        }
                    }else{
                            $erreur = "nom deja utilisée!";
                    }
                }else{
                        $erreur = "Votre adresse mail n'est pas valide!";
                    }
             

             
        }else{
            $erreur = "Votre nom ne doit pas dépasser 255 caractères";
        }

    }else{
        $erreur = "<br>Tout les champs doivent être complétés!";
    }





?>