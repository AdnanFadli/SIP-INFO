<?php

namespace App\Http\Controllers;

use App\Models\Concentrations;
use Illuminate\Http\Request;

class ConcentrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $concentration = Concentrations::all();
        return view('backend.concentrations.index',compact('concentration'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.concentrations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>['required'],
        ]);
        $concentration = new Concentrations;
        $concentration->name = $request->get('name');
        $concentration->save();
        return redirect('concentration')->with('msg', 'Add New Concentration Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $concentration=Concentrations::findOrFail($id);
        return view('backend.concentrations.edit')->with('concentration', $concentration);
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
            'name' => ['required'],
        ]);
        $concentration = Concentrations::findOrFail($id);
        $concentration->name = $request->name;
        $concentration->save();

        return redirect('concentration')->with('msg', 'Update Concentration Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $concentration = Concentrations::findOrFail($id);
        $concentration->delete();

        return redirect('concentration')->with('msg', 'Concentration deleted successfully');
    }
}
