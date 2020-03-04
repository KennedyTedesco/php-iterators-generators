<?php

declare(strict_types=1);

function getBooks(): Generator
{
    yield 'Book 1';
    yield 'Book 2';
    yield 'Book 3';
    yield 'Book 4';
    yield 'Book 5';
}

foreach (getBooks() as $book) {
    echo $book . \PHP_EOL;
}
