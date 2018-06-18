<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    public function images() {
        $this->hasMany(App\Image::class, 'hero_image');
    }
}
