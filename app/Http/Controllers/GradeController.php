<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function addGrade(Request $request){
        $request->get('grades');

        dd($request->get('grades'));

    }
}
