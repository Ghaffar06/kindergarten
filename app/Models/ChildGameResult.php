<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ChildGameResult extends Model
{
    use HasFactory;

    protected $table = 'child_game_result';
    public $timestamps = false;
    protected $fillable = [
        'passed',
        'letter',
        'child_id',
    ];

    public function child(): BelongsTo
    {
        return $this->belongsTo(Child::class);
    }

}
