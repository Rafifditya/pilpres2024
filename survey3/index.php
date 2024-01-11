<?php 
        header('Content-Type: application/json'); 
        $xml=simplexml_load_file("pilpres_nasional.xml") or die("Error: Cannot create object");
        $array = array(
                        'paslon1_persen' => $xml->data->item->paslon1_persen .'',
                        'paslon2_persen' => $xml->data->item->paslon2_persen .'',
                        'paslon3_persen'=> $xml->data->item->paslon3_persen .'',
                        'totalpaslon_persen'=> $xml->data->item->totalpaslon_persen .''
        );
        $result = array(
         'status' => true,
         'message' => "Success get data pilpres",
         'code' => 200,
         'data' => $array
        );
        $json = json_encode($array,JSON_PRETTY_PRINT);
        echo $json; 
    ?>