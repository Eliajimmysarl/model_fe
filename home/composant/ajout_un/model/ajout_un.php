<?php

    $uri =  $authority.'/entites/';

    $text=$_POST['text'];

    $select=$_POST['select'];

    $telephone=$_POST['telephoone'];

    $email=$_POST['email'];

    $date=$_POST['date'];

    $password=$_POST['password'];

    $optionsRadios=$_POST['optionsRadios'];

    $data = array(
        
        'text' => $text,

        'select'=> $select,

        'telephone'=> $telephone,

        'email'=> $email,

        'date'=> $date,

        'password'=> $password,

        'optionsRadios'=> $optionsRadios
    
    );

    $result=curl_post($uri, $token, $data);

    $entites=json_decode($result);

    $code = $entitess->code;
        
    if($code ==201)
            {   
                require_once('composant/ajout_un/view/reponse_positive.php'); 
            }
        else    
            {
                require_once('composant/ajout_un/view/reponse_negative.php');   
            }


?>