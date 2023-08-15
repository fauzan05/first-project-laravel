<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $fillable = [
        'title',
        'content',
        'updated_at' 
    ];  

    public static function boot()
    {
        parent::boot();

        // static::creating(function($post){
        //     $post->slug = str_replace('', '-', $post->title);
        // });

        static::retrieved(function($titlePost){
            $titlePost = str_replace('', '-', $titlePost->title);
        });
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function totalComments()
    {
        return $this->comments()->count();        
    }

    public function scopeActive($query)
    {
        return $query->where('active', true);
    }
}
