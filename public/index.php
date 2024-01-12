<?php

require '../vendor/autoload.php';

use Pol\PhpChallenge\Controllers\LetterCounterController;
use Pol\PhpChallenge\Controllers\DateController;
use Pol\PhpChallenge\Controllers\ResponseColumnsController;

// Enrutador simple
$action = $_GET['action'] ?? 'default';

switch ($action) {
    case 'countLetters':
        $controller = new LetterCounterController();
        $controller->index();
        break;
    case 'getCurrentDate':
        $controller = new DateController();
        $controller->index();
        break;
    case 'fetchAndPrintColumns':
        $controller = new ResponseColumnsController();
        $controller->index();
        break;
    default:
        echo "Página no encontrada";
}

?>
