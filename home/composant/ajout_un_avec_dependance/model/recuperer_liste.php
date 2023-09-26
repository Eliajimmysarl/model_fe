<?php

    $uri =  $authority.'/selections/';
   
    $result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $seletions= $obj->select;


    $uri =  $authority.'/options/';
   
    $result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $options= $obj->options;

    if($code ==201)
        {   
                require_once('composant/ajout_un_avec_dependance/view/demande_ajout.php'); 
        }
   
   


?>