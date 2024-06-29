<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('homePage');


Route::get('/przedmioty', [\App\Http\Controllers\SubjectController::class, 'showAllSubjects'])->name('subject');

Route::post('/przedmioty/oceny', [\App\Http\Controllers\SubjectController::class, 'selectedSubject'])->name('showSubjects');

Route::post('/przedmioty/oceny/srednia', [\App\Http\Controllers\GradeController::class, 'addGrade'])->name('addGrade');

Route::get('/przedmioty/wszystkiePrzedmioty', [\App\Http\Controllers\SubjectController::class, 'showSubjectPage'])->name('subject.showAll');
