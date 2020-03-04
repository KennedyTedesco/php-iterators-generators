<?php

declare(strict_types=1);

$iterator = new RegexIterator(
    new FilesystemIterator(__DIR__),
    '/^.+\.php$/'
);

/** @var SplFileInfo $file */
foreach ($iterator as $file) {
    echo $file->getFilename() . \PHP_EOL;
}
