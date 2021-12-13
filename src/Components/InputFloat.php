<?php

namespace Febalist\Laravel\Components\Components;

class InputFloat extends Input
{
    public function __construct($name = null, $value = null)
    {
        parent::__construct('number', $name, $value);

        $this->defaultAttributes['step'] = 0.01;
    }

    public function transform($value)
    {
        return (float) $value;
    }
}
