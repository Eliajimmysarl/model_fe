<?php 
    //Authority for URI
    $authority="http://test.eliajimmy.net";

    //Import module Curl
    require_once('composant/curl.php'); 

    if (isSet($_GET['demande']))
        {
            $demande=$_GET['demande'];

            if($demande=='ajout_un')
                {
                    require_once('composant/ajout_un/model/ajout_un.php');  
                }
            else  if($demande=='ajout_plusieurs')
                {
                    require_once('composant/ajout_plusieurs/model/ajout_plusieurs.php');  
                }
           

        }
    else if (isSet($_GET['page']))
        {
            $page=$_GET['page'];

           
            if($page=='ajouter_un')
                {
                    require_once('composant/ajout_un/view/demande_ajout.php');
                }
            else  if($page=='nombre_ligne')
                {
                    require_once('composant/ajout_plusieurs/view/nombre_ligne.php'); 
                }
            else  if($page=='ajouter_plusieurs')
                {
                    require_once('composant/ajout_plusieurs/view/demande_ajout.php'); 
                }
        }
    else   
        {
            //require_once('composant/dashboard/ihm/index.php'); 
        }
      
      
?>