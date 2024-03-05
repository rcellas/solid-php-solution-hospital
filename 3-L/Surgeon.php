<?php
namespace Solid\L;

abstract class Surgeon {
    public abstract function performSurgery();
}

class HeartSurgeon extends Surgeon {
    public function performSurgery() {
        echo "Performing heart surgery\n";
    }
}

class NeuroSurgeon extends Surgeon {
    public function performSurgery() {
        echo "Performing brain surgery\n";
    }
}
?>
