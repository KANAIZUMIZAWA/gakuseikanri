<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $student = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        $student = Student::all();
        return view('students.create' ,compact('students'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'grade' => 'required',
            'name' => 'required',
            'address' => 'required',
            'img_path' => 'nullable|image|max:2048',
            'comment' => 'nullable',
        ]);

        $student = new Student([
            'id' => $request->get('id'),
            'grade' => $request->get('grade'),
            'name' => $request->get('name'),
            'address' => $request->get('address'),
            'img_path' => $request->get('img_path'),
            'comment' => $request->get('comment'),
        ]);

        if($request->hasFile('img_path')){ 
            $filename = $request->img_path->getClientOriginalName();
            $filePath = $request->img_path->storeAs('student', $filename, 'public');
            $student->img_path = '/storage/' . $filePath;
        }

        $student->save();
        return redirect('students');
    }

    public function show(Student $student)
    {
        return view('students.show', ['student' => $student]);
    }

    public function edit(Student $student)
    {
        $student = Student::all();
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'img_path' => 'required',
        ]);

        $student->name = $request->name;
        $student->address = $request->address;
        $student->img_path = $request->img_path;

        $student->save();

        return redirect()->route('students.index')
            ->with('success','Student update successfully');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect('/students');
    }
}