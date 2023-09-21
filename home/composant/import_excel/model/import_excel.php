<?php
    
    $uri =$authority.'/entites/excel/';

    $text= $_POST['text'];

    $select= $_POST['select'];

    if (isset($_FILES['excel']) && is_uploaded_file($_FILES['excel']['tmp_name']))
        {
            $origine = $_FILES['excel']['tmp_name']; 
        
            $nomphoto = $_FILES['excel']['name'];
        
            $destination = './'.$_FILES['excel']['name'];
        
            move_uploaded_file($origine,$destination);

            if (function_exists('curl_file_create')) 
                { // php 5.5+
                    $cFile = curl_file_create($destination);
                } 
            else 
                {
                    $cFile = '@' . realpath($destination);
                }

            $data = array(
                
                'fichier' => "excel", 
    
                'texte' =>  $text, 
                
                'selec' => $select,  
    
                'excel'=> $cFile   

                );

            $result=curl_import($uri, $token,$data);

            unlink($destination);

            $obj = json_decode($result);  

            $excel= $obj->excel;

            $code =  $obj->code;

            if($code ==201)
                {   
                    require_once('composant/text/importer_excel/view/reponse.php'); 
                }
        }
    else
        {
            echo"Erreur importation : Verifiez qu'un fichier est importé ou le fichier importé ne dépasse pas 2Mo)";
        }

?>