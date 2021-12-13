<?php

namespace Febalist\Laravel\Components\Components;

use Illuminate\Database\Eloquent\Model;
use Illuminate\View\Component;

class Input extends Component
{
    public $defaultAttributes = [];

    public $type;
    public $name;
    public $value;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type = null, $name = null, $value = null)
    {
        $this->type = $type ?? 'text';
        $this->name = $name;
        $this->value = $value;
    }

    public function getValue(Model $model = null)
    {
        $value = old($this->name)
            ?? data_get($model ?? [], $this->name)
            ?? $this->value;

        if (isset($value)) {
            $value = $this->transform($value);
        }

        return $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('febalist::components.input');
    }

    protected function transform($value)
    {
        return $value;
    }
}
