<?php
namespace Solid;

require_once '../solid-php-solution-hospital/1-S/Rooms.php';
require_once '../solid-php-solution-hospital/1-S/RoomsAssigments.php';
require_once '../solid-php-solution-hospital/2-O/Medicament.php';
require_once '../solid-php-solution-hospital/2-O/prescription/DetailPrescription.php';
require_once '../solid-php-solution-hospital/2-O/prescription/Prescription.php';
require_once '../solid-php-solution-hospital/2-O/prescription/PrescriptionPrinter.php';
require_once '../solid-php-solution-hospital/2-O/prescription/SimplePrescription.php';
require_once '../solid-php-solution-hospital/3-L/Surgeon.php';
require_once '../solid-php-solution-hospital/4-I/Insulin.php';
require_once '../solid-php-solution-hospital/4-I/Aspirine.php';
require_once '../solid-php-solution-hospital/4-I/interface/Injectable.php';
require_once '../solid-php-solution-hospital/4-I/interface/Oral.php';
require_once '../solid-php-solution-hospital/5-D/Admissions.php';
require_once '../solid-php-solution-hospital/theGoodPatient/PatientModel.php';
require_once '../solid-php-solution-hospital/theGoodPatient/IPatient.php';

use Solid\S\Room;
use Solid\S\RoomAssignments;
use Solid\O\Medicament;
use Solid\O\Prescription\DetailPrescription;
use Solid\O\Prescription\PrescriptionPrinter;
use Solid\O\Prescription\SimplePrescription;
use Solid\L\HeartSurgeon;
use Solid\L\NeuroSurgeon;
use Solid\I\Insulin;
use Solid\I\Aspirine;
use Solid\D\Admissions;
use Solid\TheGoodPatient\PatientModel;

class Program {
    public static function main() {
        // Ejemplo de S
        $patientModel = new PatientModel("Javier Prades", 25, "Flu");
        $room = new Room(404);
        $roomAssignments = new RoomAssignments($patientModel, $room);
        
        $roomAssignments->assignRoom();
        
        // Ejemplo de O
        $medicament = new Medicament("Ibuprofeno", "Anti-inflamatorio");
        $simplePrescription = new SimplePrescription();
        $detailPrescription = new DetailPrescription();
        $printer = new PrescriptionPrinter();
        
        $printer->printPrescription($simplePrescription, $medicament);
        $printer->printPrescription($detailPrescription, $medicament);
        
        // Ejemplo de L
        $heartSurgeon = new HeartSurgeon();
        $neuroSurgeon = new NeuroSurgeon();

        self::performSurgery($heartSurgeon);
        self::performSurgery($neuroSurgeon);
        
        // Ejemplo de I
        $aspirine = new Aspirine();
        $insulin = new Insulin();

        self::administerOral($aspirine);
        self::administerInjectable($insulin);
        
        // Ejemplo de D
        $admissions = new Admissions($patientModel);
        $admissions->admitPatient();
    }
    
    private static function performSurgery($surgeon) {
        $surgeon->performSurgery();
    }

    private static function administerOral($med) {
        $med->administerOral();
    }

    private static function administerInjectable($med) {
        $med->administerInjection();
    }
}

Program::main();
?>
