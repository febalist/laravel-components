<?php

namespace Febalist\Laravel\Components\Components;

class InputInteger extends Input
{
    public function __construct($name = null, $value = null)
    {
        parent::__construct('number', $name, $value);

        $this->defaultAttributes['step'] = 1;
    }

    public function transform($value)
    {
        return (int) $value;
    }
}
