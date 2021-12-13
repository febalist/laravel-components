<?php

namespace Febalist\Laravel\Components\Components;

use Illuminate\Support\Facades\Date;

class InputTime extends Input
{
    public function __construct($name = null, $value = null)
    {
        parent::__construct('time', $name, $value);
    }

    public function transform($value)
    {
        return Date::parse($value)->toTimeString();
    }
}
