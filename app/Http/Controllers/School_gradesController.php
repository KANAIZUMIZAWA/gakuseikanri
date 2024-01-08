<?php

namespace App\Http\Controllers;

use App\Models\School_grades;
use Illuminate\Http\Request;

class School_gradesController extends Controller
{
    public function create()
    {
        $school_grades = new School_grades();
        return view('school_grades.create' ,compact('school_grades'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'student_id' => 'required',
            'grade' => 'required',
            'term' => 'required',
            'japanese' => 'required',
            'math' => 'required',
            'science' => 'required',
            'social_studies' => 'required',
            'music' => 'required',
            'home_economics' => 'required',
            'english' => 'required',
            'art' => 'required',
            'health_and_physical_education' => 'required',
        ]);

        $school_grades = new School_grades([
            'id' => $request->get('id'),
            'student_id' => $request->get('student_id'),
            'grade' => $request->get('grade'),
            'term' => $request->get('term'),
            'japanese' => $request->get('japanese'),
            'math' => $request->get('math'),
            'science' => $request->get('science'),
            'social_studies' => $request->get('social_studies'),
            'music' => $request->get('music'),
            'home_economics' => $request->get('home_economics'),
            'english' => $request->get('english'),
            'art' => $request->get('art'),
            'health_and_physical_education' => $request->get('health_and_physical_education'),
        ]);

        $school_grades->save();
        return redirect('school_grades');
    }

    public function edit(School_grades $school_grades)
    {
        $student = School_grades::all();
        return view('school_grades.edit', compact('school_grades'));
    }

    public function update(Request $request, School_grades $school_grades)
    {
        $request->validate([
            'id' => 'required',
            'student_id' => 'required',
            'grade' => 'required',
            'term' => 'required',
            'japanese' => 'required',
            'math' => 'required',
            'science' => 'required',
            'social_studies' => 'required',
            'music' => 'required',
            'home_economics' => 'required',
            'english' => 'required',
            'art' => 'required',
            'health_and_physical_education' => 'required',
        ]);

        $school_grades->japanese = $request->japanese;
        $school_grades->math = $request->math;
        $school_grades->science = $request->science;
        $school_grades->social_studies = $request->social_studies;
        $school_grades->music = $request->music;
        $school_grades->home_economics = $request->home_economics;
        $school_grades->english = $request->english;
        $school_grades->art = $request->art;
        $school_grades->health_and_physical_education = $request->health_and_physical_education;
        
        $school_grades->save();

        return redirect()->route('school_grades.edit')
            ->with('success','School_grades update successfully');
    }

    public function destroy(School_grades $school_grades)
    {
        $student->delete();
        return redirect('/school_grades');
    }
}