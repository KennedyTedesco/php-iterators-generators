<?php

declare(strict_types=1);

$list = new ArrayObject(
    [
        'nome' => 'Pedro',
        'idade' => 20,
        'nascimento' => '1990-10-10',
    ],
    ArrayObject::ARRAY_AS_PROPS
);

echo "{$list->nome}, {$list->idade} ({$list->nascimento})";
