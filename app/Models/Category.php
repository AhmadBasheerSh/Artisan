<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function users() {
        return $this->hasMany(User::class, 'category_id');
    }

    public function posts() {
        return $this->hasMany(Post::class, 'post_id');
    }
}
