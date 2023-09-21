<?php

$id=$_GET['id'];

$uri = $authority.'/titre/'.$client_id.'/'.$referenceCommande;

$result=curl_get($uri,$token);

$obj = json_decode($result);                      
    
$code =  $obj->code;

if($code ==200)
    {   
        $recharges =  $obj->recharge;
        $descriptions=$recharges->descriptions; 
        $periode=$recharges->periode; 
        $prix=  $recharges->prix;
        $zone=$recharges->zone; 
        $periode=$recharges->periode; 
        $id_carte=$recharges->id_carte; 
        $dateEnregistrement=$recharges->date_enregistrement; 
        $createDate = new DateTime( $dateEnregistrement);
        $dateEnregistrement = $createDate->format('d-m-Y');
        $referenceCommande=$recharges->reference_commande; 
        
        
        require_once('composant/titre/recuperer/ihm/afficher_ressource.php'); 
    }
else if ($code ==400)
    {
        echo $result; 
    }




?>