<?php

namespace App\Livewire\Buy;

use Livewire\Component;
use Livewire\Attributes\On;

class Cart extends Component
{
    public $articlePrice;

    public function render()
    {
        return view('livewire.buy.cart');
    }

    #[On('addArticleToCart')]
    public function addArticleToCart($articlePrice){
        $this->articlePrice = $articlePrice;
    }
}
