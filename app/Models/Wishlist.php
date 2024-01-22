<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;
    public function courses()
    {
        return $this->belongsTo(Course::class, 'courseId');
    }

    protected $table = 'wishlist';
}
