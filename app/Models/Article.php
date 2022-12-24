<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article extends Model
{
    use HasFactory;

    protected $table = 'article';
    public $timestamps = false;
    protected $fillable = [
        'title',
        'text',
        'teacher_id',
    ];

    public function childArticles(): HasMany
    {
        return $this->hasMany(ChildArticle::class);
    }

    public function articleQuestions(): HasMany
    {
        return $this->hasMany(ArticleQuestion::class);
    }

    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }

}
