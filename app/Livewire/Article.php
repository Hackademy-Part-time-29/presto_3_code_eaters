<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use App\Models\Article as ModelsArticle;

class Article extends Component{

    #[Validate('required',message:"Il titolo è richiesto")]
    #[Validate('min:3',message:"Il titolo è troppo corto")]
    public $title;

    public $Categories;
    
    #[Validate('required',message:"Il prezzo è richiesto")]
    #[Validate('max:6',message:"Il prezzo è troppo alto")]

    public $Categoria;
    public $price;

    #[Validate('required',message:"Il descrizione è richiesta")]
    public $description;

    #[Validate('required',message:"Il categoria è richiesta")]
    public $category;  

    public function render(){
        $this->Categories = Category::all();
        return view('livewire.article');
    }

    public function store(){

        // dd('prova');
        // $this->validate();
        // dd('prova');
        // $validateData = $this->validate([
        //     'title'=>'required',
        //     'Categories'=>'required',
        //     'price'=>'required',
        //     'description'=>'required',
        //     'category'=>'required',
        //     'user'=>'required',
        // ]);

        ModelsArticle::create([
            'title'=>$this->title,
            'price'=>$this->price,
            'description'=>$this->description,
            'category_id'=>$this->Categoria,
            'user_id'=>Auth::id(),
        ]);

        session()->flash('success','User successfully created.');
        
        $this->reset();

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
