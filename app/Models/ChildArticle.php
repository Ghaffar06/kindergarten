<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildArticle extends Model
{
    use HasFactory;
    protected $table = 'child_article';
    protected $fillable = [
        'max_score'
    ];
}
