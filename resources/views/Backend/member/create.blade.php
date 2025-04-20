@extends('Backend.layouts.master')
@section('maincontent')
    <!-- Default Basic Forms Start -->
    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <div class="my-2 pull-left">
                <h4 class="text-blue h4">Create Club Member Section</h4>
            </div>
        </div>
        <form action="{{ route('admin.member.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">01. Full Name</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="name" type="text" value="{{ old('name') }}" />
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">02. Father's Name</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="father_name" type="text" value="{{ old('father_name') }}" />
                    @error('father_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">03. Mother's Name</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="mother_name" type="text" value="{{ old('mother_name') }}" />
                    @error('mother_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">04. Phone Number</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="phone" type="text" value="{{ old('phone') }}" />
                    @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">05. Email</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="email" type="text" value="{{ old('email') }}" />
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">06. Birthday Date</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="birthday_date" type="date" value="{{ old('birthday_date') }}" />
                    @error('birthday_date')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">07. Present Address</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="present_address" type="text"
                        value="{{ old('present_address') }}" />
                    @error('present_address')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">08. Permanent Address</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="permanent_address" type="text"
                        value="{{ old('permanent_address') }}" />
                    @error('permanent_address')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">09. National Id / Brith Registration No.</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="id_card" type="text" value="{{ old('id_card') }}" />
                    @error('id_card')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">10. Nationality</label>
                <div class="col-sm-12 col-md-10">
                    <select class="custom-select col-12" name="nationality">
                        <option value="Bangladeshi">Bangladeshi</option>
                    </select>
                    @error('nationality')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">11. Religion</label>
                <div class="col-sm-12 col-md-10">
                    <select class="custom-select col-12" name="religion">
                        <option value="Islam">Islam</option>
                    </select>
                    @error('religion')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">12. Profession</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="profession" type="text" value="{{ old('profession') }}" />
                    @error('profession')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">13. Blood Group</label>
                <div class="col-sm-12 col-md-10">
                    <select class="custom-select col-12" name="blood_group">
                        <option value="">Select Blood Group</option>
                        <option value="A+">A+</option>
                        <option value="B+">B+</option>
                        <option value="AB+">AB+</option>
                        <option value="O+">O+</option>
                        <option value="A-">A-</option>
                        <option value="B-">B-</option>
                        <option value="AB-">AB-</option>
                        <option value="O-">O-</option>
                    </select>
                    @error('blood_group')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">14. Education</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="education" type="text" value="{{ old('education') }}" />
                    @error('education')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">15. Photo [passport size image]</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="image" type="file" value="{{ old('image') }}" />
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Position (optional)</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="position" type="text" value="{{ old('position') }}" />
                    @error('position')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class=" btn-list">
                <button type="submit" class="btn btn-primary active focus">
                    Add Member
                </button>
            </div>
        </form>
    </div>
@endsection
