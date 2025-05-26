<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AlertCmp extends Component
{
    /**
     * Create a new component instance.
     */
    public $msg;
    public $css;
    public function __construct($arg1,$arg2)
    {
        $this->msg = $arg1;
        $this->css = $arg2;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert-cmp');
    }
}
