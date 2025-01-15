<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    //


    public function update(Request $request, $course_id, $user_id)
    {

        $record = Record::where('course_id', $course_id)->where('user_id', $user_id)->first();
        $validated = $request->validate([
            'parti' => 'numeric|min:0|max:10',
            'midterm' => 'numeric|min:0|max:10',
            'final' => 'numeric|min:0|max:10',

        ]);
        $record->update([
            'parti' => $validated['parti'],
            'midterm' => $validated['midterm'],
            'final' => $validated['final'],
        ]);

        return back()->with('success', 'Grade for student ID ' . $user_id . ' updated successfully!');

    }
    public function destroy($course_id, $user_id)
    {
        $record = Record::where('course_id', $course_id)->where('user_id', $user_id)->first();
        $record->delete();
        return back()->with('success', 'Student ID ' . $user_id . ' removed successfully from course');
    }
}
