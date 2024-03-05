<?php
namespace Solid\TheGoodPatient;

class PatientModel {
    private $name;
    private $age;
    private $illness;

    public function __construct($name, $age, $illness) {
        $this->name = $name;
        $this->age = $age;
        $this->illness = $illness;
    }

    public function getName() {
        return $this->name;
    }

    public function getDetails() {
        return "{$this->name}, {$this->age}, suffering from {$this->illness}";
    }
}
?>
