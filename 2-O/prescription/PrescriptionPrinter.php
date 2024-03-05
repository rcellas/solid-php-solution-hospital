<?php
namespace Solid\O\Prescription;

use Solid\O\Medicament;

class PrescriptionPrinter {
    public function printPrescription(Prescription $prescription, Medicament $medicament) {
        echo $prescription->createPrescription($medicament) . "\n";
    }
}
?>
