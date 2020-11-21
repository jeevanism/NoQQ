<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Redirector;
use DB;

class ProfileController extends Controller
{
    // check for user access levels
    public function authenticateUsers() {
        if (Auth::check()) {
        return $this->displayProfiles(); // display the member details 
           
        }
        else {
            return redirect()->route('home');
        }


    }

    // diaplay profiles for admin dashboard
    public function displayProfiles () {
         
    $users = DB::table('users')->get();
     return view('members',['users'=> $users ]);

    }
}
