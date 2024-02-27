<?php

  require_once __DIR__ . '/../data/data.php';

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