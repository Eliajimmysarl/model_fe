<?php
    
    $uri =  $authority.'/entites/plusieurs/';

    $nombreLigne=$_POST['nombre_ligne'];

    $text=array();

    $data = array();

    for($i=0; $i < $nombreLigne; ++$i )
        {
            $text[$i][]= $_POST['id_'.$i];

            $text[$i][]= $_POST['text_'.$i];

            $text[$i][]= $_POST['select_'.$i];   
            
            $text[$i][]= $_POST['dates_'.$i];   

            $text[$i][]= $_POST['telephone_'.$i];   

            $text[$i][]= $_POST['email_'.$i];   
        }

    $data['text']= $text;

    $result=curl_put($uri, $token, $data);
  
    $entites=json_decode($result);

    $code = $entites->code;
        
    if($code ==200)
        {   
                require_once('composant/modification_plusieurs/view/reponse.php'); 
        }
  
   

    
?>