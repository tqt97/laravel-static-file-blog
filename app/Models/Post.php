<?php

namespace App\Models;

use Spatie\Sheets\Sheet;

class Post extends Sheet
{
    // use HasFactory;
    public function getUrlAttribute(): string
    {
        return url($this->slug);
    }

}
