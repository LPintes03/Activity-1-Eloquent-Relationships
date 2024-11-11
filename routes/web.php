<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CourseController;
use App\Models\Course;
use App\Models\User;

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [UserController::class, 'getAllProfile'])->name('getAllProfile');
Route::get('/profiles', [ProfileController::class, 'getAllUsers'])->name('getAllUsers');
Route::get('/courses', [CourseController::class, 'getAllCourses'])->name('getAllCourses');
Route::get('/course ', [UserController::class, 'getAllCourses'])->name('getAllCourses');


// Route::get('/user', function () {
//     \App\Models\Profile::create([
//         'user_id' => 4,
//         'bio' => ' Turning caffeine into content',
//         'occupation' => 'Student',
//     ]);
// });



// Route::get('/c', function () {
//     // Create courses
//     $course1 = Course::create([
//         'course' => 'Data Structure and Algorithms',
//         'instructor' => 'Andrei Neagoie',
//     ]);

//     $course2 = Course::create([
//         'course' => 'Web Application Development',
//         'instructor' => 'Rob Percival',
//     ]);

//     $course3 = Course::create([
//         'course' => 'Organization Management',
//         'instructor' => 'Jose Portilla',
//     ]);

//     $course4 = Course::create([
//         'course' => 'Psychology',
//         'instructor' => 'Phil Ebiner',
//     ]);

//     $course5 = Course::create([
//         'course' => 'Criminology',
//         'instructor' => 'Stephen Grider',
//     ]);

//     // Fetch all users
//     $users = User::all();

//     // Array of all courses
//     $courses = [$course1, $course2, $course3, $course4, $course5];

//     // Attach each user to a random number of courses
//     foreach ($users as $user) {
//         // Determine a random number of courses to attach to the user
//         $numberOfCourses = rand(1, count($courses));

//         // Shuffle the courses array and pick the first N elements
//         shuffle($courses);
//         $randomCourses = array_slice($courses, 0, $numberOfCourses);

//         // Attach the user to the selected courses
//         foreach ($randomCourses as $course) {
//             $course->users()->attach($user->id);
//         }
//     }
// });
