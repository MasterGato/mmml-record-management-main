<?php

namespace App\View\Components\TextField;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TextField extends Component
{

    public $label;
    public $name;
    public $type;
    public $placeholder;
    public $model;


    public function __construct($label = "", $name = "", $type = "text", $placeholder, $model)
    {
        $this->label = $label;
        $this->name = $name;
        $this->type = $type;
        $this->placeholder = $placeholder;
        $this->model = $model;
    }

    public function render(): View|Closure|string
    {
        return view('components.text-field.text-field');
    }
}
