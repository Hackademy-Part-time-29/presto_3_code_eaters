<?php

namespace App\Livewire\Article;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;
use App\Models\MacroCategory;

class FilterOrder extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public $uri;
    public $price;
    public $maxPrice;
    public $maxPriceCategory;
    public $category;
    public $categories;
    public $macroCategory;
    public $macroCategoryId;
    public $maxPriceMacroCategory;
    public $orderBy = 'createASC';
    public $formattedPriceMax;

    public function mount(){
        
        $this->maxPrice = Article::where('is_accepted', true)->max('price');
        $this->price = $this->maxPrice;
        if (strpos($this->uri, 'category/') === 0) {
            $categoryId = substr($this->uri, strlen('category/'));
            $this->category = Category::findOrFail($categoryId);
            $this->maxPriceCategory = $this->category->articles()->max('price');
            $this->maxPrice = $this->maxPriceCategory;
        } else if (strpos($this->uri, 'MacroCategory/') === 0){
            $this->macroCategoryId = substr($this->uri, strlen('MacroCategory/'));
            $this->macroCategory = MacroCategory::findOrFail($this->macroCategoryId);
            $categories = Category::where('macroCategory_id', $this->macroCategoryId)->get();
            $this->maxPriceCategory = Article::whereIn('category_id', $categories->pluck('id'))->max('price');
            $this->maxPrice = $this->maxPriceCategory;
        }

        $this->formattedPriceMax = number_format($this->maxPrice, 2, ',', '.') . ' €';
    }

    public function render()
    {
        $query = Article::where('is_accepted', true);

        if ($this->price) {
            $query->where('price', '<=', $this->price);
            $this->dispatch('filterPrice', $this->price, $this->maxPrice);
        }

        if ($this->category) {
            $query->where('category_id', $this->category->id);
        } else if ($this->macroCategory) {
            $this->categories = Category::where('macroCategory_id', $this->macroCategoryId)->get();
            $query->whereIn('category_id', $this->categories->pluck('id'));
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

        return view('livewire.article.filter-order', compact('articles'));
    }    

    public function updatedPrice($value){
        $this->dispatch('priceUpdated', $value);
    }

    public function updatedOrderBy($value){
        $this->dispatch('orderByChanged', $value);
    }
}