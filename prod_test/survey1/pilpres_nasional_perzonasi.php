<?php 
    $xml=simplexml_load_file("https://api-qc.chartapolitika.com/v1/parsing-data/MSE002/zona?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczovL2FwaS1xYy5jaGFydGFwb2xpdGlrYS5jb20vdjEvcmVnaXN0ZXIiLCJpYXQiOjE3MDY3ODcyMTYsIm5iZiI6MTcwNjc4NzIxNiwianRpIjoid3JiWWpZcFRKY25VMTNLbSIsInN1YiI6IjUxZmRhMDFjLWI2M2QtNDk4NC04NmRiLThiOTEwNDEzZjRhNCIsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.UTv_x5ksa7aaxLPxPL6FlJrfU6XflI4YcgHhdtJxwrU&type=xml") or die("Error: Cannot create object");
    
    for($i=0;$i<11;$i++){
        $data [] = array(
            'namazonasi' => $xml->data->item[$i]->namazonasi[0],
            'paslon1' => $xml->data->item[$i]->paslon1[0],
            'paslon2' => $xml->data->item[$i]->paslon2[0],
            'paslon3' => $xml->data->item[$i]->paslon3[0],
            'datamasuk' => $xml->data->item[$i]->datamasuk[0],
            'tingkatpartisipasi' => $xml->data->item[$i]->tingkatpartisipasi[0],
        );
    }
    $response = [];
    $response['status'] = 'success';
    $response['code'] = '200';
    $response['message'] = 'Parsing charta pilpres nasional perzonasi';
    $response['data'] = $data;
    echo json_encode($response);
  
  
?>