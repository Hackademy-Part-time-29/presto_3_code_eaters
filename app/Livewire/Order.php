<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class Order extends Component {

    public $orderBy = 'priceDESC';

    public function render()
    {
        $articlesOrderPriceDESC = Article::orderBy('price','DESC')->get();
        return view('livewire.order',compact('articlesOrderPriceDESC'));
    }
}
