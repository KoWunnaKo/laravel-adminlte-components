<?php

namespace DGvai\BladeAdminLTE\Components;

use Illuminate\View\Component;

class ProfileWidget extends Component
{
    public $bg, $img, $name, $desc;
    public $cover;

    public function __construct($bg = 'info', $img, $name, $desc, $cover = null)
    {
        $this->bg = $bg;
        $this->img = $img;
        $this->name = $name;
        $this->desc = $desc;
        $this->cover = $cover;
    }

    public function background()
    {
        return 'bg-'.$this->bg;
    }

    public function render()
    {
        return view('xdg::profile-widget');
    }
}