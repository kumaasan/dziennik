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

        $grades = Grade::select('grade', 'subject_id', 'weight')->get();
//        dd($grades);
        if ($grades->isEmpty()) {
            $floorAvg = 0;
            return view('allSubjects')->with('subjects', $subjects)->with('floorAvg', $floorAvg);
        }

        foreach ($subjects as $subject) {
            $sum = 0;
            $count = 0;
            foreach ($subject->grades as $grade){
                $sum += $grade->grade * $grade->weight;
                $count += 1 * $grade->weight;
            }
            if($count)
                $subject->average = round($sum / $count, 2);
            else
                $subject->average = 0;
        }

        return view('allSubjects')->with(['subjects' => $subjects]); // ASOCJACJA KURWAAAA
    }

    public function selectedSubject(Request $request){
        $request->get('subjects');

        $subject = Subject::where('id', '=', $request->get('subjects'))->first();

        $grades = Grade::join('subjects', 'subjects.id', '=', 'grades.subject_id')
            ->where('subjects.id', '=', $subject->id)
            ->groupBy('grades.subject_id')->average('grades.grade')->get();

        dd($grades);

        return view('selectedSubject')->with('subject', $subject)->with('grades', $grades);
    }
}
