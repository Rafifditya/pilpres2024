<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Quickcount 2024 Nasional</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet"> 
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->

</head>
<style>
 
  body {
    background-image: url(image/Pilkada_BG.jpeg);
    background-size: 100%;
    font-family: 'Poppins', sans-serif;
   position: absolute;
  }
  .paslon {
    float: right;
    padding-top: 180px;
    width: 98%;
    margin-left: 10px;
    margin-right: 10px;

  }

  table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 8px;
}

th {
  background-color: #161579;
  color: white;
}

  .button-page{
    float: right;
    padding-top: 2px;
    padding-left: 10px;
    padding-bottom: 2px;
    margin-left: 5px;
  }

  .suara-paslon {
    float: right;
    width: 98%;
    padding-top: 5px;
    padding-bottom: 5px;
    margin: 10px;
  }

  .img-paslon{
    width: 55%;
    height: 45%;
  }


  .img-survey{
    width: 150px;
    height: 80px;
    margin-left: 80px;
  }

  .total-suara {
    padding-top: 112px;
  }

  .suara-persen{
    padding-top: 10px;
    padding-bottom: 10px;
  }

  .persen {
    padding-top: 20px;
  }

  b {
    font-size: 1.1rem;
  }
  
  
  .update-stats{
    float: right;
    padding: 5px;
    margin-top: 5px;
    margin-right: 10px;
    margin-left: 10px;
    font-size: 0.8rem;

    background: #2b23d1;
    color: white;
    border: 1px solid;
    border-collapse: collapse;
    border-radius: 20px;
  }

  .button-page{
    float: right;
    padding-top: 2px;
    padding-left: 10px;
    padding-bottom: 2px;
    margin-left: 5px;
  }


  .btn-persen {
    width: 175px;
    padding-top: 10px;
    padding-bottom: 10px;
  }

  p {
    color:white
  }
  
</style>
<body>
<main>
  <div class="update-stats bg-dark rounded-pill">
  <div class="spinner-grow spinner-grow-sm text-success" role="status"></div>
    <span class="sr-only text-white" style="margin-left:5px; font-size:1.1rem; font-family:sans-serif;">Dummy LIVE Update : <span id="timestamp"></span> </span>
  </div>
  
  <div class="button-page">
    <a href="generator.php" class="btn btn-dark rounded-pill" style="margin-left:5px; font-size:1rem; font-family:sans-serif;">Generator</a>
  </div>
  <div class="button-page">
    <a href="reset.php" class="btn btn-dark rounded-pill" style="margin-left:5px; font-size:1rem; font-family:sans-serif;">Reset</a>
  </div>



  <div class="container-fluid">
  <img src="image/Pilkada_Logo.png" class="img-survey"/>
      <div class="row suara-paslon rounded">
        <table class="table table-responsive text-center">
          <thead>
            <tr >
              <th>
                SUMATERA <br> UTARA
              </th>
              <th>
              1 <br> Bobby Nasution - Surya
              </th>
              <th>
              2 <br> Edy Rahmayadi - Hasan Basri Sagala
              </t>
              <th>
                TOTAL DATA MASUK
              </t>
              <th>
                TINGKAT PARTISIPASI
              </t>
            </tr>
          </thead>
          <tbody>
            <tr >
            <td style="background-color: #5c55f1; color: white;">
              INDIKATOR
            </td>
            <td style="background-color: #5c55f1; color: white;">00,00%</td>
            <td style="background-color: #5c55f1; color: white;">00,00%</td>
            <td style="background-color: #5c55f1; color: white;">00,00%</td>
            <td style="background-color: #5c55f1; color: white;">00,00%</td>
          
            </tr>
            <tr>
            <td style="background-color: #c73332; color: white;">
              POLTRACKING
            </td>
            <td style="background-color: #c73332; color: white;">00,00%</td>
            <td style="background-color: #c73332; color: white;">00,00%</td>
            <td style="background-color: #c73332; color: white;">00,00%</td>
            <td style="background-color: #c73332; color: white;">00,00%</td>
            </tr>
            
          </tbody>
        </table>
      </div>

      <div class="row suara-paslon rounded">
        <table class="table table-primary table-responsive text-center">
          <thead>
            <tr >
              <td>
                BANTEN
              </td>
              <td>
              1<br>Airin Rachmi Diany - Ade Sumardi
              </td>
              <td>
              2<br>Andra Soni - Dimyati Natakusumah
              </td>
              <td>
                TOTAL DATA MASUK
              </td>
              <td>
                TINGKAT PARTISIPASI
              </td>
              <td>
              </td>
              <td>
              </td>
            </tr>
          </thead>
          <tbody>
            <tr >
            <td style="background-color: #5c55f1; color: white;">
              INDIKATOR
            </td>
            <td style="background-color: #5c55f1; color: white;">00,00%</td>
            <td style="background-color: #5c55f1; color: white;">00,00%</td>
            <td style="background-color: #5c55f1; color: white;">00,00%</td>
            <td style="background-color: #5c55f1; color: white;">00,00%</td>
            <td style="background-color: #5c55f1; color: white;"></td>
            <td style="background-color: #5c55f1; color: white;"></td>
          
            </tr>
            <tr>
            <td style="background-color: #c73332; color: white;">
              POLTRACKING
            </td>
            <td style="background-color: #c73332; color: white;">00,00%</td>
            <td style="background-color: #c73332; color: white;">00,00%</td>
            <td style="background-color: #c73332; color: white;">00,00%</td>
            <td style="background-color: #c73332; color: white;">00,00%</td>
            <td style="background-color: #c73332; color: white;"></td>
            <td style="background-color: #c73332; color: white;"></td>
            </tr>
            
          </tbody>
        </table>
      </div>

      <div class="row suara-paslon rounded">
        <table class="text-bg-primary table table-responsive text-center">
          <thead>
            <tr >
              <td>
                DKI JAKARTA
              </td>
              <td>
              1<br>Ridwan Kamil - Suswono
              </td>
              <td>
              2<br>Dharma Pongrekun - Kun Wardana
              </td>
              <td>
              3<br>Pramono Anung - Rano Karno
              </td>
              <td>
                TOTAL DATA MASUK
              </td>
              <td>
                TINGKAT PARTISIPASI
              </td>
            </tr>
          </thead>
          <tbody>
            <tr >
            <td style="background-color: #5c55f1; color: white;">
              INDIKATOR
            </td>
            <td style="background-color: #5c55f1; color: white;">00,00%</td>
            <td style="background-color: #5c55f1; color: white;">00,00%</td>
            <td style="background-color: #5c55f1; color: white;">00,00%</td>
            <td style="background-color: #5c55f1; color: white;">00,00%</td>
            <td style="background-color: #5c55f1; color: white;">00,00%</td>
          
            </tr>
            <tr>
            <td style="background-color: #c73332; color: white;">
              POLTRACKING
            </td>
            <td style="background-color: #c73332; color: white;">00,00%</td>
            <td style="background-color: #c73332; color: white;">00,00%</td>
            <td style="background-color: #c73332; color: white;">00,00%</td>
            <td style="background-color: #c73332; color: white;">00,00%</td>
            <td style="background-color: #c73332; color: white;">00,00%</td>
            </tr>
            
          </tbody>
        </table>
      </div>

      <div class="row suara-paslon rounded">
        <table class="table primary table-responsive text-center">
          <thead>
            <tr >
              <td>
                JAWA <br> BARAT
              </td>
              <td>
              1<br>Acep Adang Ruhiat - Gitalis Dwi Natarina
              </td>
              <td>
              2<br>Jeje Wiradinata - Ronal Supraja
              </td>
              <td>
              3<br>Ahmad Syaikhu - Ilham Habibie
              </td>
              <td>
              4<br>Dedi Mulyadi - Erwan Setiawan
              </td>
              <td>
                TOTAL DATA MASUK
              </td>
              <td>
                TINGKAT PARTISIPASI
              </td>
            </tr>
          </thead>
          <tbody>
            <tr >
            <td style="background-color: #5c55f1; color: white;">
              INDIKATOR
            </td>
            <td style="background-color: #5c55f1; color: white;">00,00%</td>
            <td style="background-color: #5c55f1; color: white;">00,00%</td>
            <td style="background-color: #5c55f1; color: white;">00,00%</td>
            <td style="background-color: #5c55f1; color: white;">00,00%</td>
            <td style="background-color: #5c55f1; color: white;">00,00%</td>
            <td style="background-color: #5c55f1; color: white;">00,00%</td>
            </tr>
            <tr>
            <td style="background-color: #c73332; color: white;">
              POLTRACKING
            </td>
            <td style="background-color: #c73332; color: white;">00,00%</td>
            <td style="background-color: #c73332; color: white;">00,00%</td>
            <td style="background-color: #c73332; color: white;">00,00%</td>
            <td style="background-color: #c73332; color: white;">00,00%</td>
            <td style="background-color: #c73332; color: white;">00,00%</td>
            <td style="background-color: #c73332; color: white;">00,00%</td>
            </tr>
            
          </tbody>
        </table>
      </div>

      <div class="row suara-paslon rounded">
        <table class="table table-dark table-responsive text-center">
          <thead>
            <tr >
              <td>
                JAWA <br> TENGAH
              </td>
              <td>
              1<br>Andika Perkasa - Hendrar Prihadi
              </td>
              <td>
              2<br>Ahmad Luthfi - Taj Yasin Maimoen
              </td>
              <td>
                TOTAL DATA MASUK
              </td>
              <td>
                TINGKAT PARTISIPASI
              </td>
              <td>
              </td>
              <td>
              </td>
            </tr>
          </thead>
          <tbody>
            <tr >
            <td style="background-color: #5c55f1; color: white;">
              INDIKATOR
            </td>
            <td style="background-color: #5c55f1; color: white;">00,00%</td>
            <td style="background-color: #5c55f1; color: white;">00,00%</td>
            <td style="background-color: #5c55f1; color: white;">00,00%</td>
            <td style="background-color: #5c55f1; color: white;">00,00%</td>
            <td style="background-color: #5c55f1; color: white;"></td>
            <td style="background-color: #5c55f1; color: white;"></td>
          
            </tr>
            <tr>
            <td style="background-color: #c73332; color: white;">
              POLTRACKING
            </td>
            <td style="background-color: #c73332; color: white;">00,00%</td>
            <td style="background-color: #c73332; color: white;">00,00%</td>
            <td style="background-color: #c73332; color: white;">00,00%</td>
            <td style="background-color: #c73332; color: white;">00,00%</td>
            <td style="background-color: #c73332; color: white;"></td>
            <td style="background-color: #c73332; color: white;"></td>
            </tr>
            
          </tbody>
        </table>
      </div>

      <div class="row suara-paslon rounded">
        <table class="table table-dark table-responsive text-center">
          <thead>
            <tr >
              <td>
                JAWA <br> TIMUR
              </td>
              <td>
              1 <br> Luluk Nur Hamidah - Lukmanul Khakim
              </td>
              <td>
              2 <br> Khoffifah Indar Parawansa - Emil Dardak
              </td>
              <td>
              3 <br> Tri Rismaharini - Zharul Azhar Asumta
              </td>
              <td>
                TOTAL DATA MASUK
              </td>
              <td>
                TINGKAT PARTISIPASI
              </td>
            </tr>
          </thead>
          <tbody>
            <tr >
            <td style="background-color: #5c55f1; color: white;">
              INDIKATOR
            </td>
            <td style="background-color: #5c55f1; color: white;">00,00%</td>
            <td style="background-color: #5c55f1; color: white;">00,00%</td>
            <td style="background-color: #5c55f1; color: white;">00,00%</td>
            <td style="background-color: #5c55f1; color: white;">00,00%</td>
            <td style="background-color: #5c55f1; color: white;">00,00%</td>
          
            </tr>
            <tr>
            <td style="background-color: #c73332; color: white;">
              POLTRACKING
            </td>
            <td style="background-color: #c73332; color: white;">00,00%</td>
            <td style="background-color: #c73332; color: white;">00,00%</td>
            <td style="background-color: #c73332; color: white;">00,00%</td>
            <td style="background-color: #c73332; color: white;">00,00%</td>
            <td style="background-color: #c73332; color: white;">00,00%</td>
            </tr>
            
          </tbody>
        </table>

        </div>
      </div>
</main>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
  $.ajaxSetup({ cache: false });
function loadSurvey1(){
  // $('#loadingsurvey1paslon1').show();
  // $('#loadingsurvey1paslon2').show();
  // $('#loadingsurvey1paslon3').show();
  // $('#loadingsurvey1total').show();
  $.ajax({
    url: "survey1/pilkada_nasional.xml",
    dataType: "xml",
    success: function(xml) {
      $('#loadingsurvey1paslon1').hide();
      $('#loadingsurvey1paslon2').hide();
      $('#loadingsurvey1paslon3').hide();
      $('#loadingsurvey1total').hide();
      $('#loadingsurvey1partisipasi').hide();
      document.getElementById("survey1paslon1").innerText = $(xml).find('provinsi1_paslon1').text()+" %";
      document.getElementById("survey1paslon2").innerText = $(xml).find('provinsi1_paslon2').text()+" %";
      document.getElementById("survey1total").innerText = $(xml).find('datamasuk_provinsi1').text()+" %";
      document.getElementById("survey1partisipasi").innerText = $(xml).find('tingkatpartisipasi_provinsi1').text()+" %";
    }
});
}

function loadSurvey2(){
  // $('#loadingsurvey2paslon1').show();
  // $('#loadingsurvey2paslon2').show();
  // $('#loadingsurvey2paslon3').show();
  // $('#loadingsurvey2total').show();
  $.ajax({
    url: "survey2/pilpres_nasional.xml",
    dataType: "xml",
    success: function(xml) {
      $('#loadingsurvey2paslon1').hide();
      $('#loadingsurvey2paslon2').hide();
      $('#loadingsurvey2paslon3').hide();
      $('#loadingsurvey2total').hide();
      $('#loadingsurvey2partisipasi').hide();
      document.getElementById("survey2paslon1").innerText = $(xml).find('paslon1').text()+" %";
      document.getElementById("survey2paslon2").innerText = $(xml).find('paslon2').text()+" %";
      document.getElementById("survey2paslon3").innerText = $(xml).find('paslon3').text()+" %";
      document.getElementById("survey2total").innerText = $(xml).find('datamasuk').text()+" %";
      document.getElementById("survey2partisipasi").innerText = $(xml).find('tingkatpartisipasi').text()+" %";
    }
});
}

function loadSurvey3(){
  // $('#loadingsurvey3paslon1').show();
  // $('#loadingsurvey3paslon2').show();
  // $('#loadingsurvey3paslon3').show();
  // $('#loadingsurvey3total').show();
  $.ajax({
    url: "survey3/pilpres_nasional.xml",
    dataType: "xml",
    success: function(xml) {
      $('#loadingsurvey3paslon1').hide();
      $('#loadingsurvey3paslon2').hide();
      $('#loadingsurvey3paslon3').hide();
      $('#loadingsurvey3total').hide();
      $('#loadingsurvey3partisipasi').hide();
      document.getElementById("survey3paslon1").innerText = $(xml).find('paslon1').text()+" %";
      document.getElementById("survey3paslon2").innerText = $(xml).find('paslon2').text()+" %";
      document.getElementById("survey3paslon3").innerText = $(xml).find('paslon3').text()+" %";
      document.getElementById("survey3total").innerText = $(xml).find('datamasuk').text()+" %";
      document.getElementById("survey3partisipasi").innerText = $(xml).find('tingkatpartisipasi').text()+" %";
    }
});
}

function loadData(){
  loadSurvey1();
  loadSurvey2();
  loadSurvey3();
}

function timestamp(){
  document.getElementById("timestamp").innerText = new Date(Date.now());
}

setInterval(() => {
  loadData();
  timestamp();
}, 1000);

</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>