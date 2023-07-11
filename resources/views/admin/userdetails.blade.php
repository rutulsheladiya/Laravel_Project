@extends('admin/layout')
@section('page_title', 'Category');
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
                            <th>Category Name</th>
                            <th>Category Slug</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE-->
        </div>
    </div>
@endsection
