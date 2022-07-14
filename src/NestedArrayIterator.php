<?php

namespace Rpungello\LaravelStringTemplate;

use RecursiveIterator;
use RecursiveIteratorIterator;
use Traversable;

class NestedArrayIterator extends RecursiveIteratorIterator
{
    protected string $separator;
    protected array $stack;

    public function __construct(Traversable $iterator, string $separator = '.')
    {
        parent::__construct($iterator);
        $this->separator = $separator;
        $this->stack = [];
    }

    public function callGetChildren(): ?RecursiveIterator
    {
        $this->stack[] = parent::key();

        return parent::callGetChildren();
    }

    public function key(): mixed
    {
        $stack = $this->stack;
        $stack[] = parent::key();

        return implode($this->separator, $stack);
    }

    public function endChildren(): void
    {
        parent::endChildren();
        array_pop($this->stack);
    }
}
