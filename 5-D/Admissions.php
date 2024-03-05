<?php
namespace Solid\D;

use Solid\TheGoodPatient\PatientModel;

class Admissions {
    private $patient;

    public function __construct(PatientModel $patient) {
        $this->patient = $patient;
    }

    public function admitPatient() {
        echo "Admitting patient: " . $this->patient->getDetails() . "\n";
    }
}
?>
