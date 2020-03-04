<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Iterators\LineFileIterator;

$iterator = new LineFileIterator(__DIR__ . '/file.txt');

// Set the pointer to the line 50.000
$iterator->seek(50_000);

// Get the current line
echo $iterator->current();

// Move to the next line (50.001)
$iterator->next();

// Get the current line
echo $iterator->current();

echo 'Used memory: ~' . \round((\memory_get_peak_usage()/1024/1024), 2) . 'MB';
