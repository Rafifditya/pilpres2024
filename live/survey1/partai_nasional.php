<?php 
    $xml=simplexml_load_file("https://api-qc.chartapolitika.com/v1/parsing-data/MSE003?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczovL2FwaS1xYy5jaGFydGFwb2xpdGlrYS5jb20vdjEvcmVnaXN0ZXIiLCJpYXQiOjE3MDY3ODcyMTYsIm5iZiI6MTcwNjc4NzIxNiwianRpIjoid3JiWWpZcFRKY25VMTNLbSIsInN1YiI6IjUxZmRhMDFjLWI2M2QtNDk4NC04NmRiLThiOTEwNDEzZjRhNCIsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.UTv_x5ksa7aaxLPxPL6FlJrfU6XflI4YcgHhdtJxwrU&type=xml") or die("Error: Cannot create object");
   
$data = array( 
    'partai1' => $xml->data->item->partai1[0],
    'partai2' => $xml->data->item->partai2[0],
    'partai3' => $xml->data->item->partai3[0],
    'partai4' => $xml->data->item->partai4[0],
    'partai5' => $xml->data->item->partai5[0],
    'partai6' => $xml->data->item->partai6[0],
    'partai7' => $xml->data->item->partai7[0],
    'partai8' => $xml->data->item->partai8[0],
    'partai9' => $xml->data->item->partai9[0],
    'partai10' => $xml->data->item->partai10[0],
    'partai11' => $xml->data->item->partai11[0],
    'partai12' => $xml->data->item->partai12[0],
    'partai13' => $xml->data->item->partai13[0],
    'partai14' => $xml->data->item->partai14[0],
    'partai15' => $xml->data->item->partai15[0],
    'partai16' => $xml->data->item->partai16[0],
    'partai17' => $xml->data->item->partai17[0],
    'partai24' => $xml->data->item->partai24[0],
    'datamasuk' => $xml->data->item->datamasuk[0],
    'tingkatpartisipasi' => $xml->data->item->tingkatpartisipasi[0]);

    $response = [];
    $response['status'] = 'success';
    $response['code'] = '200';
    $response['message'] = 'inject charta partai nasional';
    $response['data'] = $data;

// print_r($xml->data->item);
    echo json_encode($response);
  
  
?>