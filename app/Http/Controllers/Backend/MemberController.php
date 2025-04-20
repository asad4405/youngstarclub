<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = User::where(['role'=>'member'])->orderBy('position','ASC')->get();
        return view('Backend.member.index',compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.member.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $member = new User();

        $member->name = $request->name;
        $member->father_name = $request->father_name;
        $member->mother_name = $request->mother_name;
        $member->phone = $request->phone;
        $member->email = $request->email;
        $member->birthday_date = $request->birthday_date;
        $member->present_address = $request->present_address;
        $member->permanent_address = $request->permanent_address;
        $member->id_card = $request->id_card;
        $member->nationality = $request->nationality;
        $member->religion = $request->religion;
        $member->profession = $request->profession;
        $member->blood_group = $request->blood_group;
        $member->education = $request->education;
        $member->image = $request->image;
        $member->position = $request->position;
        $member->role = 'member';
        $member->status = 1;

        if ($request->file('image')) {
            $image = $request->file('image');

            $imageName          = 'club-member-' . microtime('.') . '.' . $image->getClientOriginalExtension();
            $imagePath          = 'public/Backend/uploads/member/';
            $image->move($imagePath, $imageName);
            $member->image   = $imagePath . $imageName;
        }

        $member->password = Hash::make('youngstarclub1234');

        $member->save();
        return redirect()->route('admin.member.index')->with('success','New Member Added Successfull!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('Backend.member.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $member = User::find($id);
        return view('Backend.member.edit',compact('member'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $member = User::find($id);

        $member->name = $request->name;
        $member->father_name = $request->father_name;
        $member->mother_name = $request->mother_name;
        $member->phone = $request->phone;
        $member->email = $request->email;
        $member->birthday_date = $request->birthday_date;
        $member->present_address = $request->present_address;
        $member->permanent_address = $request->permanent_address;
        $member->id_card = $request->id_card;
        $member->nationality = $request->nationality;
        $member->religion = $request->religion;
        $member->profession = $request->profession;
        $member->blood_group = $request->blood_group;
        $member->education = $request->education;
        $member->image = $request->image;
        $member->position = $request->position;
        $member->role = 'member';
        $member->status = 1;

        if ($request->file('image')) {
            $image = $request->file('image');

            if (!is_null($member->image) && file_exists($member->image)) {
                unlink($member->image);
            }

            $imageName          = 'club-member-' . microtime('.') . '.' . $image->getClientOriginalExtension();
            $imagePath          = 'public/Backend/uploads/member/';
            $image->move($imagePath, $imageName);
            $member->image   = $imagePath . $imageName;
        }

        $member->update();
        return redirect()->route('admin.member.index')->with('success', 'Member Updated Successfull!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $member = User::find($id);

        if (!is_null($member->image) && file_exists($member->image)) {
            unlink($member->image);
        }

        $member->delete();
        return redirect()->route('admin.member.index')->with('delete-success', 'New Member Added Successfull!');
    }
}
