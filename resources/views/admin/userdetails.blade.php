@extends('admin/layout')
@section('page_title', 'Users');
@section('category_select', 'active');

@section('mainContent')
    <h1 class="mb10">All Details</h1>
    <a href="{{ url('manage_userdetail') }}">
        <button type="button" class="btn btn-success">Add Details</button>
    </a>
    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
            <strong>{{ session('status') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3 align-middle text-center">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile No</th>
                            {{-- <th>Gender</th> --}}
                            <th>Skill</th>
                            {{-- <th>City</th>
                            <th>Created At</th>
                            <th>Update At</th> --}}
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($empData as $data)
                            <tr>
                                <td>{{ $data['id'] }}</td>
                                <td>{{ $data['name'] }}</td>
                                <td>{{ $data['email'] }}</td>
                                <td>{{ $data['mobileno'] }}</td>
                                {{-- <td>{{ $data['gender'] }}</td> --}}
                                <td>{{ $data['skill'] }}</td>
                                {{-- <td>{{ $data['city'] }}</td>
                                <td>{{ $data['created_at'] }}</td>
                                <td>{{ $data['updated_at'] }}</td> --}}
                                <td>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="{{url('/viewpersonaldetail/'.$data['id'])}}"><button class="btn btn-secondary">View</button></a>
                                        <a href="{{ url('/editemployee/'.$data['id']) }}"><button class="btn btn-info mx-3">Edit</button></a>
                                        <button class="btn btn-danger">Delete</button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE-->
        </div>
    </div>
@endsection
