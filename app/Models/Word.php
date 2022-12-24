<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Word extends Model
{
    use HasFactory;

    protected $table = 'word';
    public $timestamps = false;
    protected $fillable = [
        'text',
        'score',
    ];

    public function wordPhotos(): HasMany
    {
        return $this->hasMany(WordPhoto::class);
    }

    public function wordVoiceRecords(): HasMany
    {
        return $this->hasMany(WordVoiceRecord::class);
    }

    public function wordCategories(): HasMany
    {
        return $this->hasMany(WordCategory::class);
    }

    public function childWords(): HasMany
    {
        return $this->hasMany(ChildWord::class);
    }

}
