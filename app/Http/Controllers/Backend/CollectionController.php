<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Collection;
use App\Models\User;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collections = Collection::orderBy('position','ASC')->get();
        return view('Backend.collection.index',compact('collections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $members = User::where('status', 1)->where('role','member')->orderBy('position', 'ASC')->get();
        return view('Backend.collection.create', compact('members'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $collection = new Collection();
        $collection->member_id = $request->member_id;
        $collection->amount = $request->amount;
        $collection->date = $request->date;
        $collection->position = $request->position;
        $collection->status = $request->status;
        $collection->save();
        return redirect()->route('admin.collection.index')->with('success', 'New Collection Added Successfull!');
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
        $collection = Collection::find($id);
        $members = User::where('status', 1)->where('role', 'member')->orderBy('position', 'ASC')->get();
        return view('Backend.collection.edit', compact('collection','members'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $collection = Collection::find($id);

        $collection->member_id = $request->member_id;
        $collection->amount = $request->amount;
        $collection->date = $request->date;
        $collection->position = $request->position;
        $collection->status = $request->status;
        $collection->update();
        return redirect()->route('admin.collection.index')->with('success', 'Collection Updated Successfull!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $collection = Collection::find($id);
        $collection->delete();
        return redirect()->route('admin.collection.index')->with('delete-success', 'Collection Delete Successfull!');
    }
}
