@extends('Backend.layouts.master')
@section('maincontent')
    <!-- Default Basic Forms Start -->
    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <div class="my-2 pull-left">
                <h4 class="text-blue h4">Edit Mail Gateway Section</h4>
            </div>
        </div>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form action="{{ route('admin.mail-gateway.update',$mail_gateway->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Mail Mailer</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="mail_mailer" type="text" value="{{ $mail_gateway->mail_mailer }}" />
                    @error('mail_mailer')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Mail Host</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="mail_host" type="text" value="{{ $mail_gateway->mail_host }}" />
                    @error('mail_host')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Mail Port</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="mail_port" type="text" value="{{ $mail_gateway->mail_port }}" />
                    @error('mail_port')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Mail Username</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="mail_username" type="text" value="{{ $mail_gateway->mail_username }}" />
                    @error('mail_username')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Mail Password</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="mail_password" type="text" value="{{ $mail_gateway->mail_password }}" />
                    @error('mail_password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Mail Address</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="mail_address" type="text" value="{{ $mail_gateway->mail_address }}" />
                    @error('mail_address')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Mail From</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="mail_from" type="text" value="{{ $mail_gateway->mail_from }}" />
                    @error('mail_from')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Add Member Email Notification</label>
                <div class="col-sm-12 col-md-10">
                    <select name="add_member" class="form-control">
                        <option @if($mail_gateway->add_member == 1) selected @endif value="1">Active</option>
                        <option @if($mail_gateway->add_member == 0) selected @endif value="0">Deactive</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label"> Member Collection Email Notification</label>
                <div class="col-sm-12 col-md-10">
                    <select name="member_collection" class="form-control">
                        <option @if($mail_gateway->member_collection == 1) selected @endif value="1">Active</option>
                        <option @if($mail_gateway->member_collection == 0) selected @endif value="0">Deactive</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label"> Donation Email Notification</label>
                <div class="col-sm-12 col-md-10">
                    <select name="donation" class="form-control">
                        <option @if($mail_gateway->donation == 1) selected @endif value="1">Active</option>
                        <option @if($mail_gateway->donation == 0) selected @endif value="0">Deactive</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label"> Expense Email Notification</label>
                <div class="col-sm-12 col-md-10">
                    <select name="expense" class="form-control">
                        <option @if($mail_gateway->expense == 1) selected @endif value="1">Active</option>
                        <option @if($mail_gateway->expense == 0) selected @endif value="0">Deactive</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Status</label>
                <div class="col-sm-12 col-md-10">
                    <select name="status" class="form-control">
                        <option @if($mail_gateway->status == 1) selected @endif value="1">Active</option>
                        <option @if($mail_gateway->status == 0) selected @endif value="0">Deactive</option>
                    </select>
                    @error('status')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class=" btn-list">
                <button type="submit" class="btn btn-primary active focus">
                    Update Mail Gateway
                </button>
            </div>
        </form>
    </div>
@endsection
