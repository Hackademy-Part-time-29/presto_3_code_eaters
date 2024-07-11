<?php

namespace App\Livewire\Filter;

use Livewire\Component;
use Livewire\Attributes\On;

class Recap extends Component
{
    public $visible = false;
    public $price;
    public $maxPrice;
    public $formattedPrice;

    public function render()
    {
        return view('livewire.filter.recap');
    }

    #[On('filterPrice')]
    public function visible($price,$maxPrice){
        $this->price = $price;
        $this->maxPrice = $maxPrice;

        if ($price != $maxPrice) {
            $this->visible = true;
            $this->formattedPrice = number_format($price, 2, ',', '.') . ' €';
        } else {
            $this->visible = false;
        }
    }
}
