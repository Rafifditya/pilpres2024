<?php 
    $xml=simplexml_load_file("https://api-qc.chartapolitika.com/v1/parsing-data/MSE002?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczovL2FwaS1xYy5jaGFydGFwb2xpdGlrYS5jb20vdjEvcmVnaXN0ZXIiLCJpYXQiOjE3MDY3ODcyMTYsIm5iZiI6MTcwNjc4NzIxNiwianRpIjoid3JiWWpZcFRKY25VMTNLbSIsInN1YiI6IjUxZmRhMDFjLWI2M2QtNDk4NC04NmRiLThiOTEwNDEzZjRhNCIsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.UTv_x5ksa7aaxLPxPL6FlJrfU6XflI4YcgHhdtJxwrU&type=xml") or die("Error: Cannot create object");
    $data = array( 
        'paslon1' => $xml->data->item->paslon1[0],
        'paslon2' => $xml->data->item->paslon2[0],
        'paslon3' => $xml->data->item->paslon3[0],
        'datamasuk' => $xml->data->item->datamasuk[0],
        'tingkatpartisipasi' => $xml->data->item->tingkatpartisipasi[0]);
    
        $response = [];
        $response['status'] = 'success';
        $response['code'] = '200';
        $response['message'] = 'inject Charta pilpres nasional';
        $response['data'] = $data;
    
        echo json_encode($response);
  
  
?>