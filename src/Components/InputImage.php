<?php

namespace Febalist\Laravel\Components\Components;

class InputImage extends InputFile
{
    public function __construct($name = null, $multiple = false)
    {
        parent::__construct($name, $multiple, 'image/*');
    }
}
