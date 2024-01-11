<?php 
        header('Content-Type: application/json'); 
        function getPilnas(){
            $xml=simplexml_load_file("pilpres_nasional.xml") or die("Error: Cannot create object");
            $array = array(
                        'paslon1' => $xml->data->item->paslon1 .'',
                        'paslon2' => $xml->data->item->paslon2 .'',
                        'paslon3'=> $xml->data->item->paslon3 .'',
                        'datamasuk'=> $xml->data->item->datamasuk .'',
                        'tingkatpartisipasi'=> $xml->data->item->tingkatpartisipasi .''
            );
            return $array;
        }

        function getParnas(){
            $xml=simplexml_load_file("partai_nasional.xml") or die("Error: Cannot create object");
            $array = array(
                'partai1' => $xml->data->item->partai1 .'',
                'partai2' => $xml->data->item->partai2 .'',
                'partai3' => $xml->data->item->partai3 .'',
                'partai4' => $xml->data->item->partai4 .'',
                'partai5' => $xml->data->item->partai5 .'',
                'partai6' => $xml->data->item->partai6 .'',
                'partai7' => $xml->data->item->partai7 .'',
                'partai8' => $xml->data->item->partai8 .'',
                'partai9' => $xml->data->item->partai9 .'',
                'partai10' => $xml->data->item->partai10 .'',
                'partai11' => $xml->data->item->partai11 .'',
                'partai12' => $xml->data->item->partai12 .'',
                'partai13' => $xml->data->item->partai13 .'',
                'partai14' => $xml->data->item->partai14 .'',
                'partai15' => $xml->data->item->partai15 .'',
                'partai16' => $xml->data->item->partai16 .'',
                'partai17' => $xml->data->item->partai17 .'',
                'partai24' => $xml->data->item->partai24 .'',
                'datamasuk'=> $xml->data->item->datamasuk .'',
                'tingkatpartisipasi'=> $xml->data->item->tingkatpartisipasi .''

            );
            return $array;
        }

        function getParnaspro(){
            $xml=simplexml_load_file("partai_nasional_perprovinsi.xml") or die("Error: Cannot create object");
            $array = [];
            foreach($xml->data->item as $row){
                $array[] = array(
                    'provinsi' => $row->provinsi .'',
                    'partai1' => $row->partai1 .'',
                    'partai2' => $row->partai2 .'',
                    'partai3' => $row->partai3 .'',
                    'partai4' => $row->partai4 .'',
                    'partai5' => $row->partai5 .'',
                    'partai6' => $row->partai6 .'',
                    'partai7' => $row->partai7 .'',
                    'partai8' => $row->partai8 .'',
                    'partai9' => $row->partai9 .'',
                    'partai10' => $row->partai10 .'',
                    'partai11' => $row->partai11 .'',
                    'partai12' => $row->partai12 .'',
                    'partai13' => $row->partai13 .'',
                    'partai14' => $row->partai14 .'',
                    'partai15' => $row->partai15 .'',
                    'partai16' => $row->partai16 .'',
                    'partai17' => $row->partai17 .'',
                    'partai24' => $row->partai24 .'',
                    'datamasuk' => $row->datamasuk .'',
                    'tingkatpartisipasi' => $row->tingkatpartisipasi .''
                );
            }
            return $array;
        }

        function getPilnaspro(){
            $xml=simplexml_load_file("pilpres_nasional_perprovinsi.xml") or die("Error: Cannot create object");
            $array = [];
            foreach($xml->data->item as $row){
                $array[] = array(
                    'provinsi' => $row->provinsi .'',
                    'paslon1' => $row->paslon1 .'',
                    'paslon2' => $row->paslon2 .'',
                    'paslon3' => $row->paslon3 .'',
                    'datamasuk' => $row->datamasuk. '',
                    'tingkatpartisipasi' => $row->tingkatpartisipasi .''
                );
            }
            $result = array (
                'data' => $array
            );
            return $array;
        }
        
        $result = array(
         'pilpres_nasional' => getPilnas(),
         'partai_nasional' => getParnas(),
         'pilpres_nasional_perprovinsi' => getPilnaspro(),
         'partai_nasional_perprovinsi' => getParnaspro(),
        );
        $json = json_encode($result,JSON_PRETTY_PRINT);
        echo $json; 
    ?>