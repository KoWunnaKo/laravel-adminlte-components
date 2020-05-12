<?php

namespace DGvai\BladeAdminLTE\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $bg;
    public $title;
    public $collapsed, $removable, $maximizable, $disabled;
    public $outline, $full;

    public function __construct(
        $bg = 'info', $title, 
        $collapsed = false, $removable = false, 
        $maximizable = false, $disabled = false,
        $outline = false, $full = false)
    {
        $this->bg = $bg;
        $this->title = $title;
        $this->collapsed = $collapsed;
        $this->removable = $removable;
        $this->maximizable = $maximizable;
        $this->disabled = $disabled;
        $this->outline = $outline;
        $this->full = $full;
    }

    public function render()
    {
        return view('xdg::card');
    }
}