<?php


// controllers/DateController.php

namespace Pol\PhpChallenge\Controllers;

use Pol\PhpChallenge\Services\ApiService;

class DateController {
    public static function index() {
        $timestamp = self::getCurrentDate();
        $formattedDate = date('l jS \of F, Y - h:i A', $timestamp);

        include __DIR__ . '/../templates/date_template.php';
    }

    private static function getCurrentDate() {
        $jsonResponse = ApiService::fetchData('http://date.jsontest.com/');
        $data = json_decode($jsonResponse, true);
        return strtotime($data['date']);
    }
}
?>