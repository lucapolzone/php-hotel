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
  <ul>
    <?php foreach($hotels as $hotel): ?>
      <li>
        <?=$hotel["name"] ?>
      </li>
      <li>  
        <?=$hotel["description"] ?>
      </li>
      <li>  
        <?=$hotel["parking"] ?>
      </li>
      <li>  
        <?=$hotel["vote"] ?>
      </li>
      <li>  
        <?=$hotel["distance_to_center"] ?>
      </li>
      <li>
        <br>
      </li>
    <?php endforeach; ?>
  </ul>

</body>
</html>