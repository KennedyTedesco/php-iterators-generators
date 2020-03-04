<?php

declare(strict_types=1);

$list = new ArrayObject([
    5, 4, 3, 2, 1,
]);

for ($i = 5; $i <= 10; $i++) {
    $list->append($i);
}

// Ordena os valores
$list->natsort();

foreach ($list as $key => $value) {
    echo "{$key} -> {$value}\n";
}
