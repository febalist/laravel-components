<?php

namespace Febalist\Laravel\Components\Components;

class Textarea extends Input
{
    public function __construct($name = null, $value = null)
    {
        parent::__construct(null, $name, $value);
    }

    public function render()
    {
        return view('febalist::components.textarea');
    }
}
