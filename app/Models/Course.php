<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Course extends Model
{
    use Sluggable;

    public function user()
    {
        return $this->belongsTo(User::class, 'instructorsId');
    }
    public function course()
    {
        return $this->hasOne(Wishlist::class, 'courseId');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'categoryId');
    }
    public function content()
    {
        return $this->belongsTo(Content::class, 'courseId');
    }
    public function sluggable(): array
    {
        return [
            'courseSlug' => [
                'source' => 'title'
            ]
        ];
    }

    protected $table = 'courses';
}
