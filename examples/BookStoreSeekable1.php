<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Iterators\BookStoreSeekableIterator;

$books = new BookStoreSeekableIterator([
    'Book 1',
    'Book 2',
    'Book 3',
    'Book 4',
    'Book 5',
    'Book 6',
    'Book 7',
    'Book 8',
    'Book 9',
    'Book 10',
]);

echo $books->current() . \PHP_EOL; // Book 1

$books->seek(4);

echo $books->current() . \PHP_EOL; // Book 5
