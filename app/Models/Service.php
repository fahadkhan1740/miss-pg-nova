<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static active()
 * @method static locale(string $getLocale)
 */
class Service extends Model
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
