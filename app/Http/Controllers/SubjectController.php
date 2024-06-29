<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Grade;
use Illuminate\Http\Request;


class SubjectController extends Controller
{
    public function showAllSubjects(){
        $subjects = Subject::all();

        return view('subjects')->with('subjects', $subjects);
    }

    public function showSubjectPage(){
        $subjects = Subject::all();
        return view('allSubjects')->with('subjects', $subjects);
    }

    public function selectedSubject(Request $request){
        $request->get('subjects');

        $subject = Subject::where('id', '=', $request->get('subjects'))->first();

        $grades = Grade::join('subjects', 'subjects.id', '=', 'grades.subject_id')->where('subjects.id', '=', $subject->id)->get();

        return view('selectedSubject')->with('subject', $subject)->with('grades', $grades);
    }
}
