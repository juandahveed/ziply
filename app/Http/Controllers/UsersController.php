<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller {

    public function login() {
        return view('logins.index');
    }

    public function authenticate() {

//        here we want to authenticate the user and redirect them to the dashboard

        $this->validate(request(), [
            'username' => 'required',
            'password' => 'required'
        ]);

//        why doesn't it authenticate if left blank and keep reading the code?
        $userObj = User::where('username', '=', request('username'))->first();
        
        if ($userObj) {

            $userObj->isLoggedIn = true;
            $userObj->save();
            setcookie('user_id', $userObj->id);
//            return view('dashboard.dashboard', compact('userObj'));
            return redirect()->action('UsersController@getUser');
            
        } else {

//            dd('UsersController: line 38 ************** broken');
//            return view('logins.index');
            return redirect('/');
        }
    }

    public function getUser() {

        $userObj = User::find($_COOKIE['user_id']);
        return view('dashboard.dashboard', compact('userObj'));
    }

}
