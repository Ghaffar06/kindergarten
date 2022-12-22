<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WordVoiceRecord extends Model
{
    use HasFactory;
    protected $table = 'word_voice_record';
    protected $fillable = [
        'url',
    ];
}
