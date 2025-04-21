@extends('Backend.layouts.master')
@section('maincontent')
    <!-- Default Basic Forms Start -->
    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <div class="my-2 pull-left">
                <h4 class="text-blue h4">Create Member Collection Section</h4>
            </div>
        </div>
        <form action="{{ route('admin.collection.update',$collection->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Member Name</label>
                <div class="col-sm-12 col-md-10">
                    <select name="member_id" class="form-control">
                        <option value="">Select Member Name</option>
                        @foreach ($members as $value)
                            <option @if($value->id) selected @endif value="{{ $value->id }}">{{ $value->name }}</option>
                        @endforeach
                    </select>
                    @error('program_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Amount</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="amount" type="number" value="{{ $collection->amount }}" />
                    @error('amount')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Date</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="date" type="date" value="{{ $collection->date }}" />
                    @error('date')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Position (optional)</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="position" type="number" value="{{ $collection->position }}" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Status</label>
                <div class="col-sm-12 col-md-10">
                    <select name="status" class="form-control">
                        <option @if($collection->status == 1) selected @endif value="1">Active</option>
                        <option @if($collection->status == 0) selected @endif value="0">Deactive</option>
                    </select>
                    @error('status')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class=" btn-list">
                <button type="submit" class="btn btn-primary active focus">
                    Update Collection
                </button>
            </div>
        </form>
    </div>
@endsection
