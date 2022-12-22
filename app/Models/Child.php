<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Child extends Model
{
    use HasFactory;

    protected $table = 'child';
    protected $fillable = [
        'score',
        'birthdate',
        'level',
        'user_id',
    ];

    public function childWords(): HasMany
    {
        return $this->hasMany(ChildWord::class);
    }

    public function childArticles(): HasMany
    {
        return $this->hasMany(ChildArticle::class);
    }

    public function eventSubscriptions(): HasMany
    {
        return $this->hasMany(EventSubscription::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


}
