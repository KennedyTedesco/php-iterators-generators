<?php

declare(strict_types=1);

function getBooks(): Generator
{
    for ($i = 0; $i < 100; $i++) {
        yield "Book {$i}";
    }
}

foreach (getBooks() as $book) {
    echo $book . \PHP_EOL;
}
