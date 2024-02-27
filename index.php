<?php

  require_once "./main.php";

  $form_sent = !empty($_GET);

  // $filtered_hotels = [];
  $filtered_hotels = ($form_sent) ? [] : $hotels; 


  if($form_sent) {
    
    //salvo in una variabile il fatto che checkbox sia selezionato
    $parking_checkbox_selected = ($_GET['parking-checkbox']== 'yes') ? true : false;
  
    //salvo in una variabile il numero del voto selezionato
    $vote = (int) $_GET['vote'];
    // echo ($vote);

    foreach($hotels as $hotel) {
      if($parking_checkbox_selected){
        if($hotel['parking'] == $parking_checkbox_selected && $hotel['vote'] >= $vote) {
          $filtered_hotels[] = $hotel;
        }
      } else { //else perché se è falsa, cioè non checkato il parcheggio
        if($hotel['vote'] >= $vote) {
          $filtered_hotels[] = $hotel;
        }
      }
    }



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