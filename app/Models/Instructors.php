<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Instructors extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }

    protected $table = 'instructors';

}
