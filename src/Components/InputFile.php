<?php

namespace Febalist\Laravel\Components\Components;

use Illuminate\Support\Str;

class InputFile extends Input
{
    public function __construct($name = null, $multiple = false, $accept = null)
    {
        if ($multiple) {
            $name = Str::finish($name, '[]');
            $this->defaultAttributes['multiple'] = true;
        }

        if ($accept) {
            $this->defaultAttributes['accept'] = $accept;
        }

        parent::__construct('file', $name);
    }
}
