<?php

namespace DGvai\BladeAdminLTE\Components;

use Illuminate\View\Component;

class Textarea extends Component
{
    public $id, $name, $label, $placeholder;
    public $topclass, $inputclass;
    public $value, $disabled, $required;
    public $rows;

    public function __construct(
            $id = null, $name = null,
            $label = 'Input Label', $placeholder = null,
            $topclass = null, $inputclass = null,
            $value = null, $disabled = false, $required = false,
            $rows = '10'
        )
    {
        $this->type = $type;
        $this->id = $id;
        $this->name = $name;
        $this->label = $label;
        $this->placeholder = $placeholder;
        $this->topclass = $topclass;
        $this->inputclass = $inputclass;
        $this->value = $value;
        $this->required = $required;
        $this->disabled = $disabled;
        $this->rows = $rows;
    }

    public function render()
    {
        return view('xdg::textarea');
    }
}