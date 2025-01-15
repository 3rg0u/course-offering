<?php

namespace App\Http\Controllers;

use App\Models\Record;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfessorController extends Controller
{
    public function showStudents()
    {
        $students = User::where('type', 'std')->get();
        return view('professor.student.index', compact('students'));
    }


    public function addStudent(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'email|unique:users',
            'password' => 'required',
        ]);

        $validated['name'] = self::normalizeName($validated['name']);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        return back()->with('success', 'Account created successfully!');


    }



    public function updateInfo(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'email|unique:users',
            'password' => 'required',
        ]);

        $validated['name'] = self::normalizeName($validated['name']);
        User::where('id', $id)->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        return back()->with('success', 'Updated successfully!');
    }


    public function deleteStudent($id)
    {
        $user = User::findOrFail($id);
        Record::where('user_id', $id)->delete();
        $user->delete();

        return back()->with('success', 'Removed');
    }


    private static function normalizeName(string $str)
    {
        return ucwords(strtolower($str));
    }



    public function showProfile()
    {
        $user = Auth::user();
        return view('professor.profile.index', compact('user'));
    }
}
