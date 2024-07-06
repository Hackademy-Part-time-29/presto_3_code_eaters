<?php

namespace App\Livewire\Filter;

use App\Models\Article;
use Livewire\Component;

class Price extends Component
{
    public $price;
    public $maxPrice;

    public function updatedPrice($value) {
        $this->price = $value;
        $this->dispatch('filterPrice', $this->price);
    }

    public function mount(){
        $this->maxPrice = Article::where('is_accepted', true)->max('price');
        $this->price = $this->maxPrice;
    }
    
    public function render()
    {
        $query = Article::where('is_accepted', true);
        if ($this->price) {
            $query->where('price', '<=', $this->price);
        }

        $articles = $query->get();

        return view('livewire.filter.price', [
            'articles' => $articles,
            'maxPrice' => $this->maxPrice,
        ]);
    }
}
