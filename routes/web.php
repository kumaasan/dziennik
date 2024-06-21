<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('homePage');


Route::get('/przedmioty', [\App\Http\Controllers\SubjectController::class, 'showAllSubjects'])->name('przedmioty');

Route::post('/przedmioty/oceny', [\App\Http\Controllers\SubjectController::class, 'selectedSubject'])->name('showSubjects');

//Route::post('/przedmioty/oceny/', [\App\Http\Controllers\GradeController::class, 'addGrade'])->name('addGrade');
