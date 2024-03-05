<?php
namespace Solid\S;

use Solid\TheGoodPatient\PatientModel;

class RoomAssignments {
    private $patientModel;
    private $room;

    public function __construct(PatientModel $patientModel, Room $room) {
        $this->patientModel = $patientModel;
        $this->room = $room;
    }

    public function assignRoom() {
        echo "Assigning room " . $this->room->getRoomNumber() . " to patient " . $this->patientModel->getName() . "\n";
    }
}
?>
