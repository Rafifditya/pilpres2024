<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Quickcount 2024 Zonasi</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet"> 
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<style>
 
  body {
    background-image: url(image/bg_zonasi.png);
    background-size: 100%;
    font-optical-sizing: auto;
    font-family: 'Poppins', sans-serif;
    font-style: bold;
   position: absolute;
  }
  .paslon {
    width: 100%;
    padding-top: 20px;
  }

  .suara-paslon {
    float: right;
    width: 98%;
    padding-top: 5px;
    padding-bottom: 5px;
    margin: 10px;
    background-color: #1b2d65;
  }

  .img-paslon{
    width: 110px;
    height: 50px;
    margin-bottom: 15px;
    margin-right: 0px;
  }


  .img-survey{
    width: 70;
    height: 40px;
  }

  .total-suara {
    padding-top: 112px;
  }


  b {
    font-size: 0.9rem;
  }
  
  .update-stats{
    float: right;
    padding-top: 2px;
    padding-left: 10px;
    padding-right: 10px;
    padding-bottom: 2px;
    margin-top: 5px;
    margin-right: 10px;
    margin-left: 10px;
  }

  .button-page{
    float: right;
    padding-top: 2px;
    padding-left: 10px;
    padding-bottom: 2px;
    margin-left: 5px;
  }


  .btn-persen {
    padding-top: 10px;
    padding-bottom: 10px;
  }

  .text-persen-paslon{
    font-size: 0.9rem;
  }

  .persen{
    margin-bottom: 20px;
    margin-right: 5px;
  }

  .nama-paslon{
    
  }

  p {
    color:white;
    margin-left: 0px;
  }
  
</style>
<body>
<main>
  <div class="update-stats bg-dark rounded-pill">
  <div class="spinner-border spinner-border-sm text-success"  role="status">
</div>
<div class="spinner-grow spinner-grow-sm text-success" role="status">
</div>
    <span class="sr-only text-white" style="margin-left:5px; font-size:0.8rem; font-family:sans-serif;">Last Update : <span id="timestamp"></span> </span>
  </div>

  
  <div class="button-page">
    <a href="index.php" class="btn btn-dark rounded-pill" style="margin-left:5px; font-size:0.8rem; font-family:sans-serif;">Page Nasional</a>
  </div>
  <div class="button-page">
    <a href="partai.php" class="btn btn-dark rounded-pill" style="margin-left:5px; font-size:0.8rem; font-family:sans-serif;">Page Partai Zonasi</a>
  </div>
  
    <span id="version" class="sr-only text-white button-page" style="margin-left:5px; margin-top:10px; font-size:0.7rem; font-family:sans-serif;">Version :  </span>

  <div class="container-fluid">
  <div class="row paslon">
  <div class="col text-center">
    </div>
    <div class="col-2 text-center">
    </div>
    <div class="col text-center" style="padding-left:40px;">
    <p>SUMBAGUT</p>
    </div>
    <div class="col text-center">
      <p>SUMBAGSEL</p>
    </div>
    <div class="col text-center">
      <p>BANTEN</p>
    </div>
    <div class="col text-center">
      <p>DKI JAKARTA</p>
    </div>
    <div class="col text-center">
      <p>JABAR</p>
    </div>
    <div class="col text-center">
      <p>JATENG & DIY</p>
    </div>
    <div class="col text-center">
      <p>JATIM</p>
    </div>
    <div class="col text-center">
      <p>BALI NTT & NTB</p>
    </div>
    <div class="col text-center">
      <p>KALIMANTAN</p>
    </div>
    <div class="col text-center">
      <p>SULAWESI</p>
    </div>
    <div class="col text-center">
      <p>MALUKU & PAPUA</p>
    </div>
  </div>

<div class="row suara-paslon">
  <div class="col text-center suara-persen align-self-center">
    <img src="image/charta.png" class="img-survey">
    </div> 
    <div class="col-2 text-center nama-paslon">
       <div class="row">
        <p>
          <b >
            Anies Baswedan
            <br>
            Muhaimin Iskandar
          </b>
        </p>
       </div>
       <div class="row">
          <p>
            <b >
              Prabowo Subianto
              <br>
              Gibran Rakabuming
            </b>
          </p>
       </div>
       <div class="row">
          <p>
            <b>
              Ganjar Pranowo
              <br>
              Mahfud MD
            </b>
          </p>
       </div>
       <div class="row">
          <p>
            <b >
              Total
              <br>
              Data Masuk
            </b>
          </p>
       </div>
       <div class="row">
          <p>
            <b >
              Total
              <br>
              Partisipasi
            </b>
          </p>
       </div>
    </div>

    <?php $i=0; ?>
    <?php for($i=0;$i<11;$i++){?>
  <div class="col text-center">
    <div class="row persen">
    <button class="btn btn-dark btn-persen rounded">
    <div class="spinner-border text-light" id="loadinguvery1paslon1zona<?=($i+1)?>" role="status"></div>
      <b class="text-persen-paslon" id="suvery1paslon1zona<?=($i+1)?>"></b>
      </button>
    </div>
    <div class="row persen">
    <button class="btn btn-dark btn-persen rounded">
    <div class="spinner-border text-light" id="loadinguvery1paslon2zona<?=($i+1)?>" role="status"></div>
      <b class="text-persen-paslon" id="suvery1paslon2zona<?=($i+1)?>"></b>
      </button>
    </div>
    <div class="row persen">
    <button class="btn btn-dark btn-persen rounded">
    <div class="spinner-border text-light" id="loadinguvery1paslon3zona<?=($i+1)?>" role="status"></div>
      <b class="text-persen-paslon" id="suvery1paslon3zona<?=($i+1)?>"></b>
      </button>
    </div>
    <div class="row persen">
    <button class="btn btn-dark btn-persen rounded">
    <div class="spinner-border text-light" id="loadinguvery1totalzona<?=($i+1)?>" role="status"></div>
      <b class="text-persen-paslon" id="suvery1totalzona<?=($i+1)?>"></b>
      </button>
    </div>
    <div class="row persen">
    <button class="btn btn-dark btn-persen rounded">
    <div class="spinner-border text-light" id="loadinguvery1partisipasizona<?=($i+1)?>" role="status"></div>
      <b class="text-persen-paslon" id="suvery1partisipasizona<?=($i+1)?>"></b>
      </button>
    </div>
  </div>
  <?php } ?>
  </div>


  <div class="row suara-paslon">
  <div class="col text-center suara-persen align-self-center">
    <img src="image/indikator.png" class="img-survey">
    </div> 
    <div class="col-2 text-center nama-paslon">
       <div class="row">
        <p>
          <b >
            Anies Baswedan
            <br>
            Muhaimin Iskandar
          </b>
        </p>
       </div>
       <div class="row">
          <p>
            <b >
              Prabowo Subianto
              <br>
              Gibran Rakabuming
            </b>
          </p>
       </div>
       <div class="row">
          <p>
            <b>
              Ganjar Pranowo
              <br>
              Mahfud MD
            </b>
          </p>
       </div>
       <div class="row">
          <p>
            <b >
              Total
              <br>
              Data Masuk
            </b>
          </p>
       </div>
       <div class="row">
          <p>
            <b >
              Total
              <br>
              Partisipasi
            </b>
          </p>
       </div>
    </div>
    
    <?php $i=0; ?>
    <?php for($i=0;$i<11;$i++){?>
  <div class="col text-center">
    <div class="row persen">
    <button class="btn btn-dark btn-persen rounded">
    <div class="spinner-border text-light" id="loadinguvery2paslon1zona<?=($i+1)?>" role="status"></div>
      <b class="text-persen-paslon" id="suvery2paslon1zona<?=($i+1)?>"></b>
      </button>
    </div>
    <div class="row persen">
    <button class="btn btn-dark btn-persen rounded">
    <div class="spinner-border text-light" id="loadinguvery2paslon2zona<?=($i+1)?>" role="status"></div>
      <b class="text-persen-paslon" id="suvery2paslon2zona<?=($i+1)?>"></b>
      </button>
    </div>
    <div class="row persen">
    <button class="btn btn-dark btn-persen rounded">
    <div class="spinner-border text-light" id="loadinguvery2paslon3zona<?=($i+1)?>" role="status"></div>
      <b class="text-persen-paslon" id="suvery2paslon3zona<?=($i+1)?>"></b>
      </button>
    </div>
    <div class="row persen">
    <button class="btn btn-dark btn-persen rounded">
    <div class="spinner-border text-light" id="loadinguvery2totalzona<?=($i+1)?>" role="status"></div>
      <b class="text-persen-paslon" id="suvery2totalzona<?=($i+1)?>"></b>
      </button>
    </div>
    <div class="row persen">
    <button class="btn btn-dark btn-persen rounded">
    <div class="spinner-border text-light" id="loadinguvery2partisipasizona<?=($i+1)?>" role="status"></div>
      <b class="text-persen-paslon" id="suvery2partisipasizona<?=($i+1)?>"></b>
      </button>
    </div>
  </div>
  <?php } ?>
  </div>

  <div class="row paslon">
  <div class="col text-center">
    </div>
    <div class="col-2 text-center">
    </div>
    <div class="col text-center" style="padding-left:40px;">
    <p>SUMBAGUT</p>
    </div>
    <div class="col text-center">
      <p>SUMBAGSEL</p>
    </div>
    <div class="col text-center">
      <p>BANTEN</p>
    </div>
    <div class="col text-center">
      <p>DKI JAKARTA</p>
    </div>
    <div class="col text-center">
      <p>JABAR</p>
    </div>
    <div class="col text-center">
      <p>JATENG & DIY</p>
    </div>
    <div class="col text-center">
      <p>JATIM</p>
    </div>
    <div class="col text-center">
      <p>BALI NTT & NTB</p>
    </div>
    <div class="col text-center">
      <p>KALIMANTAN</p>
    </div>
    <div class="col text-center">
      <p>SULAWESI</p>
    </div>
    <div class="col text-center">
      <p>MALUKU & PAPUA</p>
    </div>
  </div>


  <div class="row suara-paslon">
  <div class="col text-center suara-persen align-self-center">
    <img src="image/v1_20.png" class="img-survey">
    </div> 
    <div class="col-2 text-center nama-paslon">
       <div class="row">
        <p>
          <b >
            Anies Baswedan
            <br>
            Muhaimin Iskandar
          </b>
        </p>
       </div>
       <div class="row">
          <p>
            <b >
              Prabowo Subianto
              <br>
              Gibran Rakabuming
            </b>
          </p>
       </div>
       <div class="row">
          <p>
            <b>
              Ganjar Pranowo
              <br>
              Mahfud MD
            </b>
          </p>
       </div>
       <div class="row">
          <p>
            <b >
              Total
              <br>
              Data Masuk
            </b>
          </p>
       </div>
       <div class="row">
          <p>
            <b >
              Total
              <br>
              Partisipasi
            </b>
          </p>
       </div>
    </div>
    
    <?php $i=0; ?>
    <?php for($i=0;$i<11;$i++){?>
  <div class="col text-center">
    <div class="row persen">
    <button class="btn btn-dark btn-persen rounded">
    <div class="spinner-border text-light" id="loadinguvery3paslon1zona<?=($i+1)?>" role="status"></div>
      <b class="text-persen-paslon" id="suvery3paslon1zona<?=($i+1)?>"></b>
      </button>
    </div>
    <div class="row persen">
    <button class="btn btn-dark btn-persen rounded">
    <div class="spinner-border text-light" id="loadinguvery3paslon2zona<?=($i+1)?>" role="status"></div>
      <b class="text-persen-paslon" id="suvery3paslon2zona<?=($i+1)?>"></b>
      </button>
    </div>
    <div class="row persen">
    <button class="btn btn-dark btn-persen rounded">
    <div class="spinner-border text-light" id="loadinguvery3paslon3zona<?=($i+1)?>" role="status"></div>
      <b class="text-persen-paslon" id="suvery3paslon3zona<?=($i+1)?>"></b>
      </button>
    </div>
    <div class="row persen">
    <button class="btn btn-dark btn-persen rounded">
    <div class="spinner-border text-light" id="loadinguvery3totalzona<?=($i+1)?>" role="status"></div>
      <b class="text-persen-paslon" id="suvery3totalzona<?=($i+1)?>"></b>
      </button>
    </div>
    <div class="row persen">
    <button class="btn btn-dark btn-persen rounded">
    <div class="spinner-border text-light" id="loadinguvery3partisipasizona<?=($i+1)?>" role="status"></div>
      <b class="text-persen-paslon" id="suvery3partisipasizona<?=($i+1)?>"></b>
      </button>
    </div>
  </div>
  <?php } ?>
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
    url: "survey1/pilpres_nasional_perzonasi.xml",
    dataType: "xml",
    success: function(xml) {
      
      for(i=0;i<11;i++){
      $('#loadinguvery1paslon1zona'+(i+1)).hide();
      $('#loadinguvery1paslon2zona'+(i+1)).hide();
      $('#loadinguvery1paslon3zona'+(i+1)).hide();
      $('#loadinguvery1totalzona'+(i+1)).hide();
      $('#loadinguvery1partisipasizona'+(i+1)).hide();
  }

      let data = xml.getElementsByTagName('data')[0];
      let size =data.childElementCount;

      for(i=0;i<size;i++){
        document.getElementById("suvery1paslon1zona"+(i+1)).innerText = data.childNodes[i].childNodes[1].textContent+"%";
        document.getElementById("suvery1paslon2zona"+(i+1)).innerText = data.childNodes[i].childNodes[2].textContent+"%";
        document.getElementById("suvery1paslon3zona"+(i+1)).innerText = data.childNodes[i].childNodes[3].textContent+"%";
        document.getElementById("suvery1totalzona"+(i+1)).innerText = data.childNodes[i].childNodes[4].textContent+"%";
        document.getElementById("suvery1partisipasizona"+(i+1)).innerText = data.childNodes[i].childNodes[5].textContent+"%";
      }

    }
});
}

function loadSurvey2(){

  $.ajax({
    url: "survey2/pilpres_nasional_perzonasi.xml",
    dataType: "xml",
    success: function(xml) {

      for(i=0;i<11;i++){
      $('#loadinguvery2paslon1zona'+(i+1)).hide();
      $('#loadinguvery2paslon2zona'+(i+1)).hide();
      $('#loadinguvery2paslon3zona'+(i+1)).hide();
      $('#loadinguvery2totalzona'+(i+1)).hide();
      $('#loadinguvery2partisipasizona'+(i+1)).hide();
  }

      let data = xml.getElementsByTagName('data')[0];
      let size =data.childElementCount;
      for(i=0;i<size;i++){
        document.getElementById("suvery2paslon1zona"+(i+1)).innerText = data.childNodes[i].childNodes[1].textContent+"%";
        document.getElementById("suvery2paslon2zona"+(i+1)).innerText = data.childNodes[i].childNodes[2].textContent+"%";
        document.getElementById("suvery2paslon3zona"+(i+1)).innerText = data.childNodes[i].childNodes[3].textContent+"%";
        document.getElementById("suvery2totalzona"+(i+1)).innerText = data.childNodes[i].childNodes[4].textContent+"%";
        document.getElementById("suvery2partisipasizona"+(i+1)).innerText = data.childNodes[i].childNodes[5].textContent+"%";
      }

    }
});
}

function loadSurvey3(){
  
  $.ajax({
    url: "survey3/pilpres_nasional_perzonasi.xml",
    dataType: "xml",
    success: function(xml) {

      for(i=0;i<11;i++){
      $('#loadinguvery3paslon1zona'+(i+1)).hide();
      $('#loadinguvery3paslon2zona'+(i+1)).hide();
      $('#loadinguvery3paslon3zona'+(i+1)).hide();
      $('#loadinguvery3totalzona'+(i+1)).hide();
      $('#loadinguvery3partisipasizona'+(i+1)).hide();
  }
     
  let data = xml.getElementsByTagName('data')[0];
      let size =data.childElementCount;
      for(i=0;i<size;i++){
        document.getElementById("suvery3paslon1zona"+(i+1)).innerText = data.childNodes[i].childNodes[1].textContent+"%";
        document.getElementById("suvery3paslon2zona"+(i+1)).innerText = data.childNodes[i].childNodes[2].textContent+"%";
        document.getElementById("suvery3paslon3zona"+(i+1)).innerText = data.childNodes[i].childNodes[3].textContent+"%";
        document.getElementById("suvery3totalzona"+(i+1)).innerText = data.childNodes[i].childNodes[4].textContent+"%";
        document.getElementById("suvery3partisipasizona"+(i+1)).innerText = data.childNodes[i].childNodes[5].textContent+"%";
      }

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

document.getElementById("version").innerText = "Version: 1.02,  Copyright For Broadcast Support Internal Use";
setInterval(() => {
  loadData();
  timestamp();
}, 1000);
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>