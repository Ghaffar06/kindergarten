<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildWord extends Model
{
    use HasFactory;

    protected $table = 'child_word';
    protected $fillable = [
        'word_id',
        'user_id',
    ];

}
