<?php 
   $xml=simplexml_load_file("https://hitungcepat.web.id/data/TV/EMTEK/pilpres_nasional.xml") or die("Error: Cannot create object");
   $data = array( 
    'paslon1' => $xml->data->item->paslon1[0],
    'paslon2' => $xml->data->item->paslon2[0],
    'paslon3' => $xml->data->item->paslon3[0],
    'datamasuk' => $xml->data->item->datamasuk[0],
    'tingkatpartisipasi' => $xml->data->item->tingkatpartisipasi[0]);

    $response = [];
    $response['status'] = 'success';
    $response['code'] = '200';
    $response['message'] = 'inject indikator pilpres nasional';
    $response['data'] = $data;

    echo json_encode($response);
?>