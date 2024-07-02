<?php

namespace App\Livewire\Filter;

use App\Models\Article;
use Livewire\Component;

class Price extends Component
{
    public $price;

    public function updatedPrice($value) {
        $this->price = $value;
    }
    
    public function render()
    {
        $query = Article::where('is_accepted', true);
        $this->price = $query->orderBy('price', 'desc')->first();

        if ($this->price) {
            $query->where('price', '<=', $this->price);
        }
        
        return view('livewire.filter.price');
    }
}
