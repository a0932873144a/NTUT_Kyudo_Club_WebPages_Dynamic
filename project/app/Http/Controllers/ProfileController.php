<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showProfile($userID)
    {
        return view('profile')->with('userID', $userID);
    }

    public function showProfileAdministrator($userID)
    {
        return view('profile_administrator')->with('userID', $userID);
    }
}
