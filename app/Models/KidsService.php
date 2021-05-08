<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static locale(string $getLocale)
 * @method static active()
 */
class KidsService extends Model
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
}
