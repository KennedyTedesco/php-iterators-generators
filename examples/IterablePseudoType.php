<?php

declare(strict_types=1);

function iterateAndPrint(iterable $list): void
{
    foreach ($list as $key => $value) {
        echo "{$key} -> {$value}\n";
    }
}

iterateAndPrint(['foo', 'bar', 'baz']);

$books = new ArrayObject([
    'Book 1',
    'Book 2',
    'Book 3',
    'Book 4',
]);

iterateAndPrint($books);
