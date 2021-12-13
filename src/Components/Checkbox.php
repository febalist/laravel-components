<?php

namespace Febalist\Laravel\Components\Components;

use Illuminate\Support\Str;

class Checkbox extends Input
{
    public $id;
    public $class;

    public function __construct($name = null, $value = null, $id = null, $class = null)
    {
        parent::__construct(null, $name, $value);

        $this->id = $id ?? Str::random();
        $this->class = $class;
    }

    public function render()
    {
        return view('febalist::components.checkbox');
    }
}
