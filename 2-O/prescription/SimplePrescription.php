<?php
namespace Solid\O\Prescription;

use Solid\O\Medicament;

class SimplePrescription implements Prescription {
    public function createPrescription(Medicament $medicament) {
        return "Prescription for " . $medicament->getName() . ": " . $medicament->getDescription();
    }
}
?>
