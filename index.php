<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quickcount 2024</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
<main>
  <h1 class="visually-hidden">Features examples</h1>

  <div class="container px-4 py-5">
    <h2 class="pb-2 border-bottom">Quickcount 2024</h2>

    <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
      <div class="col d-flex flex-column align-items-start gap-2">
        <h2 class="fw-bold text-body-emphasis">Charta Politika</h2>
        <p class="text-body-secondary">Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
      </div>
        <?php $xml=simplexml_load_file("survey1/pilpres_nasional.xml") or die("Error: Cannot create object"); ?>
      <div class="col">
        <div class="row row-cols-1 row-cols-sm-2 g-4">
          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                <a href="#" class="btn btn-lg text-white"><?php echo $xml->data->item->paslon1_persen ?>%</a>
            </div>
            <h4 class="fw-semibold mb-0 text-body-emphasis">1. Anies Baswedan - Muhaimin Iskandar</h4>
            <p class="text-body-secondary">Paragraph of text beneath the heading to explain the heading.</p>
          </div>

          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                <a href="#" class="btn btn-lg text-white"><?php echo $xml->data->item->paslon2_persen ?>%</a>
            </div>
            <h4 class="fw-semibold mb-0 text-body-emphasis">2. Prabowo Subianto - Gibran Rakabuming</h4>
            <p class="text-body-secondary">Paragraph of text beneath the heading to explain the heading.</p>
          </div>

          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
              <a href="#" class="btn btn-lg text-white"><?php echo $xml->data->item->paslon3_persen ?>%</a>
            </div>
            <h4 class="fw-semibold mb-0 text-body-emphasis">3. Ganjar Pranowo - Mahfud MD</h4>
            <p class="text-body-secondary">Paragraph of text beneath the heading to explain the heading.</p>
          </div>

          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
              <a href="#" class="btn btn-lg text-white"><?php echo $xml->data->item->totalpaslon_persen ?>%</a>
            </div>
            <h4 class="fw-semibold mb-0 text-body-emphasis">Total Suara Masuk</h4>
            <p class="text-body-secondary">Paragraph of text beneath the heading to explain the heading.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
      <div class="col d-flex flex-column align-items-start gap-2">
        <h2 class="fw-bold text-body-emphasis">INDIKATOR</h2>
        <p class="text-body-secondary">Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
      </div>
        <?php $xml=simplexml_load_file("survey2/pilpres_nasional.xml") or die("Error: Cannot create object"); ?>
      <div class="col">
        <div class="row row-cols-1 row-cols-sm-2 g-4">
          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                <a href="#" class="btn btn-lg text-white"><?php echo $xml->data->item->paslon1_persen ?>%</a>
            </div>
            <h4 class="fw-semibold mb-0 text-body-emphasis">1. Anies Baswedan - Muhaimin Iskandar</h4>
            <p class="text-body-secondary">Paragraph of text beneath the heading to explain the heading.</p>
          </div>

          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                <a href="#" class="btn btn-lg text-white"><?php echo $xml->data->item->paslon2_persen ?>%</a>
            </div>
            <h4 class="fw-semibold mb-0 text-body-emphasis">2. Prabowo Subianto - Gibran Rakabuming</h4>
            <p class="text-body-secondary">Paragraph of text beneath the heading to explain the heading.</p>
          </div>

          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
              <a href="#" class="btn btn-lg text-white"><?php echo $xml->data->item->paslon3_persen ?>%</a>
            </div>
            <h4 class="fw-semibold mb-0 text-body-emphasis">3. Ganjar Pranowo - Mahfud MD</h4>
            <p class="text-body-secondary">Paragraph of text beneath the heading to explain the heading.</p>
          </div>

          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
              <a href="#" class="btn btn-lg text-white"><?php echo $xml->data->item->totalpaslon_persen ?>%</a>
            </div>
            <h4 class="fw-semibold mb-0 text-body-emphasis">Total Suara Masuk</h4>
            <p class="text-body-secondary">Paragraph of text beneath the heading to explain the heading.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
      <div class="col d-flex flex-column align-items-start gap-2">
        <h2 class="fw-bold text-body-emphasis">SMRC</h2>
        <p class="text-body-secondary">Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
      </div>
        <?php $xml=simplexml_load_file("survey3/pilpres_nasional.xml") or die("Error: Cannot create object"); ?>
      <div class="col">
        <div class="row row-cols-1 row-cols-sm-2 g-4">
          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                <a href="#" class="btn btn-lg text-white"><?php echo $xml->data->item->paslon1_persen ?>%</a>
            </div>
            <h4 class="fw-semibold mb-0 text-body-emphasis">1. Anies Baswedan - Muhaimin Iskandar</h4>
            <p class="text-body-secondary">Paragraph of text beneath the heading to explain the heading.</p>
          </div>

          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                <a href="#" class="btn btn-lg text-white"><?php echo $xml->data->item->paslon2_persen ?>%</a>
            </div>
            <h4 class="fw-semibold mb-0 text-body-emphasis">2. Prabowo Subianto - Gibran Rakabuming</h4>
            <p class="text-body-secondary">Paragraph of text beneath the heading to explain the heading.</p>
          </div>

          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
              <a href="#" class="btn btn-lg text-white"><?php echo $xml->data->item->paslon3_persen ?>%</a>
            </div>
            <h4 class="fw-semibold mb-0 text-body-emphasis">3. Ganjar Pranowo - Mahfud MD</h4>
            <p class="text-body-secondary">Paragraph of text beneath the heading to explain the heading.</p>
          </div>

          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
              <a href="#" class="btn btn-lg text-white"><?php echo $xml->data->item->totalpaslon_persen ?>%</a>
            </div>
            <h4 class="fw-semibold mb-0 text-body-emphasis">Total Suara Masuk</h4>
            <p class="text-body-secondary">Paragraph of text beneath the heading to explain the heading.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>