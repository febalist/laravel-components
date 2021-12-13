<?php

namespace Febalist\Laravel\Components\Components;

use Illuminate\Database\Eloquent\Model;
use Illuminate\View\Component;
use Route;

class Form extends Component
{
    public $action;
    public $method;
    public $model;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($method = null, $action = null, Model $model = null, $store = null, $update = null)
    {
        if ($model && $model->exists && $update) {
            $this->action = Route::has($update) ? route($update, $model) : url($update);
            $method ??= 'PUT';
        } elseif ($model && !$model->exists && $store) {
            $this->action = Route::has($store) ? route($store) : url($store);
        } else {
            $this->action = $action ?? request()->fullUrl();
        }
        $this->method = $method ?? 'POST';
        $this->model = $model;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('febalist::components.form');
    }
}
