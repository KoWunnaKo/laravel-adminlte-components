<?php

namespace DGvai\BladeAdminLTE\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $type, $title;
    public $dismissable;

    public function __construct($type = 'info', $dismissable = false, $title = 'Alert')
    {
        $this->type = $type;
        $this->title = $title;
        $this->dismissable = $dismissable;
    }

    public function icon()
    {
        switch($this->type)
        {
            case 'info' : return 'info' ; break;
            case 'warning' : return 'exclamation-triangle' ; break;
            case 'success' : return 'check' ; break;
            case 'danger' : return 'ban' ; break;
            default : return 'exclamation'; break;
        }
    }

    public function render()
    {
        return view('xdg::alert');
    }
}