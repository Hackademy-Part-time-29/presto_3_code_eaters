<?php

namespace App\Livewire;


use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use App\Models\Article as ModelsArticle;

class Article extends Component{
    use WithFileUploads;

    public $images = [];
    public $temporary_images;

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
        return view('livewire.create.article');
    }

    public function store(){

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
        return view('livewire.create.article',[
            'Categories'=>$this->Categories,
        ]);
    }





        public function updetedTemporaryImages(){
        if ($this->validate([
            'temporary_images*' => 'image|max:1024',
            'temporary_images' => 'max:6'
        ])){
            foreach($this->teporary_images as $image){
                $this->images[] = $image;
            }
        }
    }





        public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images)))  {
            unset($this->images[$key]);
        }
    }

}
