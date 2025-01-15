<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", function () {
    return view("auth.signin");
});

Route::get("/signin", function () {
    return view('auth.signin');
});

Route::post('/signin', [AuthController::class, 'handleSignIn']);

Route::post('/signout', [AuthController::class, 'handleSignOut']);






Route::middleware(['auth', 'professor.assert'])->group(function () {
    Route::prefix('professor')->group(function () {

        Route::get('/', function () {
            return view('professor.dashboard');
        })->name('professor.dashboard');


        Route::prefix('/courses')->group(function () {
            Route::get('/', [CourseController::class, 'index'])->name('professor.course.index');
            Route::post('/', [CourseController::class, 'store']);
            Route::get('/{id}', [CourseController::class, 'show']);
            Route::delete('/delete/{id}', [CourseController::class, 'destroy']);
            Route::put('/update/{id}', [CourseController::class, 'update']);
        });


        Route::prefix('/students')->group(function () {
            Route::get('/', [ProfessorController::class, 'showStudents'])->name('professor.student.index');
            Route::post('/', [ProfessorController::class, 'addStudent']);
            Route::delete('/delete/{id}', [ProfessorController::class, 'deleteStudent']);
            Route::put('/update/{id}', [ProfessorController::class, 'updateInfo']);
        });

        Route::prefix('/profile')->group(function () {
            Route::get('/', [ProfessorController::class, 'showProfile']);
            Route::put('/update/{id}', [ProfessorController::class, 'updateInfo']);
        });


        Route::prefix('/records')->group(function () {
            Route::delete('/delete/{course_id}/{user_id}', [RecordController::class, 'destroy']);
            Route::put('/update/{course_id}/{user_id}', [RecordController::class, 'update']);
        });
    });
});



Route::middleware(['auth', 'student.assert'])->group(function () {

    Route::prefix('student')->group(function () {
        Route::get('/', [StudentController::class, 'dashboard'])->name('student.dashboard');

        Route::prefix('/registration')->group(function () {
            Route::get('/', [StudentController::class, 'studentRegistrations'])->name('student.registration.index');
            Route::post('/join/{course_id}', [StudentController::class, 'joinCourse']);
        });


        Route::prefix('/courses')->group(function () {
            Route::get('/', [StudentController::class, 'enrolledCourses'])->name('student.courses.index');
            Route::get('/{course_id}', [StudentController::class, 'showReportCard']);
            Route::delete('/leave/{id}', [StudentController::class, 'leaveCourse']);
        });


        Route::prefix('/profile')->group(function () {
            Route::get('/', [StudentController::class, 'showProfile'])->name('student.profile.index');
            Route::put('/update', [StudentController::class, 'updateInfo']);
        });
    });
});
