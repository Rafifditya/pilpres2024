<?php 
   $xml=simplexml_load_file("https://hitungcepat.web.id/data/TV/EMTEK/pilpres_nasional_perzonasi.xml") or die("Error: Cannot create object");
    $data = array();
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
    // echo $xml->data->item[0]->namazonasi;
    $response = [];
    $response['status'] = 'success';
    $response['code'] = '200';
    $response['message'] = 'parsing indikator pilpres nasional perzonasi';
    $response['data'] = $data;
    echo json_encode($response);
?>