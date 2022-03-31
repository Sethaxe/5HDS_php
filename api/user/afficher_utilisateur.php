<?php
include('../index.php');


$requete = $pdo->query("SELECT * FROM `users`;");


$result = array();

while($data = $requete->fetch())
{
    $success = true;
    $result[] = array( 
    "nom"=>$data['nom'],
    "prenom"=>$data['prenom'], 
    "token"=>$data['token'],
    "role"=>$data['roleUsers'],
    "created_at"=>$data['created_at'],
    "update_at"=>$data['update_at']);    

}


reponse_json($success, $result);