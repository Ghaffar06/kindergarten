<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleQuestion extends Model
{
    use HasFactory;

    protected $table = 'article_option';
    protected $fillable = [
        'option',
        'answer',
        'article_id',
    ];
}
