<?php

declare(strict_types=1);

namespace Iterators;

use ArrayIterator;
use IteratorAggregate;

final class BookStoreArrayIterator implements IteratorAggregate
{
    /** @var string[] $books */
    private array $books;

    /**
     * @param string[] $books
     */
    public function __construct(array $books)
    {
        $this->books = $books;
    }

    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->books);
    }
}
