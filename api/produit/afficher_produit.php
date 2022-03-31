<?php
include('../index.php');


$requete = $pdo->query("SELECT * FROM `produit`;");


$result = array();

while($data = $requete->fetch())
{
    $success = true;
    $result[] = array( 
    "nom"=>$data['nom'],
    "description"=>$data['description'], 
    "token"=>$data['token'],
    "price"=>$data['price'],
    "stock"=>$data['stock'],
    "reference"=>$data['reference'],
    "created_at"=>$data['created_at'],
    "update_at"=>$data['update_at']);    

}


reponse_json($success, $result);