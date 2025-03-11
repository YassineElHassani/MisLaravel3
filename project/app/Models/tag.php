<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class tag extends Model
{
    /** @use HasFactory<\Database\Factories\TagFactory> */
    use HasFactory;

    public function articles(): BelongsToMany
    {
        return $this->belongsToMany(article::class);
    }

    protected $fillable = [
        'name',
        'article_id',
    ];
}
