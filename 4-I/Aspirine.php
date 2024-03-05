<?php
namespace Solid\I;

require_once __DIR__ . '/interface/Oral.php';

class Aspirine implements Oral {
    public function administerOral() {
        echo "Administer aspirine through oral\n";
    }
}
?>
