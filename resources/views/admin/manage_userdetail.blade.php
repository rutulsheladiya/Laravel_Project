@extends('admin/layout')
@section('page_title','Manage Category')
@section('category_select','active')
@section('mainContent')
    <h1 class="mb10">Add All Details</h1>
    <a href="{{url('userdetails')}}">
        <button type="button" class="btn btn-success">
            Back
        </button>
    </a>
    <div class="row m-t-30">
        <div class="col-md-12">
        <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="category_name" class="control-label mb-1">Category Name</label>
                                            <input id="category_name"  name="category_name" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="category_name" class="control-label mb-1">Parent  Category</label>
                                            <select id="parent_category_id"  name="parent_category_id" class="form-control" required>
                                            <option value="0">Select Categories</option>
                                            <option value="">1</option>
                                            <option value="">1</option>
                                            <option value="">1</option>
                                            <option value="">1</option>
                                            <option value="">1</option>
                                        </select>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="category_slug" class="control-label mb-1">Category Slug</label>
                                            <input id="category_slug"  name="category_slug" type="text" class="form-control" aria-required="true" aria-invalid="false" required>

                                        </div>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label for="image" class="control-label mb-1"> Image</label>
                                    <input id="category_image" name="category_image" type="file" class="form-control" aria-required="true" aria-invalid="false">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="is_home" class="control-label">Show In Home Page</label>
                                    <input id="is_home" name="is_home" type="checkbox" class="ml-2" aria-required="true" aria-invalid="false">
                                </div>
                                <div>
                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
