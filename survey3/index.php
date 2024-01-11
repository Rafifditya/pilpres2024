<?php 
        header('Content-Type: application/json'); 

        function getPilnas(){
            $xml=simplexml_load_file("pilpres_nasional.xml") or die("Error: Cannot create object");
            $array = array(
                        'paslon1_persen' => $xml->data->item->paslon1_persen .'',
                        'paslon2_persen' => $xml->data->item->paslon2_persen .'',
                        'paslon3_persen'=> $xml->data->item->paslon3_persen .'',
                        'totalpaslon_persen'=> $xml->data->item->totalpaslon_persen .''
            );
            return $array;
        }

        $xml=simplexml_load_file("pilpres_nasional.xml") or die("Error: Cannot create object");
        $array = array(
                        'paslon1_persen' => $xml->data->item->paslon1_persen .'',
                        'paslon2_persen' => $xml->data->item->paslon2_persen .'',
                        'paslon3_persen'=> $xml->data->item->paslon3_persen .'',
                        'totalpaslon_persen'=> $xml->data->item->totalpaslon_persen .''
        );
        $xmlparnas=simplexml_load_file("partai_nasional.xml") or die("Error: Cannot create object");


        $result = array(
         'pilpres_nasional' => $array,

        );
        $json = json_encode($array,JSON_PRETTY_PRINT);
        echo $json; 
    ?>