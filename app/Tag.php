<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function rides()
    {
        return $this->morphedByMany(Ride::class, 'taggable');
    }

    public function practices()
    {
        return $this->morphedByMany(Practice::class, 'taggable');
    }
}
