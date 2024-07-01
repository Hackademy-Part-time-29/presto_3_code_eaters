<?php

namespace App\Livewire\Filter;

use Livewire\Component;

class Price extends Component
{
    public $minPrice = 0;
    public $maxPrice = 1000;
    
    public function render()
    {
        return view('livewire.filter.price');
    }
}
