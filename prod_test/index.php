<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Quickcount 2024 Nasional</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet"> 
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<style>
 
  body {
    background-image: url(image/bg_nas_new.png);
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
    width: 100px;
    height: 60px;
    margin-left: 100px;
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
  <div class="spinner-border spinner-border-sm text-success"  role="status">
</div>
<div class="spinner-grow spinner-grow-sm text-success" role="status">
</div>
    <span class="sr-only text-white" style="margin-left:5px; font-size:0.8rem; font-family:sans-serif;">TEST LIVE Update : <span id="timestamp"></span> </span>
  </div>

  
  <div class="button-page">
    <a href="zonasi.php" class="btn btn-dark rounded-pill" style="margin-left:5px; font-size:0.8rem; font-family:sans-serif;">Pilpres Zonasi</a>
  </div>
  <div class="button-page">
    <a href="partai.php" class="btn btn-dark rounded-pill" style="margin-left:5px; font-size:0.8rem; font-family:sans-serif;">Partai Nasional</a>
  </div>

    <span id="version" class="sr-only text-white" style="margin-left:5px; font-size:0.7rem; font-family:sans-serif;">Version :  </span>


  <div class="container-fluid">
  <div class="row paslon">
  <div class="col text-center">
    </div>
    <div class="col text-center" style="padding-left: 85px;">
      <img src="image/anies.png" class="img-paslon">
      <br>
      <br>
      <p><b>Anies Baswedan
      <br>
      Muhaimin Iskandar</b>
    </p>
    </div>
    <div class="col text-center">
      <img src="image/prabowo.png" class="img-paslon">
      <br>
      <br>
      <p><b>Prabowo Subianto
      <br>
      Gibran Rakabuming</b>
    </p>
    </div>
    <div class="col text-center">
      <img src="image/ganjar.png" class="img-paslon">
      <br>
      <br>
      <p><b>Ganjar Pranowo
      <br>
      Mahfud MD</b>
    </p>
    </div>
    <div class="col text-center total-suara">
      <p><b>Total Data <br> Masuk</b></p>
    </div>
    <div class="col text-center total-suara">
      <p><b>Tingkat <br> Partisipasi</b></p>
    </div>
  </div>

  <div class="row suara-paslon bg-white rounded">
  <div class="col text-center suara-persen">
    <img src="image/charta.png" class="img-survey">
    </div> 
  <div class="col text-center persen" style="padding-left:80px;">
    <button class="btn btn-dark btn-persen rounded">
    <div class="spinner-border text-light" id="loadingsurvey1paslon1" role="status"></div>
      <b id="survey1paslon1"></b>
      </button>
    </div>
    <div class="col text-center persen">
      <button class="btn btn-dark btn-persen rounded">
        <div class="spinner-border text-light" id="loadingsurvey1paslon2" role="status"></div>

        <b id="survey1paslon2"></b>
      </button>
    </div>
    <div class="col text-center persen">
    <button class="btn btn-dark btn-persen rounded">
      <div class="spinner-border text-light" id="loadingsurvey1paslon3" role="status"></div>

        <b id="survey1paslon3"></b>
      </button>
    </div>
    <div class="col text-center persen">
    <button class="btn btn-dark btn-persen rounded">
      <div class="spinner-border text-light" id="loadingsurvey1total" role="status"></div>
        <b id="survey1total"></b>
      </button>
    </div>
    <div class="col text-center persen">
    <button class="btn btn-dark btn-persen rounded">
      <div class="spinner-border text-light" id="loadingsurvey1partisipasi" role="status"></div>
        <b id="survey1partisipasi"></b>
      </button>
    </div>
  </div>

  <div class="row suara-paslon bg-white rounded">
  <div class="col text-center suara-persen">
    <img src="image/indikator.png" class="img-survey">
    </div> 
  <div class="col text-center persen" style="padding-left:80px;">
    <button class="btn btn-dark btn-persen rounded">
    <div class="spinner-border text-light" id="loadingsurvey2paslon1" role="status"></div>
      <b id="survey2paslon1"></b>
      </button>
    </div>
    <div class="col text-center persen">
      <button class="btn btn-dark btn-persen rounded">
    <div class="spinner-border text-light" id="loadingsurvey2paslon2" role="status"></div>
        <b id="survey2paslon2"></b>
      </button>
    </div>
    <div class="col text-center persen">
    <button class="btn btn-dark btn-persen rounded">
    <div class="spinner-border text-light" id="loadingsurvey2paslon3" role="status"></div>
    <b id="survey2paslon3"></b>
      </button>
    </div>
    <div class="col text-center persen">
    <button class="btn btn-dark btn-persen rounded">
    <div class="spinner-border text-light" id="loadingsurvey2total" role="status"></div>
        <b id="survey2total"></b>
      </button>
    </div>
    <div class="col text-center persen">
    <button class="btn btn-dark btn-persen rounded">
      <div class="spinner-border text-light" id="loadingsurvey2partisipasi" role="status"></div>
        <b id="survey2partisipasi"></b>
      </button>
    </div>
  </div>

  <div class="row suara-paslon bg-white rounded">
  <div class="col text-center suara-persen">
    <img src="image/v1_20.png" class="img-survey">
    </div> 
  <div class="col text-center persen" style="padding-left:80px;">
    <button class="btn btn-dark btn-persen rounded">
    <div class="spinner-border text-light" id="loadingsurvey3paslon1" role="status"></div>
      <b id="survey3paslon1"></b>
      </button>
    </div>
    <div class="col text-center persen">
      <button class="btn btn-dark btn-persen rounded">
    <div class="spinner-border text-light" id="loadingsurvey3paslon2" role="status"></div>

      <b id="survey3paslon2"></b>
      </button>
    </div>
    <div class="col text-center persen">
    <button class="btn btn-dark btn-persen rounded">
    <div class="spinner-border text-light" id="loadingsurvey3paslon3" role="status"></div>

        <b id="survey3paslon3"></b>
      </button>
    </div>
    <div class="col text-center persen">
    <button class="btn btn-dark btn-persen rounded">
    <div class="spinner-border text-light" id="loadingsurvey3total" role="status"></div>

        <b id="survey3total"></b>
      </button>
    </div>
    <div class="col text-center persen">
    <button class="btn btn-dark btn-persen rounded">
      <div class="spinner-border text-light" id="loadingsurvey3partisipasi" role="status"></div>
        <b id="survey3partisipasi"></b>
      </button>
    </div>
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
    url: "survey1/pilpres_nasional.php",
    dataType:"json",
    success: function(response) {
      $('#loadingsurvey1paslon1').hide();
      $('#loadingsurvey1paslon2').hide();
      $('#loadingsurvey1paslon3').hide();
      $('#loadingsurvey1total').hide();
      $('#loadingsurvey1partisipasi').hide();
      document.getElementById("survey1paslon1").innerText = response.data.paslon1[0]+" %";
      document.getElementById("survey1paslon2").innerText = response.data.paslon2[0]+" %";
      document.getElementById("survey1paslon3").innerText = response.data.paslon3[0]+" %";
      document.getElementById("survey1total").innerText = response.data.datamasuk[0]+" %";
      document.getElementById("survey1partisipasi").innerText = response.data.tingkatpartisipasi[0]+" %";
      loadSurvey1();
    },error:function(xhr,error){
      console.log("CHARTA :"+error);
      loadSurvey1();
    },timeout:6000
});
}

function loadSurvey2(){
  // $('#loadingsurvey2paslon1').show();
  // $('#loadingsurvey2paslon2').show();
  // $('#loadingsurvey2paslon3').show();
  // $('#loadingsurvey2total').show();
  $.ajax({
    url: "survey2/pilpres_nasional.php",
    dataType:'json',
    success: function(response) {
      $('#loadingsurvey2paslon1').hide();
      $('#loadingsurvey2paslon2').hide();
      $('#loadingsurvey2paslon3').hide();
      $('#loadingsurvey2total').hide();
      $('#loadingsurvey2partisipasi').hide();
      document.getElementById("survey2paslon1").innerText = response.data.paslon1[0]+" %";
      document.getElementById("survey2paslon2").innerText = response.data.paslon2[0]+" %";
      document.getElementById("survey2paslon3").innerText = response.data.paslon3[0]+" %";
      document.getElementById("survey2total").innerText = response.data.datamasuk[0]+" %";
      document.getElementById("survey2partisipasi").innerText = response.data.tingkatpartisipasi[0]+" %";
      loadSurvey2();
    },error:function(xhr,error){
      console.log("INDIKATOR :"+error);
      loadSurvey2();
    },timeout:5000
});
}

function loadSurvey3(){
  // $('#loadingsurvey3paslon1').show();
  // $('#loadingsurvey3paslon2').show();
  // $('#loadingsurvey3paslon3').show();
  // $('#loadingsurvey3total').show();
  $.ajax({
    url: "survey3/pilpres_nasional.php",
    dataType: "json",
    success: function(response) {
      $('#loadingsurvey3paslon1').hide();
      $('#loadingsurvey3paslon2').hide();
      $('#loadingsurvey3paslon3').hide();
      $('#loadingsurvey3total').hide();
      $('#loadingsurvey3partisipasi').hide();
      document.getElementById("survey3paslon1").innerText = response.data.paslon1[0]+" %";
      document.getElementById("survey3paslon2").innerText = response.data.paslon2[0]+" %";
      document.getElementById("survey3paslon3").innerText = response.data.paslon3[0]+" %";
      document.getElementById("survey3total").innerText = response.data.datamasuk[0]+" %";
      document.getElementById("survey3partisipasi").innerText = response.data.tingkatpartisipasi[0]+" %";
      loadSurvey3();
    },error:function(xhr, error){
      console.log("SMRC :"+error);
      loadSurvey3();
    },timeout:5000
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

document.getElementById("version").innerText = "Version: 1.03, Copyright For Broadcast Support Internal Use";
setInterval(() => {
  timestamp();
}, 1000);
loadData();
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>