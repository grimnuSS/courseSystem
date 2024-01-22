<?php

namespace App\Http\Controllers\instructors;

use App\Http\Controllers\Controller;
use App\Models\instructorForm;
use App\Models\Instructors;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Instructor extends Controller
{

    public function getInstructors()
    {
        $instructors = Instructors::with('user')->get();

        return response()->json($instructors);
    }

    public function getInstructorState($id = null)
    {
        if (!isset($id)) {
            $id = Auth::user()->id;
        }
        $instructors = InstructorForm::where('user_id', $id)->get();

        return response()->json($instructors);
    }
    public function getInstructorForms()
    {
        $forms = InstructorForm::where('deleted_at', null)->with('user')->get();

        return response()->json($forms);
    }

    public function confirmForm($id)
    {
        $form = InstructorForm::find($id);

        if ($form) {
            $form->delete();
            $user = $form->user;
            $user->roleId = 3;
            $user->save();

            $instructor = new Instructors();
            $instructor->userId = $user->id;
            $instructor->save();

        }
    }

    public function dissmissForm($id)
    {
        $form = InstructorForm::find($id);
        if ($form) {
            $form->forceDelete();
        }
    }
}
