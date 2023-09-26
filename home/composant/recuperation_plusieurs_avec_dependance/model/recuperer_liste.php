<?php

    $uri =  $authority.'/selections/';
   
    $result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $seletions= $obj->select;


    $uri =  $authority.'/options/';
   
    $result=curl_get($uri, $token);

    $obj = json_decode($result);                      
    
    $options= $obj->options;

   


?>