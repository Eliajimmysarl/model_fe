<?php
    
    $uri =  $authority.'/entites/';

    $nombreLigne=$_POST['nombre_ligne'];

    $text=array();

    $data = array();

    for($i=0; $i < $nombreLigne; ++$i )
        {
            $text[$i][]= $_POST['id_'.$i];
        }

    $data['text']= $text;

    $result=curl_delete_plusieurs($uri, $token, $data);
  
    $entites=json_decode($result);

    $code = $entites->code;
        
    if($code ==200)
        {   
            require_once('composant/suppression_plusieurs/view/reponse.php'); 
        }
  
   

    
?>