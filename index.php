<?php
  require_once "./main.php";
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
        <input type="text" class="form-control" name="hotel-filter">
      </div>

      <!-- <div class="col-12">
        <label class="form-label">Voto</label>
        <input type="text" class="form-control" name="">
      </div> -->

      <div class="col-12">
        <button type="submit" class="btn btn-primary">INVIA</button>
      </div>
    </form>
  </div>


  <div class="col-10 mx-auto mt-5">
    <table class="table table-bordered">
      <tbody>
        <tr>
          <th scope="row">Name</th>
          <?php foreach($hotels as $hotel): ?>
            <td>
              <?=$hotel["name"] ?>
            </td>
          <?php endforeach; ?>
        </tr>

        <tr>
          <th scope="row">Description</th>
            <?php foreach($hotels as $hotel): ?>
              <td>
                <?=$hotel["description"] ?>
              </td>
            <?php endforeach; ?>
        </tr>

        <tr>
          <th scope="row">Parking</th>
            <?php foreach($filtered_hotels as $hotel): ?>
              <td>
                <?=$hotel["parking"] ?>
              </td>
            <?php endforeach; ?>
        </tr>

        <tr>
          <th scope="row">Vote</th>
            <?php foreach($hotels as $hotel): ?>
              <td>
                <?=$hotel["vote"] ?>
              </td>
            <?php endforeach; ?>
        </tr>

        <tr>
          <th scope="row">Distance to center</th>
            <?php foreach($hotels as $hotel): ?>
              <td>
                <?=$hotel["distance_to_center"] ?>
              </td>
            <?php endforeach; ?>
        </tr>

      </tbody>
    </table>
  </div>

</body>
</html>