<?php

$uri =  $authority.'/entites/';
   

$result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $entites= $obj->entite;

    $code = $obj->code;

    if($code ==200)
        {   
             
            //Intregration de l'IHM affichant la reponse positive
            require_once('composant/recuperation_plusieur/view/recuperation_plusieur.php'); 
        }
        else
        {
            echo "verifier le code sources ";  
        }


?>