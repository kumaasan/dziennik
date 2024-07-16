<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    //create new user
    public function store(Request $request)
    {
        $request->validate([
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required','string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'min:7']
        ]);

        $user = new User();
        $user->first_name = $request->input('firstName');
        $user->last_name = $request->input('lastName');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();


        session()->flash('success', 'Konto zostało utworzone pomyślnie');


        return redirect(route('homePage'));
    }
    /**
     * My function for password reset
     */

//    public function login(Request $request){
//
//        $request->validate([
//            'email' => ['required', 'string', 'email', 'max:255'],
//            'password' => ['required', 'string', 'min:8']
//        ]);
//
//        $user = User::where('email', $request->input('email'))->first();
//    }

    public function resetPasswordForm(Request $request){

        return view('resetPassword');

    }

    public function createAccountForm(){
        return view('createAccount');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
