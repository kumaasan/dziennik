<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    //create new user
    public function store(Request $request)
    {
        $request->validate([
            'firstName' => ['required', 'string', 'max:255', 'min:3'],
            'lastName' => ['required','string', 'max:255', 'min:3'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required_with:password_confirmed', 'same:password_confirmed', 'min:7'],
            'password_confirmed' => ['required', 'min:7']
        ]);

        $user = new User();
        $user->first_name = $request->input('firstName');
        $user->last_name = $request->input('lastName');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        session()->flash('success', 'Konto zostało utworzone pomyślnie.');

        auth()->login($user);


        return redirect(route('homePage'));
    }
    public function logout(){

        auth()->logout();

        session()->flash('logout', 'Pomyślnie wylogowano.');

        return redirect(route('homePage'));
    }

    public function login(Request $request){
        $request->validate([
            'email' => ['required', 'email', 'max:255', 'exists:users,email'],
            'password' => ['required', 'min:7']
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            session()->flash('login', 'Pomyślnie zalogowano.');
            return redirect(route('homePage'));
        } else {
            return redirect()->back()
                ->withErrors(['password' => 'Nie prawidłowe dane logowania'])
                ->withInput($request->only('email'));
        }
    }

    public function updateAccount(Request $request)
    {
        if ($request->filled('minimal_average')) {
            $request->merge(['minimal_average' => str_replace(',', '.', $request->input('minimal_average'))]);
        }

        $request->validate([
            'new_first_name' => ['required', 'string', 'min:3'],
            'new_last_name' => ['required', 'string', 'min:3'],
        ]);

        if ($request->filled('minimal_average')) {
            $request->validate([
                'minimal_average' => ['nullable', 'numeric', 'between:1,2'],
            ]);
        }

        if (Auth::user()->email === $request->input('new_email')) {
            $request->validate([
                'new_email' => ['required', 'email'],
            ]);
        } else {
            $request->validate([
                'new_email' => ['required', 'email', 'unique:users,email'],
            ]);
        }

        $user = Auth::user();

        if ($request->filled('minimal_average')) {
            $user->minimal_avg = $request->minimal_average;
            $user->save();
        }

        $user->update([
            'first_name' => $request->input('new_first_name'),
            'last_name' => $request->input('new_last_name'),
            'email' => $request->input('new_email'),
        ]);

        session()->flash('editSuccess', 'Dane zmieniono pomyślnie.');

        return redirect(route('homePage'));

    }
    public function changePassword(Request $request)
    {
        $request->validate([
            'new_password' => ['required_with:new_password_confirmed', 'same:new_password_confirmed', 'min:7'],
            'new_password_confirmed' => ['required', 'min:7']
        ]);

        $user = Auth::user();
        $userEmail = Auth::user()->email;

        if($request->input('email') == $userEmail){
            $user->update([
                'password' => Hash::make($request->input('new_password'))
            ]);
        }

        session()->flash('successPassChange', 'Hasło zmieniono pomyślnie');

        return redirect(route('homePage'));
    }
    public function account(){
        $minimal_average = \auth()->user()->minimal_avg;
        return view('account')->with(['minimalAverage' => $minimal_average]);
    }

    public function resetPasswordForm(Request $request){

        return view('resetPassword');

    }

    public function createAccountForm(){
        return view('createAccount');
    }

}
