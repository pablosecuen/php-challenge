<?php

namespace Pol\PhpChallenge\Controllers;

use Pol\PhpChallenge\Services\ApiService;

class ResponseColumnsController {
    public static function index() {
        $data = self::fetchDataAndPrintColumns();
        include __DIR__ . '/../templates/response_columns_template.php';
    }

    private static function fetchDataAndPrintColumns() {
        $jsonResponse = ApiService::fetchData('http://echo.jsontest.com/john/yes/tomas/no/belen/yes/peter/no/julie/no/gabriela/no/messi/no');
        $data = json_decode($jsonResponse, true);

        $yesNames = array_filter($data, fn($response) => $response === 'yes');
        $noNames = array_filter($data, fn($response) => $response === 'no');

        return ['yesNames' => array_keys($yesNames), 'noNames' => array_keys($noNames)];
    }
}
?>