<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['Category_id', 'title', 'slug', 'content', 'is_published'];

    // One to Many Reverse
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //Many to Many  
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

}
