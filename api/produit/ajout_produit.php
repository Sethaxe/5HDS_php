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

if( !empty($_POST['nom']) && !empty($_POST['description']) && !empty($_POST['price']) && !empty($_POST['stock']) && !empty($_POST['reference']) ){

	$requete = $pdo->prepare("INSERT INTO `produit` (`id`, `nom`, `description`, `token`, `price`, `stock`, `reference`, `created_at`, `update_at`) VALUES (NULL, :nom, :description, :token, :price, :stock, :reference, now(), now());");
	$requete->bindParam(':nom', $_POST['nom']);
	$requete->bindParam(':description', $_POST['description']);
	$requete->bindParam(':token', randomToken(20));
    $requete->bindParam(':price', $_POST['price']);
    $requete->bindParam(':stock', $_POST['stock']);
    $requete->bindParam(':reference', $_POST['reference']);

	if( $requete->execute() ){
		$success = true;
		$msg = "Le produit a bien été ajouté";
	} else {
		$msg = "Une erreur s'est produite";
	}
} else {
    $msg = "Il manque des informations";
}

reponse_json($success, $data, $msg);
