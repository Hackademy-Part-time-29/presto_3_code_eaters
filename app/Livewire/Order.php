<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class Order extends Component
{
    public $orderBy = 'createASC';

    public function render()
    {        
        $query = Article::where('is_accepted', true);

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

        $this->dispatch('orderByChanged', $this->orderBy);
        return view('livewire.order', [
            'articles' => $articles,
        ]);
    }
}
