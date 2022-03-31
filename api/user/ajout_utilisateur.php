<?php
include('../index.php');

function randomToken($car){
    $string = "";
    $chaine = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz";
    srand ((double)microtime()*1000000);
    for($i = 0; $i<$car;$i++){
        $string .= $chaine[rand()%strlen($chaine)];
    }

    return $string;
}

if( !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['roleUsers']) ){

	$requete = $pdo->prepare("INSERT INTO `users` (`id`, `nom`, `prenom`, `token`, `roleUsers`, `created_at`, `update_at`) VALUES (NULL, :nom, :prenom, :token, :roleUsers, now(), now());");
	$requete->bindParam(':nom', $_POST['nom']);
	$requete->bindParam(':prenom', $_POST['prenom']);
	$requete->bindParam(':token', randomToken(20));
	$requete->bindParam(':roleUsers', $_POST['roleUsers']);

	if( $requete->execute() ){
		$success = true;
		$msg = "L'utilisateur a bien été ajouté";
	} else {
		$msg = "Une erreur s'est produite";
	}
} else {
    $msg = "Il manque des informations";
}

reponse_json($success, $data, $msg);
