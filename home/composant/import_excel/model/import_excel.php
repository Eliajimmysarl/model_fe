<?php
    
    $url = 'http://api.eliajimmy.net/entites/import/';

    if (isset($_FILES['clientExcel']) && is_uploaded_file($_FILES['clientExcel']['tmp_name']))
        {
            $origine = $_FILES['clientExcel']['tmp_name']; 
            
            $nomphoto = $_FILES['clientExcel']['name'];
            
            $destination = './'.$_FILES['clientExcel']['name'];
            
            move_uploaded_file($origine,$destination);

            if(function_exists('curl_file_create')) 
                { 
                    $cFile = curl_file_create($destination);
                } 
            else 
                {
                    $cFile = '@' . realpath($destination);
                }

            unlink($destination);
        }

    $data = array(
        'fichier' => "excel", 

        'clientExcel'=> $cFile   
    );

    $result = curl_import($uri, $token, $data);

    $obj = json_decode($result);

    $excel= $obj->excel;

    $code =  $obj->code;

    if($code ==201)
        {   
            require_once('composant/text/importer_excel/view/afficher_users.php'); 
        }
    

?>