<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Practice extends Model
{
    use Taggable;

    protected $guarded = [];
    protected $dates = ['date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
