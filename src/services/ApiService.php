<?php

namespace Pol\PhpChallenge\Services;

class ApiService {
    public static function fetchData($url) {
        $jsonResponse = @file_get_contents($url);
        return $jsonResponse !== false ? $jsonResponse : '';
    }
}
?>