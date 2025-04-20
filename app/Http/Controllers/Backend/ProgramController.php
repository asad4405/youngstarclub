<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programs = Program::orderBy('position','ASC')->get();
        return view('Backend.program.index',compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.program.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $program               = new Program();
        $program->program_name = $request->program_name;
        $program->position     = $request->position;
        $program->status       = $request->status;
        $program->save();
        return redirect()->route('admin.program.index')->with('success', 'New Program Added Successfull!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $program = Program::find($id);
        return view('Backend.program.edit',compact('program'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $program               = Program::find($id);
        $program->program_name = $request->program_name;
        $program->position     = $request->position;
        $program->status       = $request->status;
        $program->save();
        return redirect()->route('admin.program.index')->with('success', 'Program Updated Successfull!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $program = Program::find($id);
        $program->delete();
        return redirect()->route('admin.program.index')->with('delete-success', 'Program Deleted Successfull!');
    }
}
