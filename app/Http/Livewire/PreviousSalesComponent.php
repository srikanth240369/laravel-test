<?php

namespace App\Http\Livewire;

use App\Models\PreviousSale;
use Livewire\Component;

class PreviousSalesComponent extends Component
{
    protected $listeners = [
        'updatePreviousSales' => 'render'
    ];

    public function render()
    {
        
        $previous_sales = PreviousSale::latest()->get();
        
        return view('livewire.previous-sales-component',compact('previous_sales'));
    }
}
