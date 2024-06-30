<?php

namespace App\Models;

use App\Models\MacroCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'macroCategory_id',
    ];

    public function macroCategory(): BelongsTo{
        return $this->belongsTo(MacroCategory::class, 'macroCategory_id', 'id');
    }

    public function articles() : HasMany{
        return $this->hasMany(Article::class);
    }
}
