<?php

namespace App\View\Components;

use App\Models\DetailsAppartement;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ModalEtage extends Component
{
    /**
     * Create a new component instance.
     */
    public $etage;
    public function __construct($id)
    {
        $this->etage = DetailsAppartement::find($id);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.modal-etage');
    }
}
