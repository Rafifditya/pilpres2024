<?php 
    function rand_float($st_num=0,$end_num=1,$mul=100){
        if ($st_num>$end_num){
            return false;
        }
        return mt_rand($st_num*$mul,$end_num*$mul)/$mul;
    }


   function rand_paslon(){
    $sisa = 100;
    $paslon1 = rand_float(10,$sisa-40);
    $sisa  = $sisa - $paslon1;
    $paslon2 = rand_float(10,$sisa);
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

   function rand_paslon_v2($total_paslon){
    $max = 100;
    $mean = $max/$total_paslon;
    for($i=0;$i<$total_paslon;$i++){
        $total = rand_float(10,$max-$mean);
        $paslon[] = $total;
        $sisa = $max - $total;
        if($i == $total_paslon){
            $paslon[] = $sisa;
        }
    }
    return $paslon;
   }

   function rand_partai(){
    $array = array();
    $sisa = 100;
    $i = 0;
    $radomwin = random_int(1,15);
    while($i < 18){
        if ($i == 17){
            $array[] = $sisa;
        } else {
            if ($i == $radomwin){
                $result = rand_float(10,11.6);
                $array[] = $result;
                $sisa = $sisa - $result;
            } else {
                $result = rand_float(4.6,6);
                $array[] = $result;
                $sisa = $sisa - $result;
            }
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
    $item->addChild("paslon1",$paslon_data['PASLON1'])->addAttribute('type','float');
    $item->addChild("paslon2",$paslon_data['PASLON2'])->addAttribute('type','float');
    $item->addChild("paslon3",$paslon_data['PASLON3'])->addAttribute('type','float');
    $item->addChild("datamasuk",rand_float(40,100))->addAttribute('type','float');
    $item->addChild("tingkatpartisipasi",rand_float(40,100))->addAttribute('type','float');
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
            $item->addChild("namaprovinsi",$propinsi)->addAttribute('type','string');
            $item->addChild("paslon1",$paslon_data['PASLON1'])->addAttribute('type','float');
            $item->addChild("paslon2",$paslon_data['PASLON2'])->addAttribute('type','float');
            $item->addChild("paslon3",$paslon_data['PASLON3'])->addAttribute('type','float');
            $item->addChild("datamasuk",rand_float(0,100))->addAttribute('type','float');
            $item->addChild("tingkatpartisipasi",rand_float(40,100))->addAttribute('type','float');
        }
        $simplexml->addChild('created_at',date('Y-m-d H:i:s'))->addAttribute('type','str');
        return $simplexml;
    }

    function getPartainaspron(){
        $simplexml= new SimpleXMLElement('<?xml version="1.0"?><root/>');
        $propinsiArray = ['NANGGROE ACEH DARUSSALAM', 'SUMATERA UTARA', 'SUMATERA SELATAN', 'SUMATERA BARAT', 'BENGKULU', 'RIAU', 'KEPULAUAN RIAU','JAMBI', 'LAMPUNG', 'BANGKA BELITUNG', 'KALIMANTAN BARAT','KALIMANTAN TIMUR', 'KALIMANTAN SELATAN', 'KALIMANTAN TENGAH', 'KALIMANTAN UTARA', 'BANTEN', 'DKI JAKARTA', 'JAWA BARAT', 'JAWA TENGAH', 'DAERAH ISTIMEWA YOGYAKARTA', 'JAWA TIMUR', 'BALI', 'NUSA TENGGARA TIMUR', 'NUSA TENGGARA BARAT', 'GORONTALO', 'SULAWESI BARAT','SULAWESI TENGAH','SULAWESI UTARA','SULAWESI TENGGARA','SULAWESI SELATAN', 'MALUKU UTARA', 'MALUKU','PAPUA BARAT','PAPUA','PAPUA TENGAH','PAPUA PEGUNUNGAN','PAPUA SELATAN','PAPUA BARAT DAYA'];
        $data = $simplexml->addChild('data');
        $data->addAttribute('type','list');
        foreach($propinsiArray as $propinsi){
            $paslon_data = rand_partai();
            $item = $data->addChild('item');
            $item->addAttribute('type','dict');
            $item->addChild("namaprovinsi",$propinsi)->addAttribute('type','string');
            $item->addChild("partai1",$paslon_data[0])->addAttribute('type','float');
            $item->addChild("partai2",$paslon_data[1])->addAttribute('type','float');
            $item->addChild("partai3",$paslon_data[2])->addAttribute('type','float');
            $item->addChild("partai4",$paslon_data[3])->addAttribute('type','float');
            $item->addChild("partai5",$paslon_data[4])->addAttribute('type','float');
            $item->addChild("partai6",$paslon_data[5])->addAttribute('type','float');
            $item->addChild("partai7",$paslon_data[6])->addAttribute('type','float');
            $item->addChild("partai8",$paslon_data[7])->addAttribute('type','float');
            $item->addChild("partai9",$paslon_data[8])->addAttribute('type','float');
            $item->addChild("partai10",$paslon_data[9])->addAttribute('type','float');
            $item->addChild("partai11",$paslon_data[10])->addAttribute('type','float');
            $item->addChild("partai12",$paslon_data[11])->addAttribute('type','float');
            $item->addChild("partai13",$paslon_data[12])->addAttribute('type','float');
            $item->addChild("partai14",$paslon_data[13])->addAttribute('type','float');
            $item->addChild("partai15",$paslon_data[14])->addAttribute('type','float');
            $item->addChild("partai16",$paslon_data[15])->addAttribute('type','float');
            $item->addChild("partai17",$paslon_data[16])->addAttribute('type','float');
            $item->addChild("partai24",$paslon_data[17])->addAttribute('type','float');
            $item->addChild("datamasuk",rand_float(0,100))->addAttribute('type','float');
            $item->addChild("tingkatpartisipasi",rand_float(40,100))->addAttribute('type','float');
        }
        $simplexml->addChild('created_at',date('Y-m-d H:i:s'))->addAttribute('type','str');
        return $simplexml;
    }

    function getPartainaszon(){
        $propinsiArray = ['ZONA 1','ZONA 2','ZONA 3','ZONA 4','ZONA 5','ZONA 6','ZONA 7','ZONA 8','ZONA 9','ZONA 10','ZONA 11'];
        $simplexml= new SimpleXMLElement('<?xml version="1.0"?><root/>');
        $data = $simplexml->addChild('data');
        $data->addAttribute('type','list');
        foreach($propinsiArray as $propinsi){
            $paslon_data = rand_partai();
            $item = $data->addChild('item');
            $item->addAttribute('type','dict');
            $item->addChild("namazonasi",$propinsi)->addAttribute('type','string');
            $item->addChild("partai1",$paslon_data[0])->addAttribute('type','float');
            $item->addChild("partai2",$paslon_data[1])->addAttribute('type','float');
            $item->addChild("partai3",$paslon_data[2])->addAttribute('type','float');
            $item->addChild("partai4",$paslon_data[3])->addAttribute('type','float');
            $item->addChild("partai5",$paslon_data[4])->addAttribute('type','float');
            $item->addChild("partai6",$paslon_data[5])->addAttribute('type','float');
            $item->addChild("partai7",$paslon_data[6])->addAttribute('type','float');
            $item->addChild("partai8",$paslon_data[7])->addAttribute('type','float');
            $item->addChild("partai9",$paslon_data[8])->addAttribute('type','float');
            $item->addChild("partai10",$paslon_data[9])->addAttribute('type','float');
            $item->addChild("partai11",$paslon_data[10])->addAttribute('type','float');
            $item->addChild("partai12",$paslon_data[11])->addAttribute('type','float');
            $item->addChild("partai13",$paslon_data[12])->addAttribute('type','float');
            $item->addChild("partai14",$paslon_data[13])->addAttribute('type','float');
            $item->addChild("partai15",$paslon_data[14])->addAttribute('type','float');
            $item->addChild("partai16",$paslon_data[15])->addAttribute('type','float');
            $item->addChild("partai17",$paslon_data[16])->addAttribute('type','float');
            $item->addChild("partai24",$paslon_data[17])->addAttribute('type','float');
            $item->addChild("datamasuk",rand_float(0,100))->addAttribute('type','float');
            $item->addChild("tingkatpartisipasi",rand_float(40,100))->addAttribute('type','float');
        }
        $simplexml->addChild('created_at',date('Y-m-d H:i:s'))->addAttribute('type','str');
        return $simplexml;
    }

    function getPilpreszon(){
        $propinsiArray = ['ZONA 1','ZONA 2','ZONA 3','ZONA 4','ZONA 5','ZONA 6','ZONA 7','ZONA 8','ZONA 9','ZONA 10','ZONA 11'];
        $simplexml= new SimpleXMLElement('<?xml version="1.0"?><root/>');
        $data = $simplexml->addChild('data');
        $data->addAttribute('type','list');
        foreach($propinsiArray as $propinsi){
            $paslon_data = rand_paslon();
            $item = $data->addChild('item');
            $item->addAttribute('type','dict');
            $item->addChild("namazonasi",$propinsi)->addAttribute('type','string');
            $item->addChild("paslon1",$paslon_data['PASLON1'])->addAttribute('type','float');
            $item->addChild("paslon2",$paslon_data['PASLON2'])->addAttribute('type','float');
            $item->addChild("paslon3",$paslon_data['PASLON3'])->addAttribute('type','float');
            $item->addChild("datamasuk",rand_float(0,100))->addAttribute('type','float');
            $item->addChild("tingkatpartisipasi",rand_float(40,100))->addAttribute('type','float');
        }
        $simplexml->addChild('created_at',date('Y-m-d H:i:s'))->addAttribute('type','str');
        return $simplexml;
    }

    function getPartainas(){
        $paslon_data = rand_partai();
        $simplexml= new SimpleXMLElement('<?xml version="1.0"?><root/>');
        $data = $simplexml->addChild('data');
        $data->addAttribute('type','list');
        $item = $data->addChild('item');
        $item->addAttribute('type','dict');
        $item->addChild("partai1",$paslon_data[0])->addAttribute('type','float');
        $item->addChild("partai2",$paslon_data[1])->addAttribute('type','float');
        $item->addChild("partai3",$paslon_data[2])->addAttribute('type','float');
        $item->addChild("partai4",$paslon_data[3])->addAttribute('type','float');
        $item->addChild("partai5",$paslon_data[4])->addAttribute('type','float');
        $item->addChild("partai6",$paslon_data[5])->addAttribute('type','float');
        $item->addChild("partai7",$paslon_data[6])->addAttribute('type','float');
        $item->addChild("partai8",$paslon_data[7])->addAttribute('type','float');
        $item->addChild("partai9",$paslon_data[8])->addAttribute('type','float');
        $item->addChild("partai10",$paslon_data[9])->addAttribute('type','float');
        $item->addChild("partai11",$paslon_data[10])->addAttribute('type','float');
        $item->addChild("partai12",$paslon_data[11])->addAttribute('type','float');
        $item->addChild("partai13",$paslon_data[12])->addAttribute('type','float');
        $item->addChild("partai14",$paslon_data[13])->addAttribute('type','float');
        $item->addChild("partai15",$paslon_data[14])->addAttribute('type','float');
        $item->addChild("partai16",$paslon_data[15])->addAttribute('type','float');
        $item->addChild("partai17",$paslon_data[16])->addAttribute('type','float');
        $item->addChild("partai24",$paslon_data[17])->addAttribute('type','float');
        $item->addChild("datamasuk",rand_float(0,100))->addAttribute('type','float');
        $item->addChild("tingkatpartisipasi",rand_float(40,100))->addAttribute('type','float');
        $simplexml->addChild('created_at',date('Y-m-d H:i:s'))->addAttribute('type','str');
        return $simplexml;
    }


    function getPilkanas(){
        $simplexml= new SimpleXMLElement('<?xml version="1.0"?><root/>');
        $propinsiArray = ["SUMATERA UTARA" => 2, "BANTEN" => 2, "DKI JAKARTA"=>3,"JAWA BARAT"=>4,"JAWA TENGAH"=>2,"JAWA TIMUR"=>3];
        $data = $simplexml->addChild('data');
        $data->addAttribute('type','list');
        $indeksprov=1;
        foreach($propinsiArray as $x => $y){
            $paslon_data = rand_partai();
            $item = $data->addChild('item');
            $item->addAttribute('type','dict');
            $item->addChild('nama_provinsi'.$indeksprov,$x)->addAttribute('type','string');
            $paslon_data = rand_paslon_v2($y);
            $i = 1;
            foreach($paslon_data as $row){
                $name = 'provinsi'.$indeksprov.'_paslon'.$i;
                $item->addChild($name,$row)->addAttribute('type','float');
                $i++;
            }
            $item->addChild('datamasuk_provinsi'.$indeksprov,rand_float(40,100))->addAttribute('type','float');
            $item->addChild('tingkatpartisipasi_provinsi'.$indeksprov,rand_float(40,100))->addAttribute('type','float');
            $indeksprov++;
        }
        $simplexml->addChild('created_at',date('Y-m-d H:i:s'))->addAttribute('type','str');
        return $simplexml;
    }

    function getPilkadaPerpropinsi($indexPropinsi, $data_masuk=null){
        $simplexml= new SimpleXMLElement('<?xml version="1.0"?><root/>');
        $propinsiArray = array("SUMATERA UTARA" => 2, "BANTEN" => 2, "DKI JAKARTA"=>3,"JAWA BARAT"=>4,"JAWA TENGAH"=>2,"JAWA TIMUR"=>3);
        $data = $simplexml->addChild('data');
        $data->addAttribute('type','list');
            $paslon_data = rand_partai();
            $item = $data->addChild('item');
            $item->addAttribute('type','dict');
            $item->addChild('nama_provinsi',get_array_indexName($indexPropinsi,$propinsiArray))->addAttribute('type','string');
            $paslon_data = rand_paslon_v2(get_array_value($indexPropinsi,$propinsiArray));
            $i = 1;
            foreach($paslon_data as $row){
                $name = 'paslon'.$i;
                $item->addChild($name,$row)->addAttribute('type','float');
                $i++;
            }
            $item->addChild('datamasuk'.get_array_value($indexPropinsi,$propinsiArray),rand_float(40,100))->addAttribute('type','float');
            $item->addChild('tingkatpartisipasi'.get_array_value($indexPropinsi,$propinsiArray),rand_float(40,100))->addAttribute('type','float');
        $simplexml->addChild('created_at',date('Y-m-d H:i:s'))->addAttribute('type','string');
        return $simplexml;
    }

    function get_array_value($index,$array){
        $i=0;
        foreach ($array as $value) {
            if($i==$index) {
                return $value;
            }
            $i++;
        }
        // may be $index exceedes size of $array. In this case NULL is returned.
        return "";
    }
    
    function get_array_indexName($index,$array){
        $i=0;
        foreach ($array as $x => $y) {
            if($i==$index) {
                return $x;
            }
            $i++;
        }
        // may be $index exceedes size of $array. In this case NULL is returned.
        return "";
    }




   $survey1 = fopen('survey1/pilkada_nasional.xml', "w");
   fwrite($survey1, getPilkanas()->asXML());
   fclose($survey1);

   $survey1 = fopen('survey1/sumut.xml', "w");
   fwrite($survey1, getPilkadaPerpropinsi(0)->asXML());
   fclose($survey1);

   $survey1 = fopen('survey1/banten.xml', "w");
   fwrite($survey1, getPilkadaPerpropinsi(1)->asXML());
   fclose($survey1);

   $survey1 = fopen('survey1/jakarta.xml', "w");
   fwrite($survey1, getPilkadaPerpropinsi(2)->asXML());
   fclose($survey1);

   $survey1 = fopen('survey1/jabar.xml', "w");
   fwrite($survey1, getPilkadaPerpropinsi(3)->asXML());
   fclose($survey1);

   $survey1 = fopen('survey1/jateng.xml', "w");
   fwrite($survey1, getPilkadaPerpropinsi(4)->asXML());
   fclose($survey1);

   $survey1 = fopen('survey1/jatim.xml', "w");
   fwrite($survey1, getPilkadaPerpropinsi(5)->asXML());
   fclose($survey1);

   $survey2 = fopen('survey2/pilkada_nasional.xml', "w");
   fwrite($survey2, getPilkanas()->asXML());
   fclose($survey2);

   $survey2 = fopen('survey2/banten.xml', "w");
   fwrite($survey2, getPilkadaPerpropinsi(1)->asXML());
   fclose($survey2);

   $survey2 = fopen('survey2/jakarta.xml', "w");
   fwrite($survey2, getPilkadaPerpropinsi(2)->asXML());
   fclose($survey2);

   $survey2 = fopen('survey2/jateng.xml', "w");
   fwrite($survey2, getPilkadaPerpropinsi(4)->asXML());
   fclose($survey2);

   $survey2 = fopen('survey2/jatim.xml', "w");
   fwrite($survey2, getPilkadaPerpropinsi(5)->asXML());
   fclose($survey2);

   $survey3 = fopen('survey3/pilkada_nasional.xml', "w");
   fwrite($survey3, getPilkanas()->asXML());
   fclose($survey3);

   $survey3 = fopen('survey3/sumut.xml', "w");
   fwrite($survey3, getPilkadaPerpropinsi(0)->asXML());
   fclose($survey3);

   $survey3 = fopen('survey3/banten.xml', "w");
   fwrite($survey3, getPilkadaPerpropinsi(1)->asXML());
   fclose($survey3);

   $survey3 = fopen('survey3/jakarta.xml', "w");
   fwrite($survey3, getPilkadaPerpropinsi(2)->asXML());
   fclose($survey3);

   $survey3 = fopen('survey3/jabar.xml', "w");
   fwrite($survey3, getPilkadaPerpropinsi(3)->asXML());
   fclose($survey3);

   $survey3 = fopen('survey3/jateng.xml', "w");
   fwrite($survey3, getPilkadaPerpropinsi(4)->asXML());
   fclose($survey3);

   $survey3 = fopen('survey3/jatim.xml', "w");
   fwrite($survey3, getPilkadaPerpropinsi(5)->asXML());
   fclose($survey3);
   
   echo "Generate Success";
?>