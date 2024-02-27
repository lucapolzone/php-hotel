<?php


  require_once "./main.php";

  $form_sent = !empty($_GET);

  $filtered_hotels = [];

  if($form_sent) {
    
    //salvo in una variabile il fatto che checkbox sia selezionato
    $parking_checkbox_selected = ($_GET['parking-checkbox'] == 'yes') ? true : false;
  
    //salvo in una variabile il numero del voto selezionato
    $vote = (int)$_GET['vote'];
    // echo ($vote);
  }






  





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
    <form action="./main.php" method="GET" class="row g-3">
      <div class="col-12">
        <label class="form-label">Parcheggio</label>
        <!-- <input type="text" class="form-control" name="hotel-filter"> -->
        <div class="d-flex">  
          <div class="form-check me-3">
            <label class="form-check-label" for="flexRadioDefault1">Sì</label>
            <input class="form-check-input" type="radio" value="yes" name="flexRadioDefault" id="flexRadioDefault1" name="parking-checkbox">
          </div>

          <div class="form-check">
            <label class="form-check-label" for="flexRadioDefault2">No</label>
            <input class="form-check-input" type="radio" value="no" name="flexRadioDefault" id="flexRadioDefault2" name="parking-checkbox" checked>
          </div>
        </div>  

      </div>

      <div class="col-1">
        <label class="form-label">Voto</label>
        <input type="number" min= "1" max= "5" class="form-control" name="vote">
      </div>

      <div class="col-12">
        <button type="submit" class="btn btn-success">INVIA</button>
      </div>
    </form>
  </div>


  <div class="col-10 mx-auto mt-5">
    <table class="table table-bordered table-success">
      <tbody>
        <tr class="table-warning">
          <th scope="row">Name</th>
          <?php foreach($hotels as $hotel): ?>
            <td>
              <?= $hotel["name"] ?>
            </td>
          <?php endforeach; ?>
        </tr>

        <tr>
          <th scope="row">Description</th>
            <?php foreach($hotels as $hotel): ?>
              <td>
                <?= $hotel["description"] ?>
              </td>
            <?php endforeach; ?>
        </tr>

        <tr class="table-warning">
          <th scope="row">Parking</th>
            <?php foreach($hotels as $hotel): ?>
              <td>
                <?= $hotel["parking"] ? 'Sì' : 'No' ?>
              </td>
            <?php endforeach; ?>
        </tr>

        <tr>
          <th scope="row">Vote</th>
            <?php foreach($hotels as $hotel): ?>
              <td>
                <?= $hotel["vote"] ?>
              </td>
            <?php endforeach; ?>
        </tr>

        <tr class="table-warning">
          <th scope="row">Distance to center</th>
            <?php foreach($hotels as $hotel): ?>
              <td>
                <?= $hotel["distance_to_center"] ?>
              </td>
            <?php endforeach; ?>
        </tr>

      </tbody>
    </table>
  </div>




</body>
</html>