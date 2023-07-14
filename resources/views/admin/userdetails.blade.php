@extends('admin/layout')
@section('page_title', 'Users');
@section('category_select', 'active');

@section('mainContent')
    <h1 class="mb10">All Details</h1>
    <a href="{{ url('manage_userdetail') }}">
        <button type="button" class="btn btn-success">Add Details</button>
    </a>

    <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Mobile No</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Rutul</td>
                            <td>8320893080</td>
                            <td colspan="2">
                                <a href="{{url('/update')}}"><button class="btn btn-info">Edit</button></a>
                                <button class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE-->
        </div>
    </div>
@endsection
