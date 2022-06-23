<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function create(){
        return view('users.register');
    }

    public function store(Request $request){
        $formFields = $request->validate([
            'name' => 'required|max:255',
            'email' => ['required','email',Rule::unique('users','email')],
            'phone_number' => 'required',
            'nsu_id' => 'required',
            'department' => 'required',
            'secondary_email' => 'required|email',
            'credit_complete' => 'required',
            'major_1' => 'required',
            'major_2' => 'required',
            'password' => ['required','confirmed']
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        auth()->login($user);

        return redirect('/')->with('message','User created & logged in');
    }

    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message','You have been logged out');
    }

    public function login(){
        return view('users.login');
    }

    public function authenticate(Request $request){
        $formFields = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields,$request->remember)) {
            $request->session()->regenerate();

            return redirect('/')->with('message','You are logged in!');
        }
        return back()->withErrors(['email'=>'Invalid credentials'])->onlyInput('email');
    }

    public function profile(){
        return view('users.profile');
    }


    public function profileEdit(Request $request)
    {
        $user = auth()->user();

        $formFields = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'nsu_id' => 'required',
            'department' => 'required',
            'secondary_email' => 'required|email',
            'credit_complete' => 'required',
            'major_1' => 'required',
            'major_2' => 'required'
        ]);
        $user->update($formFields);


        return back()->with('message', 'Post successfully updated');
    }
}
