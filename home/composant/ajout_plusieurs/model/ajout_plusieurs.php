<?php
    
    $uri =  $authority.'/texte/';

    $nombreLigne=$_POST['nombre_ligne'];

    $test=array();

    $select=array();

    for($i=0; $i < $nombreLigne; ++$i )
        {
            $test['test_'.$i]= $_POST['test_'.$i];

            $select['test_'.$i]= $_POST['select_'.$i];
        }

    $data = array();

    $data['test'][] = $test;

    $data['select'][] = $test;

    $result=curl_post($uri, $token, $data);

    $textes=json_decode($result);

    $code = $textes->code;
    
    if($code ==201)
        {   
            require_once('interactions/texte/ajouter/view/reponse_positive.php'); 
        }
    else    
        {
            require_once('interactions/texte/ajouter/view/reponse_negative.php');   
        }
?>