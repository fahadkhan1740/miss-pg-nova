<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static locale(string $getLocale)
 */
class HomeBanner extends Model
{
    use HasFactory;

    public function scopeLocale($query, $locale)
    {
        return $query->where('locale', $locale);
    }
}
