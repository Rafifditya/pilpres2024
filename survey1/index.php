<?php 
        header('Content-Type: application/json'); 
        $array = array(
            'PASLON1' => rand_float(0,100)."",
                        'PASLON2' => rand_float(0,100)."",
                        'PASLON3'=> rand_float(0,100)."",
                        'TOTAL'=> rand_float(0,100).""
        );
        $result = array(
         'status' => true,
         'message' => "Success get data pilpres",
         'code' => 200,
         'data' => $array
        );
        $json = json_encode($result,JSON_PRETTY_PRINT);
        echo $json; 
        function rand_float($st_num=0,$end_num=1,$mul=1000000)
        {
        if ($st_num>$end_num) return false;
        return mt_rand($st_num*$mul,$end_num*$mul)/$mul;
        }
    //  $array = array(
    //     "0" => array('PASLON1' => rand_float(0,100)."",
    //                 'PASLON2' => rand_float(0,100)."",
    //                 'PASLON3'=> rand_float(0,100)."",
    //                 'TOTAL'=> rand_float(0,100).""
    // ));
    // $json = json_encode($array);
    // echo $json;
    
    // $path = 'pilpres.json';
    // $fp = fopen($path, 'w');
    // fwrite($fp, $json);
    // fclose($fp);
    ?>