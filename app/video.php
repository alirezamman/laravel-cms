<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    public function tags()
    {
        return $this->morphToMany(tag::class, 'taggable');
    }
}
