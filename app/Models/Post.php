<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;
use App\Models\Image;
use App\Models\Tag;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content'];

    public function comments()
    {
      return $this->hasMany(Comment::class);
    }

    public function image()
    {
      return $this->hasOne(Image::class);
    }

    public function tags()
    {
      return $this->belongsToMAny(Tag::class);
    }
}
