<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Quickcount 2024 Partai</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet"> 
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<style>
 
  body {
    background-image: url(image/bg_partai.png);
    background-size: 100%;
    font-family: 'Poppins', sans-serif;
   position: absolute;
  }
  .paslon {
    float: right;
    padding-top: 250px;
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
    width: 90px;
    height: 60px;
  }


  .img-survey{
    width: 100px;
    height: 60px;
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
    width: 70px;
    padding-top: 10px;
    margin-left: 10px;
    margin-right: 10px;
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
    <span class="sr-only text-white" style="margin-left:5px; font-size:0.8rem; font-family:sans-serif;">Last Update : <span id="timestamp"></span> </span>
  </div>

  
  <div class="button-page">
    <a href="generator.php" class="btn btn-dark rounded-pill" style="margin-left:5px; font-size:0.8rem; font-family:sans-serif;">Generator</a>
  </div>
  <div class="button-page">
    <a href="reset.php" class="btn btn-dark rounded-pill" style="margin-left:5px; font-size:0.8rem; font-family:sans-serif;">Reset</a>
  </div>
  <div class="button-page">
    <a href="zonasi.php" class="btn btn-dark rounded-pill" style="margin-left:5px; font-size:0.8rem; font-family:sans-serif;">Pilpres Zonasi</a>
  </div>
  <div class="button-page">
    <a href="index.php" class="btn btn-dark rounded-pill" style="margin-left:5px; font-size:0.8rem; font-family:sans-serif;">Pilpres Nasional</a>
  </div>

    <span id="version" class="sr-only text-white" style="margin-left:5px; font-size:0.7rem; font-family:sans-serif;">Version :  </span>


  <div class="container-fluid">
  </div>
  <div class="row paslon">
    <div class="col text-center">
      </div>
      <div class="col text-center">
      </div>
        <?php $i=0; ?>
        <?php for($i=0;$i<18;$i++){ ?>
            <img src="image/Partai/<?=($i+1)?>.png" class="img-paslon">
        <?php } ?>
        <div class="col text-center">
        <p>
        <b>Total Data Masuk</b>
        </p>
      </div>
      <div class="col text-center">
    <p>
    <b>Total Partisipasi</b>
    </p> 

    </div>
  </div>

  <div class="row suara-paslon bg-white rounded">
    <div class="col-1 text-center" style="margin-right:75px;">
      <img src="image/charta.png" class="img-survey" >
    </div>
      <?php $i=0; ?>
        <?php for($i=0;$i<18;$i++){ ?>
          <button class="btn btn-dark btn-persen rounded">
          <div class="spinner-border text-light" id="loadingsurvey1partai<?=($i+1)?>" role="status"></div>
      <b id="survey1partai<?=($i+1)?>"></b>
      </button>
        <?php } ?>
        <div class="col text-center">
      <button class="btn btn-dark btn-persen rounded">
           <div class="spinner-border text-light" id="loadingsurvey1datamasuk" role="status"></div>
          <b id="survey1datamasuk"></b>
        </button>
        </div>
        <div class="col text-center">
      <button class="btn btn-dark btn-persen rounded">
           <div class="spinner-border text-light" id="loadingsurvey1partisipasi" role="status"></div>
          <b id="survey1partisipasi"></b>
        </button>
    </div>
  </div>

  <div class="row suara-paslon bg-white rounded">
    <div class="col-1 text-center" style="margin-right:75px;">
      <img src="image/indikator.png" class="img-survey" >
    </div>
      <?php $i=0; ?>
        <?php for($i=0;$i<18;$i++){ ?>
          <button class="btn btn-dark btn-persen rounded">
          <div class="spinner-border text-light" id="loadingsurvey2partai<?=($i+1)?>" role="status"></div>
      <b id="survey2partai<?=($i+1)?>"></b>
      </button>
        <?php } ?>
        <div class="col text-center">
      <button class="btn btn-dark btn-persen rounded">
           <div class="spinner-border text-light" id="loadingsurvey2datamasuk" role="status"></div>
          <b id="survey2datamasuk"></b>
        </button>
        </div>
        <div class="col text-center">
      <button class="btn btn-dark btn-persen rounded">
           <div class="spinner-border text-light" id="loadingsurvey2partisipasi" role="status"></div>
          <b id="survey2partisipasi"></b>
        </button>
    </div>
  </div>

  <div class="row suara-paslon bg-white rounded">
    <div class="col-1 text-center" style="margin-right:75px;">
      <img src="image/v1_20.png" class="img-survey" >
    </div>
      <?php $i=0; ?>
        <?php for($i=0;$i<18;$i++){ ?>
          <button class="btn btn-dark btn-persen rounded">
          <div class="spinner-border text-light" id="loadingsurvey3partai<?=($i+1)?>" role="status"></div>
      <b id="survey3partai<?=($i+1)?>"></b>
      </button>
        <?php } ?>
        <div class="col text-center">
      <button class="btn btn-dark btn-persen rounded">
           <div class="spinner-border text-light" id="loadingsurvey3datamasuk" role="status"></div>
          <b id="survey3datamasuk"></b>
        </button>
        </div>
        <div class="col text-center">
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
  $.ajax({
    url: "survey1/partai_nasional.xml",
    dataType: "xml",
    success: function(xml) {
      $('#loadingsurvey1partisipasi').hide();
      $('#loadingsurvey1datamasuk').hide();

      for(i=0;i<18;i++){
        $('#loadingsurvey1partai'+(i+1)).hide();
      }

      for(i=0;i<18;i++){
        $('#loadingsurvey1partai'+(i+1)).hide();
        if(i != 17){
          document.getElementById("survey1partai"+(i+1)).innerText = $(xml).find('partai'+(i+1)).text()+" %";
        } else {
          document.getElementById("survey1partai"+(i+1)).innerText = $(xml).find('partai24').text()+" %";
        }
      }
      document.getElementById("survey1datamasuk").innerText = $(xml).find('datamasuk').text()+" %";
      document.getElementById("survey1partisipasi").innerText = $(xml).find('tingkatpartisipasi').text()+" %";
    }
});
}

function loadSurvey2(){
  // $('#loadingsurvey2paslon1').show();
  // $('#loadingsurvey2paslon2').show();
  // $('#loadingsurvey2paslon3').show();
  // $('#loadingsurvey2total').show();
  $.ajax({
    url: "survey2/partai_nasional.xml",
    dataType: "xml",
    success: function(xml) {
      $('#loadingsurvey2partisipasi').hide();
      $('#loadingsurvey2datamasuk').hide();

      for(i=0;i<18;i++){
        $('#loadingsurvey2partai'+(i+1)).hide();
      }

      for(i=0;i<18;i++){
        $('#loadingsurvey2partai'+(i+1)).hide();
        if(i != 17){
          document.getElementById("survey2partai"+(i+1)).innerText = $(xml).find('partai'+(i+1)).text()+" %";
        } else {
          document.getElementById("survey2partai"+(i+1)).innerText = $(xml).find('partai24').text()+" %";
        }
      }
      document.getElementById("survey2datamasuk").innerText = $(xml).find('datamasuk').text()+" %";
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
    url: "survey3/partai_nasional.xml",
    dataType: "xml",
    success: function(xml) {
      $('#loadingsurvey3partisipasi').hide();
      $('#loadingsurvey3datamasuk').hide();

      for(i=0;i<18;i++){
        $('#loadingsurvey3partai'+(i+1)).hide();
      }

      for(i=0;i<18;i++){
        $('#loadingsurvey3partai'+(i+1)).hide();
        if(i != 17){
          document.getElementById("survey3partai"+(i+1)).innerText = $(xml).find('partai'+(i+1)).text()+" %";
        } else {
          document.getElementById("survey3partai"+(i+1)).innerText = $(xml).find('partai24').text()+" %";
        }
      }
      document.getElementById("survey3datamasuk").innerText = $(xml).find('datamasuk').text()+" %";
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

document.getElementById("version").innerText = "Version: 1.02, Copyright for Broadcast Support Internal Use";
setInterval(() => {
  loadData();
  timestamp();
}, 1000);

</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>