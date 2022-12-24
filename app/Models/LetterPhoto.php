<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LetterPhoto extends Model
{
    use HasFactory;

    protected $table = 'letter_photo';
    public $timestamps = false;
    protected $fillable = [
        'url',
        'letter',
        'is_small',
    ];
}
