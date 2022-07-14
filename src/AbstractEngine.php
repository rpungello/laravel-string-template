<?php

namespace Rpungello\LaravelStringTemplate;

abstract class AbstractEngine
{
    public function __construct(protected string $left = '{', protected string $right = '}')
    {
    }

    abstract public function render(string $template, array $data): string;
}
