<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function addGrade(Request $request){

        $request->validate([
            'subject_id' => 'required',
            'grade' => 'required|numeric|between:1,6',
            'weight' => 'required|numeric|between:1,6'
        ]);

        $grade = new Grade();
        $subject_id = $request->subject_id;
        $grade->subject_id = $subject_id;
        $grade->user_id = auth()->user()->id;
        $grade->weight = $request->input('weight');
        $grade->grade = $request->input('grade');
        $grade->save();
        $avg = $this->calcAvg();
        return redirect()->back()->with('avg', $avg);
    }
    public function calcAvg(){
        $grades = Grade::select('grade', 'weight')->get();
        $avg = 0;
        $count = 0;
        foreach($grades as $grade) {
            for ($i = 1; $i <= $grade->weight; $i++) {
                $avg += $grade->grade;
                $count++;
            }
        }
        $avg = $avg / $count;
        $avg += round($avg, 2);
        return $avg;

    }
}
