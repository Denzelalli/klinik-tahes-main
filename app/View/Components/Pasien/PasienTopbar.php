<?php

namespace App\View\Components\Pasien;

use Illuminate\View\Component;

class PasienTopbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.pasien.pasien-topbar');
    }
}
