<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Record;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        /**
         * @var Course $courses
         */

        $courses = Course::all();
        return view("professor.course.index", compact("courses"));
    }


    public function show($id)
    {
        $course = Course::findOrFail($id);
        $students = $course->users;
        $records = $course->records;

        $zipped = $students->zip($records);

        return view("professor.course.show", compact("course", 'zipped'));
    }




    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:courses',
            'intro' => 'required'
        ]);


        $validated['name'] = self::normalizeName($validated['name']);
        Course::create([
            'name' => $validated['name'],
            'intro' => $validated['intro'],
        ]);

        return redirect()->route('professor.course.index')->with('success', $validated['name'] . ' course added successfully!');
    }


    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);
        $validated = $request->validate([
            'name' => 'required|unique:courses',
            'intro' => 'required'
        ]);


        $validated['name'] = self::normalizeName($validated['name']);
        if (Course::where('name', $validated['name'])->exists()) {
            return back()->withErrors(['CourseNameError' => 'This name is already placed in database!'])->withInput();
        }

        Course::where('id', $id)->update([
            'name' => $validated['name'],
            'intro' => $validated['intro'],
        ]);

        return redirect()->route('professor.course.index')->with('success', 'Course ID ' . $id . ' updated successfully!');
    }


    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        Record::where('course_id', $id)->delete();
        $course->delete();

        return redirect()->route('professor.course.index')->with('success', 'Course ID: ' . $id . ' removed successfully!');
    }





    private static function normalizeName(string $str)
    {
        return ucwords(strtolower($str));
    }
}
