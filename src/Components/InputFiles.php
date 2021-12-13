<?php

namespace Febalist\Laravel\Components\Components;

class InputFiles extends InputFile
{
    public function __construct($name = null)
    {
        parent::__construct($name, true);
    }
}
