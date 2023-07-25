@extends('admin/layout')
@section('page_title', 'PersonalDetail');
@section('personal_select', 'active');
@section('mainContent')
    <h1 class="mb10">Personal Detail</h1>
    <a href="{{ url('userdetails') }}">
        <button type="button" class="btn btn-success">
            Back
        </button>
    </a>
    <div class="row m-t-30 justify-content-center">
        <div class="col-md-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card col-md-8">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="username" class="control-label mb-1">Id</label>
                                <input id="username" name="username" type="text" class="form-control"
                                    aria-required="true" aria-invalid="false" value="{{ $personaldata['id'] }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="username" class="control-label mb-1">Name</label>
                                <input id="username" name="username" type="text" class="form-control"
                                    aria-required="true" aria-invalid="false" value="{{ $personaldata['name'] }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="username" class="control-label mb-1">Email Address</label>
                                <input id="username" name="username" type="text" class="form-control"
                                    aria-required="true" aria-invalid="false" value="{{ $personaldata['email'] }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="username" class="control-label mb-1">Mobile Number</label>
                                <input id="username" name="username" type="text" class="form-control"
                                    aria-required="true" aria-invalid="false" value="{{ $personaldata['mobileno'] }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="username" class="control-label mb-1">Gender</label>
                                <input id="username" name="username" type="text" class="form-control"
                                    aria-required="true" aria-invalid="false" value="{{ $personaldata['gender'] }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="username" class="control-label mb-1">Skills</label>
                                <input id="username" name="username" type="text" class="form-control"
                                    aria-required="true" aria-invalid="false" value="{{ $personaldata['skill'] }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="username" class="control-label mb-1">City</label>
                                <input id="username" name="username" type="text" class="form-control"
                                    aria-required="true" aria-invalid="false" value="{{ $personaldata['city'] }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="username" class="control-label my-2">Image</label> <br>
                                <img src="{{asset('storage/Media/'.$personaldata['Image'])}}" class="img-fluid rounded-top" alt="" height="200px" width="200px">
                            </div>
                            <div class="form-group">
                                <label for="username" class="control-label mb-1">Created At</label>
                                <input id="username" name="username" type="text" class="form-control"
                                    aria-required="true" aria-invalid="false" value="{{ changeFormate($personaldata['created_at'],'d-M-Y h:i:s A')}}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="username" class="control-label mb-1">Updated At</label>
                                <input id="username" name="username" type="text" class="form-control"
                                    aria-required="true" aria-invalid="false" value="{{changeFormate( $personaldata['updated_at'] ,'d-M-Y h:i:s A')}}" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
