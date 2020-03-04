<?php

declare(strict_types=1);

$iterator = new FilesystemIterator(__DIR__.'/../');

/** @var SplFileInfo $file */
foreach ($iterator as $file) {
    echo $file->getFilename() . ' -> ' . ($file->isFile() ? 'file' : 'dir') . \PHP_EOL;
}
