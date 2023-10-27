<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    function index()
    {
        return view('login');
    }
    function validate_login(Request $request)
    {
        $request->validate([
            'email' =>  'required',
            'password'  =>  'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials))
        {
            return redirect('userProfile');
        }

        return redirect('login')->with('success', 'Login details are not valid');
    }


    function logout()
    {
        Session::flush();

        Auth::logout();

        return Redirect('/');
    }

    public function userProfile(User $user)
    {
        // $user = User::where('email')
        // $user->password = Hash::make($request->password);

        return view('userProfile', array('user' => Auth::user()) );
    }

    public function update(Request $request){
        $request->validate([
            'first_name'=> 'required',
            'last_name'=> 'required',
            'gender'=> 'required',
            'email' => 'required',
            'password'=> 'required|min:8',
            'image',
        ]);
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
        $user = Auth::user();
        $user->update($input);
        if ($user)
        {
            return view('userProfile', array('user' => Auth::user()) )->with('error','');
        }
    }
}
