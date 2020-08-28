<?php

  // Connessione al databese mySQL
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "boolean-hotel";

  // Connect
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn && $conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM `stanze` ORDER BY `room_number` ASC";
  $results = $conn->query($sql);

    if ($results && $results->num_rows > 0) {

      $rooms = [];

      // Put single row (that rappresents single room) in array ($rooms)
      while($row = $results->fetch_assoc()) {
        $rooms[] = $row;
      }

    } elseif ($results) {

      // 0 results
      $rooms = [];

      } else {
          echo "query error";
        }
  $conn->close();

 ?>
