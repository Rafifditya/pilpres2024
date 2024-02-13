<?php 
   $xml=simplexml_load_file("https://hitungcepat.web.id/data/TV/EMTEK/partai_nasional_perzonasi.xml") or die("Error: Cannot create object");

for($i=0;$i<11;$i++){
    $data = array( 
        'namazonasi' => $xml->data->item[$i]->namazonasi[0],
        'partai1' => $xml->data->item[$i]->partai1[0],
        'partai2' => $xml->data->item[$i]->partai2[0],
        'partai3' => $xml->data->item[$i]->partai3[0],
        'partai4' => $xml->data->item[$i]->partai4[0],
        'partai5' => $xml->data->item[$i]->partai5[0],
        'partai6' => $xml->data->item[$i]->partai6[0],
        'partai7' => $xml->data->item[$i]->partai7[0],
        'partai8' => $xml->data->item[$i]->partai8[0],
        'partai9' => $xml->data->item[$i]->partai9[0],
        'partai10' => $xml->data->item[$i]->partai10[0],
        'partai11' => $xml->data->item[$i]->partai11[0],
        'partai12' => $xml->data->item[$i]->partai12[0],
        'partai13' => $xml->data->item[$i]->partai13[0],
        'partai14' => $xml->data->item[$i]->partai14[0],
        'partai15' => $xml->data->item[$i]->partai15[0],
        'partai16' => $xml->data->item[$i]->partai16[0],
        'partai17' => $xml->data->item[$i]->partai17[0],
        'partai24' => $xml->data->item[$i]->partai24[0],
        'datamasuk' => $xml->data->item[$i]->datamasuk[0],
        'tingkatpartisipasi' => $xml->data->item[$i]->tingkatpartisipasi[0]);
}
   

    $response = [];
    $response['status'] = 'success';
    $response['code'] = '200';
    $response['message'] = 'parsing SMRC pilpres nasional';
    $response['data'] = $data;

// print_r($xml->data->item);
    echo json_encode($response);
?>