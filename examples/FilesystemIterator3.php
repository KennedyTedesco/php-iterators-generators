<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Iterators\FileExtensionFilter;

$iterator = new FileExtensionFilter(new FilesystemIterator(__DIR__), 'php');

/** @var SplFileInfo $file */
foreach ($iterator as $file) {
    echo $file->getFilename() . \PHP_EOL;
}
