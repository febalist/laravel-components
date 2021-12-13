<?php

namespace Febalist\Laravel\Components\Components;

use Illuminate\Support\Facades\Date;

class InputDate extends Input
{
    public function __construct($name = null, $value = null)
    {
        parent::__construct('date', $name, $value);

        $this->defaultAttributes['data-date-format'] = 'YYYY-MMMM-DD';
    }

    public function transform($value)
    {
        return Date::parse($value)->toDateString();
    }
}
