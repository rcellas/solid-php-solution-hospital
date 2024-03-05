<?php
namespace Solid\S;

class Room {
    private $roomNumber;

    public function __construct($roomNumber) {
        $this->roomNumber = $roomNumber;
    }

    public function getRoomNumber() {
        return $this->roomNumber;
    }
}
?>
