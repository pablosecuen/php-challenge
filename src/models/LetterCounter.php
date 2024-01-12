<?php

namespace Pol\PhpChallenge\Models;



namespace Pol\PhpChallenge\Models;

class LetterCounter {
    public static function countLetters($input) {
        $input = strtolower($input);
        $letterCount = [];

        for ($i = 0; $i < strlen($input); $i++) {
            $char = $input[$i];

            if (ctype_alpha($char)) {
                if (!isset($letterCount[$char])) {
                    $letterCount[$char] = 1;
                } else {
                    $letterCount[$char]++;
                }
            }
        }

        return $letterCount;
    }

    public static function formatLetterCountAsString($letterCounts) {
        $result = '';
        foreach ($letterCounts as $letter => $count) {
            $result .= $letter . ':' . str_repeat('*', $count) . ',';
        }

        return rtrim($result, ',');
    }
}



?>
