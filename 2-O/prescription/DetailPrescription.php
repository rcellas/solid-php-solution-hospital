<?php
namespace Solid\O\Prescription;

use Solid\O\Medicament;
require_once __DIR__ . '/Prescription.php';

class DetailPrescription implements Prescription {
    public function createPrescription(Medicament $medicament) {
        return "Detailed prescription for " . $medicament->getName() . ": " . $medicament->getDescription();
    }
}
?>
