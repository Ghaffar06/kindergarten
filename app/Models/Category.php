<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';
    public $timestamps = false;
    protected $fillable = [
        'title',
    ];

    public function wordCategories(): HasMany
    {
        return $this->hasMany(WordCategory::class);
    }

}
