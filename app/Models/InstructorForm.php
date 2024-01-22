<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InstructorForm extends Model
{
    use SoftDeletes;
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    protected $table = 'instructor_form';
}
