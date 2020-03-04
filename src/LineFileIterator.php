<?php

declare(strict_types=1);

namespace Iterators;

use Generator;
use OutOfBoundsException;
use SeekableIterator;

final class LineFileIterator implements SeekableIterator
{
    private string $filePath;
    private Generator $generator;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
        $this->rewind();
    }

    public function rewind(): void
    {
        $this->generator = $this->getGenerator();
    }

    public function current()
    {
        return $this->generator->current();
    }

    public function key(): int
    {
        return (int) $this->generator->key();
    }

    public function next(): void
    {
        $this->generator->next();
    }

    public function valid(): bool
    {
        return $this->generator->valid();
    }

    public function seek($position): void
    {
        while ($this->valid()) {
            if ($this->generator->key() === $position) {
                return;
            }

            $this->generator->next();
        }

        throw new OutOfBoundsException("Invalid position ($position)");
    }

    private function getGenerator(): Generator
    {
        $file = \fopen($this->filePath, 'rb');

        while (!\feof($file)) {
            yield \fgets($file);
        }

        \fclose($file);
    }
}
