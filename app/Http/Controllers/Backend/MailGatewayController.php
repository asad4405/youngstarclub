<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\MailGateway;
use Illuminate\Http\Request;

class MailGatewayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mail_gateway = MailGateway::first();
        return view('Backend.api.mail_gateway', compact('mail_gateway'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mail_gateway                    = MailGateway::find($id);
        $mail_gateway->mail_mailer       = $request->mail_mailer;
        $mail_gateway->mail_host         = $request->mail_host;
        $mail_gateway->mail_port         = $request->mail_port;
        $mail_gateway->mail_username     = $request->mail_username;
        $mail_gateway->mail_password     = $request->mail_password;
        $mail_gateway->mail_address      = $request->mail_address;
        $mail_gateway->mail_from         = $request->mail_from;
        $mail_gateway->add_member        = $request->add_member;
        $mail_gateway->member_collection = $request->member_collection;
        $mail_gateway->donation          = $request->donation;
        $mail_gateway->expense           = $request->expense;
        $mail_gateway->status            = $request->status;
        $mail_gateway->update();
        return redirect()->back()->with('success','MailGateway Updated Success!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
