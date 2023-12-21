<?php

namespace App\Http\Controllers\instructors;

use App\Http\Controllers\Controller;
use App\Models\instructorForm;
use App\Models\Instructors;
use Illuminate\Support\Facades\Auth;

class Instructor extends Controller
{
    public function getInstructorState($id = null)
    {
        if (!isset($id)) {
            $id = Auth::user()->id;
        }
        $instructors = InstructorForm::where('user_id', $id)->get();

        return response()->json($instructors);
    }

}
