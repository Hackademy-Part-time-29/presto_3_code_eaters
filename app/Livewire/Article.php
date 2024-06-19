<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\Validate;
use App\Models\Article as ModelsArticle;

class Article extends Component{

    #[Validate('required',message:"Il titolo è richiesto")]
    #[Validate('min:3',message:"Il titolo è troppo corto")]
    public $title;

    public $Categories;
    
    // #[Validate('required',message:"Il prezzo è richiesto")]
    // #[Validate('max:3',message:"Il prezzo è troppo alto")]
    // public $price;
    // public $description;
    // public $category;
    // public $user;    

    public function render(){
        $this->Categories = Category::all();
        return view('livewire.article');
    }

    public function store(){
        ModelsArticle::create([
            'title'=>$this->title,
            'price'=>$this->price,
            'description'=>$this->description,
            'category'=>$this->category,
            'user'=>$this->user,
        ]);
        return redirect('/')->with([
            'success'=>'articolo creato con successo',
        ]);
    }

    public function mount(){
        // $Categories = Category::all();
        // dd($Categories);
        return view('livewire.article',[
            'Categories'=>$this->Categories,
        ]);
    }

    public function category(){

    }
}
