<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Iterators\BookStoreIterator;

$books = new BookStoreIterator([
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

while ($books->valid()) {
    echo "{$books->key()} -> {$books->current()} \n";

    $books->next();
}
