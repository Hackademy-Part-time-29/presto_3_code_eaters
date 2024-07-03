<?php

namespace App\Livewire;


use Livewire\Component;
use App\Models\Category;
use App\Jobs\ResizeImage;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Models\Article as ModelsArticle;


class Article extends Component{

    use WithFileUploads;

    public $images = [];
    public $temporary_images;

    #[Validate('required',message:"Il titolo è richiesto")]
    #[Validate('min:3',message:"Il titolo è troppo corto")]
    public $title;

    public $Categories;
    
    #[Validate('required',message:"Il categoria è richiesta")]
    public $Categoria;

    public $price;

    #[Validate('required',message:"Il descrizione è richiesta")]
    public $description;

    // #[Validate('required',message:"Il categoria è richiesta")]
    public $category;  

    public $article;

    public function render(){
        $this->Categories = Category::all();
        return view('livewire.create.article');
    }

    public function store(){
        $this->validate();
        $this->article = ModelsArticle::create([
            'title'=>$this->title,
            'price'=>$this->price,
            'description'=>$this->description,
            'category_id'=>$this->Categoria,
            'user_id'=>Auth::id(),
        ]);

        if (count($this->images) > 0) {
            foreach ($this->images as $image) {
                $newFileName = "articles/{$this->article->id}";
                $newImage = $this->article->images()->create(['path' => $image->store($newFileName, 'public')]);
                dispatch(new ResizeImage($newImage->path, 300, 300));
            }
            File::deleteDirectory(storage_path('/app/livewire-tmp'));

            session()->flash('success','Articolo creato con successo');
            $this->cleanForm();

            return redirect('/')->with([
                'success'=>'articolo creato con successo',
            ]);
        };
    }

    public function mount(){
        return view('livewire.create.article',[
            'Categories'=>$this->Categories,
        ]);
    }

    public function updatedTemporaryImages(){
        if ($this->validate([
            'temporary_images.*' => 'image|max:1024',
            'temporary_images' => 'max:6'
        ])){
            foreach ($this->temporary_images as $image){
                $this->images[] = $image;
            }
        }
    }

    public function removeImage($key){
        if (in_array($key, array_keys($this->images)))  {
            unset($this->images[$key]);
        }
    }

    protected function cleanForm(){
        $this->title ='';
        $this->description = '';
        $this->Categoria ='';
        $this->price ='';
        $this->images = [];
    }
}