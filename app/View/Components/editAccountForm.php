<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class editAccountForm extends Component
{
    public $minimalAverage;

    public function __construct($minimalAverage)
    {
        $this->minimalAverage= $minimalAverage;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.edit-account-form');
    }
}
