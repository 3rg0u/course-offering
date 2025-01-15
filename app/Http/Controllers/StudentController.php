<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Record;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{


    public function dashboard()
    {
        return view('student.dashboard');
    }
    public function studentRegistrations()
    {
        $user = Auth::user();
        $unsub_courses = Course::whereDoesntHave('records', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })->get();

        return view('student.registration.index', compact('unsub_courses'));
    }



    public function joinCourse($course_id)
    {
        $user = Auth::user();
        Record::create([
            'user_id' => $user->id,
            'course_id' => $course_id
        ]);


        return back()->with('success', 'Joined course ' . $course_id . ' successfully!');
    }



    public function enrolledCourses()
    {
        $courses = Auth::user()->courses;
        return view('student.course.index', compact('courses'));
    }



    public function showReportCard($course_id)
    {
        $record = Record::where('user_id', Auth::user()->id)->where('course_id', $course_id)->first();
        $course = Course::find($course_id);

        return view('student.course.show', compact('record', 'course'));
    }


    public function leaveCourse($course_id)
    {
        Record::where('user_id', Auth::user()->id)->where('course_id', $course_id)->first()->delete();
        return redirect('/student/courses')->with('success', 'Left course ' . $course_id . ' successfully!');
    }



    public function showProfile()
    {
        $user = Auth::user();
        return view('student.profile.index', compact('user'));
    }


    public function updateInfo(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required'
        ]);

        /**
         * @var User $user
         */
        $user = Auth::user();
        $user->update(
            [
                'name' => self::normalizeName($validated['name']),
                'email' => $validated['email'],
                'password' => Hash::make($validated['password'])
            ]
        );
        return back()->with('success', 'Updated successfully!');
    }


    private static function normalizeName(string $str)
    {
        return ucwords(strtolower($str));
    }

}
