<?php
include __DIR__ . '/database.php';
require_once(__DIR__ . '/Stanza.php');

// Array delle stanze == $rooms
// var_dump($rooms);
echo "<h1>Stanze Hotel</h1>";
echo '<h2>metodo di return array</h2>';
foreach ($rooms as $room) {
  $singola_stanza = new Stanza($room['id'], $room['floor'], $room['room_number'], $room['beds']);
  $test = $singola_stanza->getStanzaData();
  echo '<ul>';
  echo '<li> ID: ' . $test['id'] . '</li>';
  echo '<li> FLOOR: ' . $test['floor'] . '</li>';
  echo '<li> ROOM NUMBER: ' . $test['roomNumber'] . '</li>';
  echo '<li> BEDS: ' . $test['beds'] . '</li>';
  echo '</ul>';
}


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Metodo "standard" con il get:</h2>
    <!-- Stampa le info dal database VERO -->
    <?php foreach ($stanzeHotel as $room) { ?>
      <ul>
        <?php $one_room = new Stanza($room['id'], $room['floor'], $room['room_number'], $room['beds']) ?>
        <?php $one_room->type = $room['type'] ?>
        

        <li>Id stanza: <?php echo $one_room->getRoomId(); ?> </li>
        <li>Piano: <?php echo $one_room->getRoomFloor(); ?> </li>
        <li>Nomero Stanza: <?php echo $one_room->getRoomNumber(); ?> </li>
        <li>Letti: <?php echo $one_room->getRoomBeds(); ?> </li>
        <li>Tipo: <?php echo $one_room->getRoomType(); ?> </li>
      </ul>
    <?php } ?>
  </body>
</html>
