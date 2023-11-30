<?php

namespace App\Http\Controllers;

use App\Models\Lecturers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class LecturersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lecturer = Lecturers::all();
        return view('backend.lecturers.index',compact('lecturer'));
    }
    public function on()
    {
        $lecturer = Lecturers::where('status','on')->get();
        return view('backend.lecturers.on',compact('lecturer'));

    }
    public function off()
    {
        $lecturer = Lecturers::where('status','off')->get();
        return view('backend.lecturers.off',compact('lecturer'));

    }
    public function updateStatus(Request $request, $id)
    {
        $lecturers = Lecturers::find($id);
        $lecturers->status = $request->status;
        $lecturers->save();
        return redirect()->back();

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.lecturers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'code' => ['required','unique:lecturers'],
            'name' => ['required'],
            'gender' => ['required','string',Rule::in(['Laki - Laki','Perempuan'])],
            'phone_number'=>['required','numeric'],
            'email'=>['required','email','unique:lecturers,email'],
            'status'=>['required'],
            'password'=>['required','string','min:8','confirmed'],
            'role'=>['required','string'],
        ]);
        $lecturer = new Lecturers;
        $lecturer->code = $request->get('code');
        $lecturer->name = $request->get('name');
        $lecturer->gender = $request->get('gender');
        $lecturer->phone_number = $request->get('phone_number');
        $lecturer->email = $request->get('email');
        $lecturer->status = $request->get('status');
        $lecturer->password = Hash::make($request->get('password'));
        $lecturer->role = $request->get('role');
        $lecturer->save();
        return redirect('lecturers')->with('msg', 'Add New Lecturer Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $lecturer=Lecturers::findOrFail($id);
        return view('backend.lecturers.edit', ['lecturers' => $lecturer]);
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
            'code'=>['required',Rule::unique('lecturers')->ignore($id)],
            'name' => ['required'],
            'gender' => ['required','string',Rule::in(['Laki - Laki','Perempuan'])],
            'phone_number'=>['required','numeric'],
            'email'=>['required','email',Rule::unique('lecturers')->ignore($id)],
            'role'=>['required','string'],
        ]);
        $lecturer = Lecturers::where('id',$id)->first();
        $lecturer->update($request->all());
        return redirect('lecturers')->with('msg', 'Update User Successfully');
    }

    public function updatePassword(Request $request, $id){
        $this->validate($request,[
            'password' => ['required','string','min:8','confirmed']
        ]);
        $lecturer = Lecturers::find($id);
        $lecturer->password = Hash::make($request->password);
        $lecturer->save();
        return redirect('lecturers')->with('msg','Update Password Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $course = Lecturers::findOrFail($id);
        $course->delete();

        return redirect('lecturers')->with('msg', 'Lecturer deleted successfully');
    }
}
