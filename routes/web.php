<?php

use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('homePage');


Route::get('/przedmioty', [\App\Http\Controllers\SubjectController::class, 'showAllSubjects'])->name('subject');

Route::post('/przedmioty/oceny', [\App\Http\Controllers\SubjectController::class, 'selectedSubject'])->name('showSubjects');

Route::post('/przedmioty/oceny/srednia', [\App\Http\Controllers\GradeController::class, 'addGrade'])->name('addGrade');

Route::get('/przedmioty/wszystkiePrzedmioty', [\App\Http\Controllers\SubjectController::class, 'showSubjectPage'])->name('subject.showAll');

Route::get('/logowanie', function (){ return view('loginPage');})->name('loginPage');

Route::post('/logowanie', [\App\Http\Controllers\UserController::class, 'login'])->name('login');

Route::post('/logowanie/odzyskiwanieHasla',[UserController::class, 'resetPassword'])->name('password.reset')->middleware('auth');

Route::get('/logowanie/odzyskiwanieHasla',[UserController::class, 'resetPasswordForm'])->name('password.reset.form')->middleware('auth');

Route::get('/logowanie/tworzenieKonta', [UserController::class, 'createAccountForm'])->name('create.account.form')->middleware('guest');

Route::post('/logowanie/tworzenieKonta', [UserController::class, 'store'])->name('create.account')->middleware('guest');

Route::get('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/nowePrzedmioty', [SubjectController::class, 'newSubject'])->name('subject.addNewSubject');

Route::post('/nowePrzedmioty/dodaj', [SubjectController::class, 'addNew'])->name('subject.addNew');
