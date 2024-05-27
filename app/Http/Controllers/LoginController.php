<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\DatLoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login pages.login');
    }

    public function Data_Login(DatLoginRequest $request){
        // return view('login pages.login');

        $user = User::where('email',$request->email)->first();
        // dd($user->password);
        // dd($user->email)

        $cheak = Hash::check($request->password,$user->password);

        Auth::attempt($request->except('_token'));

        return to_route('crud.index');

    }
    public function logout(){
        $user = Auth::user();
       Auth::logout( $user);
       return to_route('login');
    }
}
