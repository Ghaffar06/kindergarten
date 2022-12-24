<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ArticleQuestion extends Model
{
    use HasFactory;

    protected $table = 'article_option';
    public $timestamps = false;
    protected $fillable = [
        'option',
        'answer',
        'article_id',
    ];

    public function article(): BelongsTo
    {
        return $this->belongsTo(Article::class);
    }

}
