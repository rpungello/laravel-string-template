<?php

namespace Rpungello\LaravelStringTemplate;

use RecursiveArrayIterator;

class Engine extends AbstractEngine
{
    public function render(string $template, array $data): string
    {
        $result = $template;

        $recursiveIterator = new RecursiveArrayIterator($data);
        $iterator = new NestedArrayIterator($recursiveIterator);

        foreach ($iterator as $key => $value) {
            $result = str_replace(
                $this->left . $key . $this->right,
                $value,
                $result
            );
        }

        return $result;
    }
}
