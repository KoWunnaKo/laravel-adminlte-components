<?php

namespace DGvai\BladeAdminLTE\Components;

use Illuminate\View\Component;

class InputSlider extends Component
{
    public $id, $name, $label;
    public $topclass, $inputclass;
    public $value, $disabled, $required;
    public $min, $max, $step, $vertical;
    public $tick, $ticks, $tickLabels;
    public $color;

    public function __construct(
            $id, $name = null,
            $label = 'Input Label',
            $topclass = null, $inputclass = null,
            $value = null,$disabled = false, $required = false,
            $min = 0, $max = 100, $step = 1, $vertical = false,
            $tick = false, $ticks = null,  $tickLabels = null,
            $color = 'blue'
        )
    {
        $this->id = $id;
        $this->name = $name;
        $this->label = $label;
        $this->topclass = $topclass;
        $this->inputclass = $inputclass;
        $this->required = $required;
        $this->disabled = $disabled;
        $this->value = $value;
        $this->min = $min;
        $this->max = $max;
        $this->step = $step;
        $this->vertical = $vertical;
        $this->tick = $tick;
        $this->ticks = $ticks;
        $this->tickLabels = $tickLabels;
        $this->color = $color;
    }

    public function render()
    {
        return view('xdg::input-slider');
    }
}