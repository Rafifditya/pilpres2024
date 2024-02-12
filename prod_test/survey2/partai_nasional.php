<?php 
   $xml=simplexml_load_file("https://hitungcepat.web.id/data/TV/EMTEK/partai_nasional.xml") or die("Error: Cannot create object");
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
    $response['message'] = 'Parsing indikator partai nasional';
    $response['data'] = $data;

// print_r($xml->data->item);
    echo json_encode($response);
?>