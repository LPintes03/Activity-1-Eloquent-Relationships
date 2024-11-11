<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function getAllCourses()
    {
        // $profile = User::find()->profile;
        $course = Course::all();
        return view('courses', ['courses' => $course]);
    }
}
