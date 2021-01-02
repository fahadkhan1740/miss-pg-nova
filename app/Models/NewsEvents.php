<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static active()
 * @method static locale(string $getLocale)
 */
class NewsEvents extends Model
{
    use HasFactory;

    public function scopeLocale($query, $locale)
    {
        return $query->where('locale', $locale);
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
