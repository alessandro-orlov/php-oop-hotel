<?php

  // // Connessione al databese mySQL
  // $servername = "localhost";
  // $username = "root";
  // $password = "root";
  // $dbname = "boolean-hotel";
  //
  // // Connect
  // $conn = new mysqli($servername, $username, $password, $dbname);
  //
  // // Check connection
  // if ($conn && $conn->connect_error) {
  //   die("Connection failed: " . $conn->connect_error);
  // }
  //
  // $sql = "SELECT * FROM `stanze` ORDER BY `room_number` ASC";
  // $results = $conn->query($sql);
  //
  //   if ($results && $results->num_rows > 0) {
  //
  //     $rooms = [];
  //
  //     // Put single row (that rappresents single room) in array ($rooms)
  //     while($row = $results->fetch_assoc()) {
  //       $rooms[] = $row;
  //     }
  //
  //   } elseif ($results) {
  //
  //     // 0 results
  //     $rooms = [];
  //
  //     } else {
  //         echo "query error";
  //       }
  // $conn->close();

  // Array normale
  $stanzeHotel = [
    [
      'id' => 1,
      'floor' => 1,
      'room_number' => 101,
      'beds' => 1,
      'type' => 'doppia standard'
    ],
    [
      'id' => 2,
      'floor' => 1,
      'room_number' => 102,
      'beds' => 1,
      'type' => 'doppia standard'
    ],
    [
      'id' => 3,
      'floor' => 1,
      'room_number' => 103,
      'beds' => 2,
      'type' => 'tripla standard',
    ],
    [
      'id' => 4,
      'floor' => 1,
      'room_number' => 104,
      'beds' => 3,
      'type' => 'quadrupla standard',
    ],
    [
      'id' => 5,
      'floor' => 1,
      'room_number' => 105,
      'beds' => 1,
      'type' => 'doppia suite'
    ],
    [
      'id' => 6,
      'floor' => 2,
      'room_number' => 201,
      'beds' => 1,
      'type' => 'doppia standard'
    ],
    [
      'id' => 7,
      'floor' => 2,
      'room_number' => 202,
      'beds' => 1,
      'type' => 'doppia standard'
    ],
    [
      'id' => 8,
      'floor' => 2,
      'room_number' => 203,
      'beds' => 2,
      'type' => 'tripla standard',
    ],
    [
      'id' => 9,
      'floor' => 2,
      'room_number' => 204,
      'beds' => 3,
      'type' => 'quadrupla standard',
    ],
    [
      'id' => 10,
      'floor' => 2,
      'room_number' => 205,
      'beds' => 2,
      'type' => 'tripla suite'
    ]
  ];

 ?>
