<?php

  require_once __DIR__ . '/logic/main.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="Luca Polzone" />
  <meta name="description" content="Esercizio - PHP Hotel" />
  <title>Esercizio - PHP Hotel</title>
  <!-- Bootstrap link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

  <div class="col-10 mx-auto mt-5">
    <form method="GET" class="row g-3">
      <div class="col-12">
        <label class="form-label">Parcheggio</label>
        <!-- <input type="text" class="form-control" name="hotel-filter"> -->
        <div class="">  
            <label class="form-check-label" for="parking">Sì</label>
            <input type="radio" name="parking-checkbox" id="parking" class="form-check-input" value="yes">

            <label class="form-check-label" for="parking">No</label>
            <input type="radio" name="parking-checkbox" id="parking" class="form-check-input" value="no" checked>
        </div>  

      </div>

      <div class="col-1">
        <label class="form-label">Voto</label>
        <input type="number" min= "1" max= "5" placeholder="1" class="form-control" name="vote">
      </div>

      <div class="col-12">
        <button type="submit" class="btn btn-success">INVIA</button>
      </div>
    </form>
  </div>


  <div class="col-10 mx-auto mt-5">

    <!-- TABELLA -->
    <table class="table table-bordered table-success">
      <thead>
        <tr class="table-warning">
          <th scope="col">Name</th>
          <th scope="col">Description</th>
          <th scope="col" class="text-center">Parking</th>
          <th scope="col" class="text-center">Vote</th>
          <th scope="col" class="text-center">Distance to center</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($filtered_hotels as $hotel): ?>
          <?php include __DIR__ . '/template/table-row.php'?>
      </tbody>
      <?php endforeach; ?>
    </table>

  </div>




</body>
</html>