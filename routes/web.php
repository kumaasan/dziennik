<?php

use App\Http\Controllers\SubjectController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SubjectController::class, 'homeController'] )->name('homePage');

Route::get('/przedmioty', [SubjectController::class, 'showAllSubjects'])->name('subject');

Route::post('/przedmioty/oceny/srednia', [GradeController::class, 'addGrade'])->name('addGrade');

Route::get('/przedmioty/wszystkiePrzedmioty', [SubjectController::class, 'showSubjectPage'])->name('subject.showAll')->middleware('auth');

Route::view('logowanie', 'loginPage')->name('loginPage');

Route::post('/logowanie', [UserController::class, 'login'])->name('login');

Route::get('/konto/zmienHaslo',[UserController::class, 'resetPasswordForm'])->name('password.reset.form')->middleware('auth');

Route::get('/logowanie/tworzenieKonta', [UserController::class, 'createAccountForm'])->name('create.account.form')->middleware('guest');

Route::post('/logowanie/tworzenieKonta', [UserController::class, 'store'])->name('create.account')->middleware('guest');

Route::get('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/nowePrzedmioty', [SubjectController::class, 'newSubject'])->name('subject.addNewSubject')->middleware('auth');

Route::post('/nowePrzedmioty/dodaj', [SubjectController::class, 'addNew'])->name('subject.addNew')->middleware('auth');

Route::post('/usunPrzedmioty', [SubjectController::class, 'deleteSubject'])->name('subject.delete')->middleware('auth');

Route::get('/konto', [UserController::class, 'account'])->name('account.show')->middleware('auth');

Route::patch('/konto/edytuj', [UserController::class, 'updateAccount'])->name('account.update')->middleware('auth');
#change password
Route::patch('/konto/zmienHaslo', [UserController::class, 'changePassword'])->name('account.changePassword')->middleware('auth');

Route::view('/edytujOceny', 'editGrade')->name('edit.grade')->middleware('auth');

Route::get('/edytujOceny', [SubjectController::class, 'editGrades'])->name('edit.grade')->middleware('auth');

Route::delete('edytujOceny', [GradeController::class, 'deleteGrade'])->name('delete.grade')->middleware('auth');

Route::get('/kontakt', [UserController::class, 'showContactPage'])->name('contact.page');

Route::view('/politykaPrywatnosci', 'privacyPolicy')->name('policy.page');
