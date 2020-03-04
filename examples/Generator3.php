<?php

declare(strict_types=1);

function getBooks(): Generator
{
    for ($i = 0; $i < 10; $i++) {
        yield $i * 2 => "Book {$i}";
    }
}

foreach (getBooks() as $key => $value) {
    echo "{$key} -> {$value}" . \PHP_EOL;
}
