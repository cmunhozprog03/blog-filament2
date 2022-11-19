<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Console\Concerns\InteractsWithIO;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = ['category_id', 'title', 'slug', 'content', 'is_published'];

    protected $casts = [
        "is_published" => "boolean",
    ];

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
