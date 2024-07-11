<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;

class Card extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public $orderBy = 'createASC';
    public $price;

    public function render(){  
        $query = Article::where('is_accepted', true);

        if ($this->price) {
            $query->where('price', '<=', $this->price);
        }

        switch ($this->orderBy) {
            case 'priceDESC':
                $query->orderBy('price', 'desc');
                break;
            case 'priceASC':
                $query->orderBy('price', 'asc');
                break;
            case 'createASC':
                $query->orderBy('created_at', 'asc');
                break;
            case 'createDESC':
            default:
                $query->orderBy('created_at', 'desc');
                break;
        }

        $articles = $query->paginate(10);
        return view('livewire.card', compact('articles'));
    }

    #[On('orderByChanged')]
    public function updateOrderBy($orderBy){
        $this->orderBy = $orderBy;
    }

    #[On('filterPrice')]
    public function filterByPrice($price){
        $this->price = $price;
        $this->resetPage();
    }
}
