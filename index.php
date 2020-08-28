<?php
include __DIR__ . '/database.php';
require_once(__DIR__ . '/Stanze.php');

// Array delle stanze == $rooms
// var_dump($rooms);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Stanze del hotel:</h2>
    <?php foreach ($rooms as $room) { ?>
      <ul>
        <?php $one_room = new Stanze($room['id'], $room['floor'], $room['room_number'], $room['beds']) ?>
        <li>Id stanza: <?php echo $one_room->getRoomId(); ?> </li>
        <li>Piano: <?php echo $one_room->getRoomFloor(); ?> </li>
        <li>Nomero Stanza: <?php echo $one_room->getRoomNumber(); ?> </li>
        <li>Letti: <?php echo $one_room->getRoomBeds(); ?> </li>
      </ul>
    <?php } ?>
  </body>
</html>
