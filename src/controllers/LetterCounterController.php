<?php


namespace Pol\PhpChallenge\Controllers;

use Pol\PhpChallenge\Models\LetterCounter;

class LetterCounterController {
    public static function index() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['input_string'])) {
                $inputString = $_POST['input_string'];
                $letterCounts = \Pol\PhpChallenge\Models\LetterCounter::countLetters($inputString);
                $formattedResult = \Pol\PhpChallenge\Models\LetterCounter::formatLetterCountAsString($letterCounts);

                if (isset($_SERVER['HTTP_INSOMNIA'])) {
                    header('Content-Type: application/json');
                    echo json_encode(['result' => $formattedResult]);
                } else {
                    include __DIR__ . '/../templates/letter_counter_template.php';
                }
            }
        } else {
            include __DIR__ . '/../templates/letter_counter_template.php';
        }
    }
}
?>