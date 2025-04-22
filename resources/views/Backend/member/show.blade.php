@extends('Backend.layouts.master')
@section('maincontent')
    <!-- Simple Datatable start -->
    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <div class="my-2 pull-left">
                <h4 class="text-blue h4">Member Section</h4>
            </div>
            <div class="pull-right">
                <a href="{{ route('admin.member.create') }}" class="btn btn-primary btn-sm scroll-click"><i
                        class="fa fa-plus"></i> Create</a>
            </div>
        </div>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session('delete-success'))
            <div class="alert alert-danger">{{ session('delete-success') }}</div>
        @endif
        <div class="pb-20">
            <style>
                .profile-container {
                    max-width: 900px;
                    margin: auto;
                    background: #fff;
                    border-radius: 15px;
                    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
                    overflow: hidden;
                }

                .profile-header {
                    background: linear-gradient(135deg, #0d6efd, #6610f2);
                    color: white;
                    padding: 80px 20px 30px;
                    text-align: center;
                    position: relative;
                }

                .profile-img {
                    width: 150px;
                    height: 150px;
                    border-radius: 50%;
                    object-fit: cover;
                    border: 5px solid #fff;
                    margin-top: -50px;
                }

                .profile-body {
                    padding: 40px 30px 30px;
                }

                .info-label {
                    font-weight: 600;
                    color: #6c757d;
                }
            </style>

            <div class="py-5 bg-light">

                <div class="profile-container">
                    <div class="profile-header">
                        <img src="{{ asset($member->image) }}"
                            alt="Profile Picture" class="profile-img">
                        <h2 class="mt-3 text-white">{{ env('APP_NAME') }} - {{ $member->name }} Profile</h2>
                    </div>
                    <div class="profile-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p><span class="info-label">Name:</span> {{ $member->name }}</p>
                                <p><span class="info-label">Father's Name:</span> {{ $member->father_name }}</p>
                                <p><span class="info-label">Mother's Name:</span> {{ $member->mother_name }}</p>
                                <p><span class="info-label">Phone:</span> {{ $member->phone }}</p>
                                <p><span class="info-label">Email:</span> {{ $member->email }}</p>
                                <p><span class="info-label">Birthday:</span> {{ $member->birthday_date }}</p>
                                <p><span class="info-label">Nationality:</span> Bangladeshi</p>
                            </div>
                            <div class="col-md-6">
                                <p><span class="info-label">Religion:</span> Islam</p>
                                <p><span class="info-label">Profession:</span> {{ $member->profession }}</p>
                                <p><span class="info-label">Blood Group:</span> {{ $member->blood_group }}</p>
                                <p><span class="info-label">Education:</span> {{ $member->education }}</p>
                                <p><span class="info-label">NID / Birth Reg. Card:</span> {{ $member->id_card }}</p>
                                <p><span class="info-label">Present Address:</span> {{ $member->present_address }}</p>
                                <p><span class="info-label">Permanent Address:</span> {{ $member->permanent_address }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
