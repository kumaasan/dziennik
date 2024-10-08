<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Grade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SubjectController extends Controller
{
    public function showAllSubjects(){
        $subjects = Subject::all();
        return view('subjects')->with('subjects', $subjects);
    }
    public function countAverage($subjects) {
        foreach ($subjects as $subject) {
            $sum = 0;
            $count = 0;
            $isPassing = null;

            foreach ($subject->grades as $grade) {
                $sum += $grade->grade * $grade->weight;
                $count += 1 * $grade->weight;
            }

            if ($count) {
                $subject->average = round($sum / $count, 2);
                $isPassing = $subject->average > auth()->user()->minimal_avg;
                $subject->isPassing = $isPassing;

                $subject->final_grade = $this->calculateFinalGrade($subject->average);
            } else {
                $subject->average = 0;
                $subject->final_grade = "<span class='text-red-500'>Brak ocen</span>";
                $isPassing = 0;
            }
        }
        return $subjects;
    }


    public function calculateFinalGrade($average) {
        if ($average <= 1.75) {
            return 1;
        } elseif ($average <= 2.75) {
            return 2;
        } elseif ($average <= 3.75) {
            return 3;
        } elseif ($average <= 4.75) {
            return 4;
        } elseif ($average <= 5.20) {
            return 5;
        } else {
            return 6;
        }
    }


    public function showSubjectPage(){
        $userId = Auth::user()->id;
        $subjects = Subject::where('user_id', $userId)->get();
        $subjectName = $subjects->pluck('name');
        $isPassing = null;

        $subjects = $this->countAverage($subjects);
        $grades = Grade::select('grade', 'subject_id', 'weight')->get();


        $amount = Subject::where('user_id', $userId)->count();

        return view('allSubjects')->with([
            'subjects' => $subjects,
            'subjectName' => $subjectName,
            'amount' => $amount,
            'isPassing' => $isPassing
        ]);
    }

    public function editGrades()
    {
        $userId = Auth::id();
        $amountOfGrades = Grade::where('user_id', $userId)->count();


        return view('editGrade')->with(['grades', Grade::where('user_id', $userId)->get(),
            'subjects' => Subject::where('user_id', $userId)->get(),
            'amountOfGrades' => $amountOfGrades,
            ]);
    }

    public function addNew(Request $request){
        $request->validate([
            'newSubject' => ['required', 'string', 'max:255', 'min:2']
        ]);

        $subject = new Subject();
        $subject->name = $request->input('newSubject');
        $subject->user_id = $request->input('userId');
        $subject->save();

        session()->flash('added', 'Przedmiot dodano pomyślnie');
        return redirect()->back();
    }

    public function newSubject()
    {
        $userId = Auth::user()->id;
        $subjectName = Subject::where('user_id', $userId)->get();
        return view('addNewSubject')->with(['subjectName' => $subjectName]);
    }

    public function deleteSubject(Request $request)
    {

        $subject = Subject::where('id', $request->get('subjectId'))
            ->where('user_id', $request->get('userId'))
            ->first();

        if($subject){
            $subject->delete();
            session()->flash('deleted', 'Pomyślnie usunięto przedmiot');
        }
        return redirect()->back();
    }

    public function homeController() {
        $userId = auth::id();
        $grade = Grade::where('user_id', $userId)->get();
        $subjects = Subject::where('user_id', $userId)->get();

        $subjects = $this->countAverage($subjects);


        foreach($subjects as $subject){
            $subject->amountOfGrades = Grade::where('user_id', $userId)->where('subject_id', $subject->id)->count();
        }

        $sumOfAverages = 0;
        for($i = 0; $i < count($subjects); $i++){
            $sumOfAverages += $this->calculateFinalGrade($subjects[$i]->average);
        }
        if (count($subjects)){
        $finalAverage =  number_format($sumOfAverages / count($subjects), 2);
        }
        else{
            $finalAverage = "Brak";
        }
        return view('home')->with([
            'subjects' => $subjects,
            'grades' => $grade,
            'finalAverage' => $finalAverage
        ]);
    }

}
