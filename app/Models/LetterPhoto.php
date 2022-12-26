<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LetterPhoto extends Model
{
    use HasFactory;

    protected $table = 'letter_photo';
    protected $fillable = [
        'url',
        'letter',
    ];
}
