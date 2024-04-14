<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School_grades;

class School_gradesController extends Controller
{
    public function create()
    {
        return view('school_grades.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'grade'=>'required',
            'term'=>'required',
            'japanese'=>'required',
            'math'=>'required',
            'science'=>'required',
            'scocial_studies'=>'required',
            'music'=>'required',
            'home_economics'=>'required',
            'english'=>'required',
            'art'=>'required',
            'health_and_physical_education'=>'required',
        ]);

        $school_grades = new School_grades([
            'grade'=>$request->get('grade'),
            'term'=>$request->get('term'),
            'japanese'=>$request->get('japanese'),
            'math'=>$request->get('math'),
            'science'=>$request->get('science'),
            'scocial_studies'=>$request->get('scocial_studies'),
            'music'=>$request->get('music'),
            'home_economics'=>$request->get('home_economics'),
            'english'=>$request->get('english'),
            'art'=>$request->get('art'),
            'health_and_physical_education'=>$request->get('health_and_physical_education'),
        ]);
        $school_grades->save();
        return redirect('school_grades.create');
    }

    public function show(School_grades $school_grades)
    {
        return view('students.show', ['school_grades' => $school_grades]);
    }

    public function edit(School_grades $school_grades)
    {
        return view('school_grades.edit',compact('school_grades'));
    }

    public function update(Request $request, School_grades $school_grades)
    {
        $request->validate([
            'grade'=>'requied',
            'term'=>'required',
            'japanese'=>'required',
            'math'=>'required',
            'science'=>'required',
            'scocial_studies'=>'required',
            'music'=>'required',
            'home_economics'=>'required',
            'english'=>'required',
            'art'=>'required',
            'health_and_physical_education'=>'required',
        ]);

        $school_grades->grade = $request->grade;
        $school_grades->term = $request->term;
        $school_grades->japanese = $request->japanese;
        $school_grades->math = $request->math;
        $school_grades->science = $request->science;
        $school_grades->scocial_studies = $request->scocial_studies;
        $school_grades->music = $request->music;
        $school_grades->home_economics = $request->home_economics;
        $school_grades->english = $request->english;
        $school_grades->art = $request->art;
        $school_grades->health_and_physical_education = $request->health_and_physical_education;
        $school_grades->save();

        return redirect()->route('students.edit')
            ->with('success','Student updete successfully');
    }

    public function destroy(School_grades $school_grades)
    {
        $school_grades->delete();
        return redirect('school_grades.edit');
    }
}
