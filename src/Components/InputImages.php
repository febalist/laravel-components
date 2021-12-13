<?php

namespace Febalist\Laravel\Components\Components;

class InputImages extends InputImage
{
    public function __construct($name = null)
    {
        parent::__construct($name, true);
    }
}
