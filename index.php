    <?php 
        function rand_float($st_num=0,$end_num=1,$mul=1000000)
        {
        if ($st_num>$end_num) return false;
        return mt_rand($st_num*$mul,$end_num*$mul)/$mul;
        }
     $array = array(
        "0" => array('PASLON1' => rand_float(0,100,3)."",
                    'PASLON2' => rand_float(0,100,3)."",
                    'PASLON3'=> rand_float(0,100,3)."",
                    'TOTAL'=> rand_float(0,100,3).""
    ));
    $json = json_encode($array);
    echo $json;
    
    $path = 'pilpres.json';
    $fp = fopen($path, 'w');
    fwrite($fp, $json);
    fclose($fp);
    ?>