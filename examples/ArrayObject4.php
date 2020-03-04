<?php

declare(strict_types=1);

$books = new ArrayObject([
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

\var_dump(\iterator_to_array($books));
