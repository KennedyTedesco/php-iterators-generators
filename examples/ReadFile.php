<?php

declare(strict_types=1);

function getLines(string $filePath): array
{
    $file = \fopen($filePath, 'rb');

    $lines = [];
    while (!\feof($file)) {
        $lines[] = \fgets($file);
    }

    \fclose($file);

    return $lines;
}

$lines = getLines(__DIR__.'/file.txt');

foreach ($lines as $line) {
    echo $line;
}

echo \PHP_EOL . 'Used memory: ~' . \round((\memory_get_peak_usage()/1024/1024), 2) . 'MB';
