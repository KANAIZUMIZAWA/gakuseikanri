<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $students = Student::all();
        $search = $request->input('search');
        $query = Student::query();
        if ($search = $request->search) {
            $query->where('name','like',"%{$search}%");
        }
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'img_path' => 'required|image|max:2048',
        ]);

        $student = new Student([
            'name' => $request->get('name'),
            'address' => $request->get('address'),
        ]);
        if($request->hasFile('img_path')){ 
            $filename = $request->img_path->getClientOriginalName();
            $filePath = $request->img_path->storeAs('students', $filename, 'public');
            $student->img_path = '/storage/' . $filePath;
        }

        $student->save();
        return redirect('students.create');
    }

    public function show(Student $student)
    {
        return view('students.show', ['student' => $student]);
    }

    public function edit(Student $student)
    {
        return view('students.edit',compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name'=>'required',
            'address'=>'required',
        ]);

        $student->name = $request->name;
        $student->address = $request->address;
        $student->save();

        return redirect()->route('students.edit')
            ->with('success','Student updete successfully');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return view('students.show');
    }
}
