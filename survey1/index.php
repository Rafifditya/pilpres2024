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

        function getParnas(){
            $xml=simplexml_load_file("partai_nasional.xml") or die("Error: Cannot create object");
            $array = array(
                'partai01_persen' => $xml->data->item->partai01_persen .'',
                'partai02_persen' => $xml->data->item->partai02_persen .'',
                'partai03_persen' => $xml->data->item->partai03_persen .'',
                'partai04_persen' => $xml->data->item->partai04_persen .'',
                'partai05_persen' => $xml->data->item->partai05_persen .'',
                'partai06_persen' => $xml->data->item->partai06_persen .'',
                'partai07_persen' => $xml->data->item->partai07_persen .'',
                'partai08_persen' => $xml->data->item->partai08_persen .'',
                'partai09_persen' => $xml->data->item->partai09_persen .'',
                'partai10_persen' => $xml->data->item->partai10_persen .'',
                'partai11_persen' => $xml->data->item->partai11_persen .'',
                'partai12_persen' => $xml->data->item->partai12_persen .'',
                'partai13_persen' => $xml->data->item->partai13_persen .'',
                'partai14_persen' => $xml->data->item->partai14_persen .'',
                'partai15_persen' => $xml->data->item->partai15_persen .'',
                'partai16_persen' => $xml->data->item->partai16_persen .'',
                'partai17_persen' => $xml->data->item->partai17_persen .'',
                'partai18_persen' => $xml->data->item->partai18_persen .'',
                'partai19_persen' => $xml->data->item->partai19_persen .'',
                'partai20_persen' => $xml->data->item->partai20_persen .'',
                'partai21_persen' => $xml->data->item->partai21_persen .'',
                'partai22_persen' => $xml->data->item->partai22_persen .'',
                'partai23_persen' => $xml->data->item->partai23_persen .'',
                'partai24_persen' => $xml->data->item->partai24_persen .'',
                'totalpartai_persen'=> $xml->data->item->totalpartai_persen .''
            );
            return $array;
        }

        function getPilnaspro(){

        }
        


        $result = array(
         'pilpres_nasional' => getPilnas(),
         'partai_nasional' => getParnas(),
        );
        $json = json_encode($result,JSON_PRETTY_PRINT);
        echo $json; 
    ?>