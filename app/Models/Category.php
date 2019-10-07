<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function scopeParents(Builder $builder)
    {
        $builder->whereNull('parent_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class);
    }
}
