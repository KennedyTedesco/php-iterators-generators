<?php

declare(strict_types=1);

function getRecords(): Generator
{
    for ($i = 0; $i < 100_000; $i++) {
        yield "Record $i";
    }
}

function formatRecords(Generator $records): Generator
{
    foreach ($records as $index => $record) {
        yield "[$index] -> {$record}";
    }
}

$registros = formatRecords(getRecords());
foreach ($registros as $registro) {
    echo $registro . \PHP_EOL;
}

echo 'Used memory: ~' . \round((\memory_get_peak_usage()/1024/1024), 2) . 'MB';
