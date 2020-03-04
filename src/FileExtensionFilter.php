<?php

declare(strict_types=1);

namespace Iterators;

use FilterIterator;
use Iterator;
use SplFileInfo;

class FileExtensionFilter extends FilterIterator
{
    private string $extension;

    public function __construct(Iterator $iterator, string $extension)
    {
        parent::__construct($iterator);

        $this->extension = $extension;
    }

    public function accept(): bool
    {
        /** @var SplFileInfo $file */
        $file = $this->getInnerIterator()->current();

        return $this->extension === $file->getExtension();
    }
}
