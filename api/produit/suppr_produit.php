<?php
include('../index.php');

if( !empty($_POST['id']) ){
	
	$requete = $pdo->prepare("DELETE FROM `produit` WHERE `id` = :id");
	$requete->bindParam(':id', $_POST['id']);

	if( $requete->execute() ){
		$success = true;
		$msg = "Le produit est supprimé";
	} else {
		$msg = "Une erreur s'est produite";
	}
} else {
	$msg = "Il manque des informations";
}

reponse_json($success, $data, $msg);
