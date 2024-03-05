<?php
namespace Solid\I;

require_once __DIR__ . '/interface/Injectable.php';

class Insulin implements Injectable {
    public function administerInjection() {
        echo "Administer Insulin through injection\n";
    }
}
?>
