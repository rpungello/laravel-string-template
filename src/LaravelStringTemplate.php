<?php

namespace Rpungello\LaravelStringTemplate;

class LaravelStringTemplate
{
    public function __construct(protected AbstractEngine $engine)
    {
    }

    public function format(string $format, array $data): string
    {
        return $this->engine->render($format, $data);
    }
}
