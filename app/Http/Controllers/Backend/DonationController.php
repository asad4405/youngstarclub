<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $donations = Donation::where('status', 1)->orderBy('position', 'DESC')->get();
        return view('Backend.donation.index', compact('donations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $programs = Program::where('status', 1)->orderBy('position', 'DESC')->get();
        return view('Backend.donation.create', compact('programs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $donation             = new Donation();

        $donation->program_id = $request->program_id;
        $donation->user_id    = Auth::id();
        $donation->name       = $request->name;
        $donation->amount     = $request->amount;
        $donation->address    = $request->address;
        $donation->date       = $request->date;
        $donation->email      = $request->email;
        $donation->position   = $request->position;
        $donation->status     = $request->status;

        $donation->save();
        return redirect()->route('admin.donation.index')->with('success', 'New Donation Added Successfull!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('Backend.donation.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $donation = Donation::find($id);
        $programs = Program::where('status', 1)->orderBy('position', 'DESC')->get();
        if ($donation->user_id != Auth::id()) {
            return back()->with('error', 'No Edited!');
        }
        return view('Backend.donation.edit', compact('donation', 'programs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $donation             = Donation::find($id);

        $donation->program_id = $request->program_id;
        $donation->user_id    = Auth::id();
        $donation->name       = $request->name;
        $donation->amount     = $request->amount;
        $donation->address    = $request->address;
        $donation->date       = $request->date;
        $donation->email      = $request->email;
        $donation->position   = $request->position;
        $donation->status     = $request->status;

        $donation->update();
        return redirect()->route('admin.donation.index')->with('success', 'Donation Updated Successfull!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $donation = Donation::find($id);
        if ($donation->user_id != Auth::id()) {
            return back()->with('error', 'No Deleted!');
        }
        $donation->delete();

        return redirect()->route('admin.donation.index')->with('delete-success', 'Donation Deleted Successfull!');
    }
}
