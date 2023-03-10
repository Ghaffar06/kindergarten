<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WordVoiceRecord extends Model
{
    use HasFactory;

    protected $table = 'word_voice_record';
    protected $fillable = [
        'url',
        'word_id',
    ];

    public function word(): BelongsTo
    {
        return $this->belongsTo(Word::class);
    }
}
