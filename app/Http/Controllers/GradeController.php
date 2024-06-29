<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function addGrade(Request $request){

        $grade = new Grade();

        $grade->weight = $request->input('weight');
        $grade->grade = $request->input('grade');
        $grade->save();


        return redirect()->back();
    }
}
