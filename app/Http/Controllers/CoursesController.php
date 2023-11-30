<?php

namespace App\Http\Controllers;

use App\Models\Concentrations;
use App\Models\Courses;
use App\Models\Lecturers;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $course = Courses::all();
        return view('backend.courses.index',compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $concentration = Concentrations::all();
        $lecturer = Lecturers::where('role','User')->where('status','on')->get();
        return view('backend.courses.create',compact('concentration','lecturer'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'code'=>['required','unique:courses'],
            'concentration_id'=>['required'],
            'name'=>['required'],
            'sks'=>['required','numeric'],
            'semester'=>['required','numeric'],
            'lecturer_id'=>['required'],
        ]);
        $course = new Courses;
        $course->code = $request->get('code');
        $course->concentration_id = $request->get('concentration_id');
        $course->name = $request->get('name');
        $course->sks = $request->get('sks');
        $course->semester = $request->get('semester');
        $course->lecturer_id = $request->get('lecturer_id');
        $course->lecturer_id = $request->get('lecturer_id');
        $course->save();
        return redirect('courses')->with('msg', 'Add New Courses Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $course=Courses::findOrFail($id);
        $concentration=Concentrations::all();
        return view('backend.courses.edit', ['courses' => $course,'concentration'=> $concentration]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'code'=>['required',Rule::unique('courses')->ignore($id)],
            'concentration_id'=>['required'],
            'name'=>['required'],
            'sks'=>['required','numeric'],
            'semester'=>['required','numeric'],
            'lecturer_id'=>['required'],
        ]);
        $course = Courses::findOrFail($id);
        $course->code = $request->code;
        $course->concentration_id = $request->concentration_id;
        $course->name = $request->name;
        $course->sks = $request->sks;
        $course->semester = $request->semester;
        $course->lecturer_id = $request->lecturer_id;
        $course->lecturer_id = $request->lecturer_id;
        $course->save();
        return redirect('courses')->with('msg', 'Update Courses Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $course = Courses::findOrFail($id);
        $course->delete();

        return redirect('courses')->with('msg', 'Course deleted successfully');
    }
}
