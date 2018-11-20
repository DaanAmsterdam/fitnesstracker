<?php

namespace App;

trait Taggable
{
    public function tag($tag)
    {
        return $this->tags()->attach($tag);
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable')->withTimestamps();
    }
}
