<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Scout\Searchable;

class Article extends Model
{
    use HasFactory;
    use Searchable;
    
    protected $fillable = [
        'title',
        'price',
        'description',
        'category_id',
        'user_id'
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo{
        return $this->belongsTo(Category::class);
    }

    public function show(Article $article){
        return view('article.show',compact('article'));
    }
    public function setAccepted($value){
        $this->is_accepted = $value;
        $this->save();
        return true;
    }
    public static function toBeRevisedCount(){
        return Article::where('is_accepted', null)->count();
    }

    public function toSearchableArray()
    {
        return [
            'id'=> $this->id,
            'title' => $this->title,
            'price' => $this->price,
            'description' => $this->description,
            'category' => $this->category
        ];
    }
}

