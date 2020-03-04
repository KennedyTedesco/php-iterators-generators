<?php

declare(strict_types=1);

namespace Iterators;

use Iterator;

final class BookStoreIterator implements Iterator
{
    /** @var string[] $books */
    private array $books;
    private int $index = 0;

    /**
     * @param string[] $books
     */
    public function __construct(array $books)
    {
        $this->books = $books;
    }

    public function current(): string
    {
        return $this->books[$this->index];
    }

    public function key(): int
    {
        return $this->index;
    }

    public function next(): void
    {
        $this->index++;
    }

    public function rewind(): void
    {
        $this->index = 0;
    }

    public function valid(): bool
    {
        return \array_key_exists($this->index, $this->books);
    }
}
