<?php
namespace Solid\O\Prescription;

use Solid\O\Medicament;

interface Prescription {
    public function createPrescription(Medicament $medicament);
}
?>
