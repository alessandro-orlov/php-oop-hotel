<?php

class Stanza {
  public $id;
  public $floor;
  public $roomNumber;
  public $beds;

  public function __construct($_id, $_floor, $_roomNumber, $_beds) {
    $this->id = $_id;
    $this->floor = $_floor;
    $this->roomNumber = $_roomNumber;
    $this->beds = $_beds;
  }


  public function getRoomId() {
    return $this->id;
  }
  public function getRoomFloor() {
    return $this->floor;
  }
  public function getRoomNumber() {
    return $this->roomNumber;
  }
  public function getRoomBeds() {
    return $this->beds;
  }
}

?>
