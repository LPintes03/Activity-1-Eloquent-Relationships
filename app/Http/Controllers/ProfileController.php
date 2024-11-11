<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use Illuminate\Http\Request;


class ProfileController extends Controller
{
    public function getAllUsers()
    {
        // $profile = User::find()->profile;
        $profile = Profile::all();
        return view('profiles', ['profiles' => $profile]);
    }
}
