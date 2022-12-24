<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ChildWord extends Model
{
    use HasFactory;

    protected $table = 'child_word';
    protected $fillable = [
        'word_id',
        'child_id',
    ];

    public function child(): BelongsTo
    {
        return $this->belongsTo(Child::class);
    }

    public function word(): BelongsTo
    {
        return $this->belongsTo(Word::class);
    }


}
