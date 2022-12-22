<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WordCategory extends Model
{
    use HasFactory;

    protected $table = 'word_category';
    protected $fillable = [
        'word_id',
        'category_id',
    ];

}
