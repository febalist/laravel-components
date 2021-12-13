<?php

namespace Febalist\Laravel\Components\Components;

class Select extends Input
{
    public $options;

    public function __construct($options, $name = null, $value = null, $empty = null)
    {
        parent::__construct(null, $name, $value);

        $this->options = collect($options);
        if ($empty) {
            $this->options->prepend($empty === true ? '' : $empty, null);
        }
    }

    public function render()
    {
        return view('febalist::components.select');
    }
}
