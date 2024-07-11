<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Models\Article as ModelsArticle;

class Article extends Component
{
    use WithFileUploads;

    public $images = [];
    public $temporary_images;
    public $Categories;
    public $price;
    public $article;

    #[Validate('required', message: 'ui.titlerequired')]
    #[Validate('min:3', message: 'ui.shorttitle')]
    public $title;

    #[Validate('required', message: 'ui.categoryrequired')]
    public $Categoria;

    #[Validate('required', message: 'ui.descriptionrequired')]
    public $description;

    public function render()
    {
        $this->Categories = Category::all();
        return view('livewire.create.article', [
            'Categories' => $this->Categories,
        ]);
    }

    public function store()
    {
        $this->validate();

        $this->article = ModelsArticle::create([
            'title' => $this->title,
            'price' => $this->price,
            'description' => $this->description,
            'category_id' => $this->Categoria,
            'user_id' => Auth::id(),
        ]);

        if (count($this->images) > 0) {
            foreach ($this->images as $image) {
                $newFileName = "articles/{$this->article->id}";
                $newImage = $this->article->images()->create(['path' => $image->store($newFileName, 'public')]);
                RemoveFaces::withChain([
                    new ResizeImage($newImage->path, 300, 300),
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id),

                ])->dispatch($newImage->id);
            }
            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }
        

        session()->flash('success', __('ui.successarticle'));
        $this->cleanForm();

        return redirect('/')->with('success', __('ui.successarticle'));
    }

    public function mount()
    {
        $this->Categories = Category::all();
    }

    public function updatedTemporaryImages()
    {
        $this->validate([
            'temporary_images.*' => 'image|max:1024',
            'temporary_images' => 'max:6'
        ]);

        foreach ($this->temporary_images as $image) {
            $this->images[] = $image;
        }
    }

    public function removeImage($key)
    {
        if (isset($this->images[$key])) {
            unset($this->images[$key]);
        }
    }

    protected function cleanForm()
    {
        $this->title = '';
        $this->description = '';
        $this->Categoria = '';
        $this->price = '';
        $this->images = [];
    }
}
