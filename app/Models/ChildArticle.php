<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ChildArticle extends Model
{
    use HasFactory;

    protected $table = 'child_article';
    public $timestamps = false;
    protected $fillable = [
        'max_score',
        'article_id',
        'child_id',
    ];

    public function child(): BelongsTo
    {
        return $this->belongsTo(Child::class);
    }

    public function article(): BelongsTo
    {
        return $this->belongsTo(Article::class);
    }

}
