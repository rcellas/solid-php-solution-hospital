<?php
namespace Solid\O;

class Medicament {
    private $name;
    private $description;

    public function __construct($name, $description) {
        $this->name = $name;
        $this->description = $description;
    }

    public function getName() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }
}
?>
