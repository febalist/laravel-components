<?php

namespace Febalist\Laravel\Components;

use Febalist\Laravel\Components\Components\Checkbox;
use Febalist\Laravel\Components\Components\Form;
use Febalist\Laravel\Components\Components\Input;
use Febalist\Laravel\Components\Components\InputDate;
use Febalist\Laravel\Components\Components\InputFile;
use Febalist\Laravel\Components\Components\InputFiles;
use Febalist\Laravel\Components\Components\InputFloat;
use Febalist\Laravel\Components\Components\InputImage;
use Febalist\Laravel\Components\Components\InputImages;
use Febalist\Laravel\Components\Components\InputInteger;
use Febalist\Laravel\Components\Components\InputTime;
use Febalist\Laravel\Components\Components\Select;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class ServiceProvider extends IlluminateServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../views', 'febalist');

        $this->loadViewComponentsAs('', [
            Checkbox::class,
            Form::class,
            Input::class,
            InputDate::class,
            InputFile::class,
            InputFiles::class,
            InputFloat::class,
            InputImage::class,
            InputImages::class,
            InputInteger::class,
            InputTime::class,
            Select::class,
        ]);

        Blade::component("febalist::components.alpine", "alpine");
        Blade::component("febalist::components.button", "button");
        Blade::component("febalist::components.error", "error");
        Blade::component("febalist::components.form-group", "form-group");
        Blade::component("febalist::components.input-group", "input-group");
    }
}
