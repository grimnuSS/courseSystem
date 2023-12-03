<?php

namespace App\Http\Controllers\instructors;

use App\Http\Controllers\Controller;
use App\Models\instructorForm;
use Illuminate\Http\Request;

class InstructorRegisterForm extends Controller
{
    public function instructorFormSubmit(Request $request)
    {
        $instructor_form = new instructorForm();
        $instructor_form->user_id = $request->user_id;
        $instructor_form->egitim_deneyimi = $request->egitim_deneyimi;
        $instructor_form->video_deneyimi = $request->video_deneyimi;
        $instructor_form->estetiklik = $request->estetiklik;
        $instructor_form->kitleniz_buyuklugu = $request->kitleniz_buyuklugu;
        $instructor_form->tecrube_seviyesi = $request->tecrube_seviyesi;
        $instructor_form->save();
    }
}
