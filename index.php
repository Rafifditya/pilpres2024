<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate JSON</title>
</head>
<body>
    <?php 
        function rand_float($st_num=0,$end_num=1,$mul=1000000)
        {
        if ($st_num>$end_num) return false;
        return mt_rand($st_num*$mul,$end_num*$mul)/$mul;
        }
    ?>
    <h1>Generating json TEST...</h1>
    <h1>
    <?php 
     $array = array(
        "0" => array('PASLON1' => rand_float(0,100)."",
                    'PASLON2' => rand_float(0,100)."",
                    'PASLON3'=> rand_float(0,100)."",
                    'TOTAL'=> rand_float(0,100).""
    ));
    $json = json_encode($array);
    echo $json;
    
    ?>
    </h1>
    <?php 
    $path = 'pilpres.json';
    $fp = fopen($path, 'w');
    fwrite($fp, $json);
    fclose($fp);
    ?>
</body>
</html>