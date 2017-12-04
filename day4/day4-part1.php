<?php
/**
 * http://adventofcode.com/2017/day/4
 */

$answer = 0;

if ($file = fopen(__DIR__ . "/day4-input.txt", "rb")) {
    while (!feof($file)) {
        $line = trim(fgets($file));

        if (empty($line)) {
            continue;
        }

        // Accept tabs and space
        $line = preg_split('/\s+/', $line);

        $words = [];
        foreach ($line as $word) {
            if (isset($words[$word])) {
                continue 2;
            }

            $words[$word] = true;
        }

        $answer++;
    }
    fclose($file);
}

echo $answer . PHP_EOL;
