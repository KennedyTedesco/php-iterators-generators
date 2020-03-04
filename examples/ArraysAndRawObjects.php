<?php

declare(strict_types=1);

function iterateAndPrint($list): void
{
    foreach ($list as $key => $value) {
        echo "{$key} -> {$value}\n";
    }
}

iterateAndPrint(['foo', 'bar', 'baz']);

iterateAndPrint(new class() {
    public int $foo = 1;
    public string $bar = 'bar';
    protected string $baz = 'baz';
});
