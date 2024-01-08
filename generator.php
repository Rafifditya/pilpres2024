<?php 
    function rand_float($st_num=0,$end_num=1,$mul=10){
        if ($st_num>$end_num){
            return false;
        }
        return mt_rand($st_num*$mul,$end_num*$mul)/$mul;
    }


   function rand_paslon(){
    $sisa = 100;
    $paslon1 = rand_float(0,$sisa-40);
    $sisa  = $sisa - $paslon1;
    $paslon2 = rand_float(0,$sisa);
    $sisa  = $sisa - $paslon2;
    $paslon3 = $sisa;
    $array = array(
                    'PASLON1' => $paslon1,
                    'PASLON2' => $paslon2,
                    'PASLON3'=> $paslon3,
                    'TOTAL'=> rand_float(40,100).""
    );
    return $array;
   }

   function rand_partai(){
    $array = array();
    $sisa = 100;
    $i = 0;
    while($i < 24){
        if ($i == 23){
            $array[] = $sisa;
        } else {
            $result = rand_float(0,4);
            $array[] = $result;
            $sisa = $sisa - $result;
        }
        $i = $i+1;
    }
    return $array;
   }

   function getPilpresnas(){
    $paslon_data = rand_paslon();
    $simplexml= new SimpleXMLElement('<?xml version="1.0"?><root/>');
    $data = $simplexml->addChild('data');
    $data->addAttribute('type','list');
    $item = $data->addChild('item');
    $item->addAttribute('type','dict');
    $item->addChild("paslon1_persen",$paslon_data['PASLON1'])->addAttribute('type','float');
    $item->addChild("paslon2_persen",$paslon_data['PASLON2'])->addAttribute('type','float');
    $item->addChild("paslon3_persen",$paslon_data['PASLON3'])->addAttribute('type','float');
    $item->addChild("totalpaslon_persen",rand_float(0,100))->addAttribute('type','float');
    $simplexml->addChild('created_at',date('Y-m-d H:i:s'))->addAttribute('type','str');
    return $simplexml;
     }

     function getPilpresProvinsi(){
        $propinsiArray = ['NANGGROE ACEH DARUSSALAM', 'SUMATERA UTARA', 'SUMATERA SELATAN', 'SUMATERA BARAT', 'BENGKULU', 'RIAU', 'KEPULAUAN RIAU','JAMBI', 'LAMPUNG', 'BANGKA BELITUNG', 'KALIMANTAN BARAT','KALIMANTAN TIMUR', 'KALIMANTAN SELATAN', 'KALIMANTAN TENGAH', 'KALIMANTAN UTARA', 'BANTEN', 'DKI JAKARTA', 'JAWA BARAT', 'JAWA TENGAH', 'DAERAH ISTIMEWA YOGYAKARTA', 'JAWA TIMUR', 'BALI', 'NUSA TENGGARA TIMUR', 'NUSA TENGGARA BARAT', 'GORONTALO', 'SULAWESI BARAT','SULAWESI TENGAH','SULAWESI UTARA','SULAWESI TENGGARA','SULAWESI SELATAN', 'MALUKU UTARA', 'MALUKU','PAPUA BARAT','PAPUA','PAPUA TENGAH','PAPUA PEGUNUNGAN','PAPUA SELATAN','PAPUA BARAT DAYA'];
        $simplexml= new SimpleXMLElement('<?xml version="1.0"?><root/>');
        $data = $simplexml->addChild('data');
        $data->addAttribute('type','list');
        foreach($propinsiArray as $propinsi){
            $paslon_data = rand_paslon();
            $item = $data->addChild('item');
            $item->addAttribute('type','dict');
            $item->addChild("nama_provinsi",$propinsi)->addAttribute('type','string');
            $item->addChild("paslon1_persen",$paslon_data['PASLON1'])->addAttribute('type','float');
            $item->addChild("paslon2_persen",$paslon_data['PASLON2'])->addAttribute('type','float');
            $item->addChild("paslon3_persen",$paslon_data['PASLON3'])->addAttribute('type','float');
            $item->addChild("totalpaslon_persen",rand_float(0,100))->addAttribute('type','float');
        }
        $simplexml->addChild('created_at',date('Y-m-d H:i:s'))->addAttribute('type','str');
        return $simplexml;
    }

    function getPartainas(){
        $simplexml= new SimpleXMLElement('<?xml version="1.0"?><root/>');
        $propinsiArray = ['NANGGROE ACEH DARUSSALAM', 'SUMATERA UTARA', 'SUMATERA SELATAN', 'SUMATERA BARAT', 'BENGKULU', 'RIAU', 'KEPULAUAN RIAU','JAMBI', 'LAMPUNG', 'BANGKA BELITUNG', 'KALIMANTAN BARAT','KALIMANTAN TIMUR', 'KALIMANTAN SELATAN', 'KALIMANTAN TENGAH', 'KALIMANTAN UTARA', 'BANTEN', 'DKI JAKARTA', 'JAWA BARAT', 'JAWA TENGAH', 'DAERAH ISTIMEWA YOGYAKARTA', 'JAWA TIMUR', 'BALI', 'NUSA TENGGARA TIMUR', 'NUSA TENGGARA BARAT', 'GORONTALO', 'SULAWESI BARAT','SULAWESI TENGAH','SULAWESI UTARA','SULAWESI TENGGARA','SULAWESI SELATAN', 'MALUKU UTARA', 'MALUKU','PAPUA BARAT','PAPUA','PAPUA TENGAH','PAPUA PEGUNUNGAN','PAPUA SELATAN','PAPUA BARAT DAYA'];
        $data = $simplexml->addChild('data');
        $data->addAttribute('type','list');
        foreach($propinsiArray as $propinsi){
            $paslon_data = rand_partai();
            $item = $data->addChild('item');
            $item->addAttribute('type','dict');
            $item->addChild("nama_provinsi",$propinsi)->addAttribute('type','string');
            $item->addChild("partai01_persen",$paslon_data[0])->addAttribute('type','float');
            $item->addChild("partai02_persen",$paslon_data[1])->addAttribute('type','float');
            $item->addChild("partai03_persen",$paslon_data[2])->addAttribute('type','float');
            $item->addChild("partai04_persen",$paslon_data[3])->addAttribute('type','float');
            $item->addChild("partai05_persen",$paslon_data[4])->addAttribute('type','float');
            $item->addChild("partai06_persen",$paslon_data[5])->addAttribute('type','float');
            $item->addChild("partai07_persen",$paslon_data[6])->addAttribute('type','float');
            $item->addChild("partai08_persen",$paslon_data[7])->addAttribute('type','float');
            $item->addChild("partai09_persen",$paslon_data[8])->addAttribute('type','float');
            $item->addChild("partai10_persen",$paslon_data[9])->addAttribute('type','float');
            $item->addChild("partai11_persen",$paslon_data[10])->addAttribute('type','float');
            $item->addChild("partai12_persen",$paslon_data[11])->addAttribute('type','float');
            $item->addChild("partai13_persen",$paslon_data[12])->addAttribute('type','float');
            $item->addChild("partai14_persen",$paslon_data[13])->addAttribute('type','float');
            $item->addChild("partai15_persen",$paslon_data[14])->addAttribute('type','float');
            $item->addChild("partai16_persen",$paslon_data[15])->addAttribute('type','float');
            $item->addChild("partai17_persen",$paslon_data[16])->addAttribute('type','float');
            $item->addChild("partai18_persen",$paslon_data[17])->addAttribute('type','float');
            $item->addChild("partai19_persen",$paslon_data[18])->addAttribute('type','float');
            $item->addChild("partai20_persen",$paslon_data[19])->addAttribute('type','float');
            $item->addChild("partai21_persen",$paslon_data[20])->addAttribute('type','float');
            $item->addChild("partai22_persen",$paslon_data[21])->addAttribute('type','float');
            $item->addChild("partai23_persen",$paslon_data[22])->addAttribute('type','float');
            $item->addChild("partai24_persen",$paslon_data[23])->addAttribute('type','float');
            $item->addChild("totalpartai_persen",rand_float(0,100))->addAttribute('type','float');
        }
        $simplexml->addChild('created_at',date('Y-m-d H:i:s'))->addAttribute('type','str');
        return $simplexml;
    }

    function getPartainaspron(){
        $paslon_data = rand_partai();
        $simplexml= new SimpleXMLElement('<?xml version="1.0"?><root/>');
        $data = $simplexml->addChild('data');
        $data->addAttribute('type','list');
        $item = $data->addChild('item');
        $item->addAttribute('type','dict');
        $item->addChild("partai01_persen",$paslon_data[0])->addAttribute('type','float');
        $item->addChild("partai02_persen",$paslon_data[1])->addAttribute('type','float');
        $item->addChild("partai03_persen",$paslon_data[2])->addAttribute('type','float');
        $item->addChild("partai04_persen",$paslon_data[3])->addAttribute('type','float');
        $item->addChild("partai05_persen",$paslon_data[4])->addAttribute('type','float');
        $item->addChild("partai06_persen",$paslon_data[5])->addAttribute('type','float');
        $item->addChild("partai07_persen",$paslon_data[6])->addAttribute('type','float');
        $item->addChild("partai08_persen",$paslon_data[7])->addAttribute('type','float');
        $item->addChild("partai09_persen",$paslon_data[8])->addAttribute('type','float');
        $item->addChild("partai10_persen",$paslon_data[9])->addAttribute('type','float');
        $item->addChild("partai11_persen",$paslon_data[10])->addAttribute('type','float');
        $item->addChild("partai12_persen",$paslon_data[11])->addAttribute('type','float');
        $item->addChild("partai13_persen",$paslon_data[12])->addAttribute('type','float');
        $item->addChild("partai14_persen",$paslon_data[13])->addAttribute('type','float');
        $item->addChild("partai15_persen",$paslon_data[14])->addAttribute('type','float');
        $item->addChild("partai16_persen",$paslon_data[15])->addAttribute('type','float');
        $item->addChild("partai17_persen",$paslon_data[16])->addAttribute('type','float');
        $item->addChild("partai18_persen",$paslon_data[17])->addAttribute('type','float');
        $item->addChild("partai19_persen",$paslon_data[18])->addAttribute('type','float');
        $item->addChild("partai20_persen",$paslon_data[19])->addAttribute('type','float');
        $item->addChild("partai21_persen",$paslon_data[20])->addAttribute('type','float');
        $item->addChild("partai22_persen",$paslon_data[21])->addAttribute('type','float');
        $item->addChild("partai23_persen",$paslon_data[22])->addAttribute('type','float');
        $item->addChild("partai24_persen",$paslon_data[23])->addAttribute('type','float');
        $item->addChild("totalpartai_persen",rand_float(0,100))->addAttribute('type','float');
        $simplexml->addChild('created_at',date('Y-m-d H:i:s'))->addAttribute('type','str');
        return $simplexml;
    }

   $survey1 = fopen('survey1/partai_nasional.xml', "w");
   fwrite($survey1, getPartainas()->asXML());
   fclose($survey1);
   
   $survey2 = fopen('survey2/partai_nasional.xml', "w");
   fwrite($survey2, getPartainas()->asXML());
   fclose($survey2);
   
   $survey3 = fopen('survey3/partai_nasional.xml', "w");
   fwrite($survey3, getPartainas()->asXML());
   fclose($survey3);
   
   $survey1 = fopen('survey1/pilpres_nasional.xml', "w");
   fwrite($survey1, getPilpresnas()->asXML());
   fclose($survey1);
   
  
   $survey2 = fopen('survey2/pilpres_nasional.xml', "w");
   fwrite($survey2, getPilpresnas()->asXML());
   fclose($survey2);

   $survey3 = fopen('survey3/pilpres_nasional.xml', "w");
   fwrite($survey3, getPilpresnas()->asXML());
   fclose($survey3);

   $survey1 = fopen('survey1/pilpres_nasional_perpropinsi.xml', "w");
   fwrite($survey1, getPilpresProvinsi()->asXML());
   fclose($survey1);
   
  
   $survey2 = fopen('survey2/pilpres_nasional_perpropinsi.xml', "w");
   fwrite($survey2, getPilpresProvinsi()->asXML());
   fclose($survey2);

   $survey3 = fopen('survey3/pilpres_nasional_perpropinsi.xml', "w");
   fwrite($survey3, getPilpresProvinsi()->asXML());
   fclose($survey3);

   $survey1 = fopen('survey1/partai_nasional_perpropinsi.xml', "w");
   fwrite($survey1, getPartainaspron()->asXML());
   fclose($survey1);
   
  
   $survey2 = fopen('survey2/partai_nasional_perpropinsi.xml', "w");
   fwrite($survey2, getPartainaspron()->asXML());
   fclose($survey2);

   $survey3 = fopen('survey3/partai_nasional_perpropinsi.xml', "w");
   fwrite($survey3, getPartainaspron()->asXML());
   fclose($survey3);

   echo "Generate Success";
?>