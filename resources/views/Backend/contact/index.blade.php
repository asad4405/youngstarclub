@extends('Backend.layouts.master')
@section('maincontent')
    <!-- Simple Datatable start -->
    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <div class="my-2 pull-left">
                <h4 class="text-blue h4">Contact Section</h4>
            </div>
            <div class="pull-right">
            </div>
        </div>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session('delete-success'))
            <div class="alert alert-danger">{{ session('delete-success') }}</div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <div class="pb-20">
            <table class="table data-table stripe hover nowrap">
                <thead>
                    <tr>
                        <th class="table-plus datatable-nosort">SL</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Status</th>
                        <th class="datatable-nosort">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="table-plus">1</td>
                        <td>{{ $contact->phone }}</td>
                        <td>৳ {{ $contact->email }}</td>
                        <td>{{ $contact->address }}</td>
                        <td>
                            @if ($contact->status == 1)
                                <span class="p-1 text-white rounded span bg-success">Active</span>
                            @else
                                <span class="p-1 text-white rounded span bg-danger">Dective</span>
                            @endif
                        </td>
                        <td>
                            <div class="dropdown">
                                <a class="p-0 btn btn-link font-24 line-height-1 no-arrow dropdown-toggle" href="#"
                                    role="button" data-toggle="dropdown">
                                    <i class="dw dw-more"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                    <a class="dropdown-item"
                                        href="{{ route('admin.setting.contact.edit', $contact->id) }}"><i
                                            class="dw dw-edit2"></i> Edit</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
