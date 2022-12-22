<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WordPhoto extends Model
{
    use HasFactory;
    protected $table = 'word_photo';
    protected $fillable = [
        'url',
    ];
}
