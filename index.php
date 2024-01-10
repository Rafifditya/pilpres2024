<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Quickcount 2024</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet"> 
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<style>
  body {
    background-image: url(image/bg-qc.png);
    background-size: 100%;
    font-family: 'Poppins', sans-serif;
  }
  .paslon {
    float: right;
    padding-top: 180px;
  }

  .suara-paslon {
    float: right;
    width: 98%;
    padding-top: 5px;
    padding-bottom: 5px;
    margin: 10px;
  }

  .img-paslon{
    width: 70%;
    height: 55%;
  }


  .img-survey{
    width: 100px;
    height: 60px;
    margin-left: 100px;
  }

  .total-suara {
    padding-top: 170px;
    padding-right: 40px;
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

  .btn-persen {
    width: 150px;
    padding-top: 10px;
    padding-bottom: 10px;
  }

  p {
    color:white
  }
  
</style>
<body>
<main>
  <div class="container-fluid">
  <div class="row paslon">
    <div class="col text-center">
      <img src="image/anies.png" class="img-paslon">
      <br>
      <br>
      <p><b>Annies Baswedan
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
      <p><b>Total Suara </b></p>
    </div>
  </div>

  <div class="row suara-paslon bg-white rounded-pill">
      <?php $xml=simplexml_load_file("survey1/pilpres_nasional.xml") or die("Error: Cannot create object"); ?>
  <div class="col text-center suara-persen">
    <img src="image/charta.png" class="img-survey">
    </div> 
  <div class="col text-center persen" style="padding-left:85px;">
    <button class="btn btn-dark btn-persen rounded-pill">
      <b><?php echo $xml->data->item->paslon1_persen ?>%</b>
      </button>
    </div>
    <div class="col text-center persen rounded-pill">
      <button class="btn btn-dark btn-persen rounded-pill">
        <b><?php echo $xml->data->item->paslon2_persen ?>%</b>
      </button>
    </div>
    <div class="col text-center persen rounded-pills">
    <button class="btn btn-dark btn-persen rounded-pill">
        <b><?php echo $xml->data->item->paslon3_persen ?>%</b>
      </button>
    </div>
    <div class="col text-center persen">
    <button class="btn btn-dark btn-persen rounded-pill">
        <b><?php echo $xml->data->item->totalpaslon_persen ?>%</b>
      </button>
    </div>
  </div>

  <div class="row suara-paslon bg-white rounded-pill">
      <?php $xml=simplexml_load_file("survey2/pilpres_nasional.xml") or die("Error: Cannot create object"); ?>
  <div class="col text-center suara-persen">
    <img src="image/indikator.png" class="img-survey">
    </div> 
  <div class="col text-center persen" style="padding-left:85px;">
    <button class="btn btn-dark btn-persen rounded-pill">
      <b><?php echo $xml->data->item->paslon1_persen ?>%</b>
      </button>
    </div>
    <div class="col text-center persen">
      <button class="btn btn-dark btn-persen rounded-pill">
       <b> <?php echo $xml->data->item->paslon2_persen ?>%</b>
      </button>
    </div>
    <div class="col text-center persen">
    <button class="btn btn-dark btn-persen rounded-pill">
       <b> <?php echo $xml->data->item->paslon3_persen ?>%</b>
      </button>
    </div>
    <div class="col text-center persen">
    <button class="btn btn-dark btn-persen rounded-pill">
        <b><?php echo $xml->data->item->totalpaslon_persen ?>%</b>
      </button>
    </div>
  </div>

  <div class="row suara-paslon bg-white rounded-pill">
      <?php $xml=simplexml_load_file("survey3/pilpres_nasional.xml") or die("Error: Cannot create object"); ?>
  <div class="col text-center suara-persen">
    <img src="image/v1_20.png" class="img-survey">
    </div> 
  <div class="col text-center persen" style="padding-left:85px;">
    <button class="btn btn-dark btn-persen rounded-pill">
      <b><?php echo $xml->data->item->paslon1_persen ?>%</b>
      </button>
    </div>
    <div class="col text-center persen">
      <button class="btn btn-dark btn-persen rounded-pill">
        <b><?php echo $xml->data->item->paslon2_persen ?>%</b>
      </button>
    </div>
    <div class="col text-center persen">
    <button class="btn btn-dark btn-persen rounded-pill">
        <b><?php echo $xml->data->item->paslon3_persen ?>%</b>
      </button>
    </div>
    <div class="col text-center persen">
    <button class="btn btn-dark btn-persen rounded-pill">
       <b> <?php echo $xml->data->item->totalpaslon_persen ?>%</b>
      </button>
    </div>
  </div>

  </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script>
  var scale = 'scale(1)';
document.body.style.webkitTransform =  scale;    // Chrome, Opera, Safari
 document.body.style.msTransform =   scale;       // IE 9
 document.body.style.transform = scale;     // General
</script>
</body>
</html>