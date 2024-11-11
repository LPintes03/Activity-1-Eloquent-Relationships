<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\course;


use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAllProfile()
    {
        // $profile = User::find()->profile;
        $users = User::all();
        return view('users', ['users' => $users]);
    }

    public function getAllCourses()
    {
        // $profile = User::find()->profile;
        $users = User::with('courses')->get();
        return view('course', compact('users'));
    }
}
