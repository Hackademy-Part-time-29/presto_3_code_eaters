<?php

namespace App\Livewire\Filter;

use App\Models\Article;
use Livewire\Component;

class Price extends Component
{
    public $price;
    public $maxPrice;
    public $articles;

    public function updatedPrice($newPrice) {
        $this->price = $newPrice;
        $this->dispatch('filterPrice', $this->price);
        $this->dispatch('priceUpdated', $this->price);
    }

    public function mount(){
        $this->maxPrice = Article::where('is_accepted', true)->max('price');
        $this->price = $this->maxPrice;
        $this->articles = $this->getFilteredArticles();
    }

    public function getFilteredArticles(){
        $query = Article::where('is_accepted', true);
        if ($this->price) {
            $query->where('price', '<=', $this->price);
        }

        return $query->get();
    }
    
    public function render()
    {
        return view('livewire.filter.price');
    }
}