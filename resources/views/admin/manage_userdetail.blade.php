@extends('admin/layout')
@section('page_title', 'Manage User')
@section('category_select', 'active')
@section('mainContent')
    <h1 class="mb10">Add All Details</h1>
    <a href="{{ url('userdetails') }}">
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
                            <form action="{{ url('/sendmanageuserdetail') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="username" class="control-label mb-1">Enter Name</label>
                                            <input id="username" name="username" type="text" class="form-control"
                                                aria-required="true" aria-invalid="false" placeholder="Entetr Name">
                                        </div>

                                        <div class="col-md-4">
                                            <label for="email" class="control-label mb-1">Enter Email</label>
                                            <input id="email" name="email" type="email" class="form-control"
                                                aria-required="true" aria-invalid="false" placeholder="Entetr Email">
                                        </div>

                                        <div class="col-md-4">
                                            <label for="mobileno" class="control-label mb-1">Enter Mobile Number</label>
                                            <input id="mobileno" name="mobileno" type="text" class="form-control"
                                                aria-required="true" aria-invalid="false"
                                                placeholder="Entetr Mobile Number">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <label for="">Select Gender</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    value="male">
                                                <label>Male</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    value="female">
                                                <label>Female</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    value="other">
                                                <label>Other</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group Skills">
                                                <label for="" class="py-2">Select Your Skills</label>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="HTML"
                                                        name="skill[]" value="HTML">
                                                    <label class="form-check-label">HTML</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="CSS"
                                                        name="skill[]" value="CSS">
                                                    <label class="form-check-label">CSS</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="jQuery"
                                                        name="skill[]" value="jQuery">
                                                    <label class="form-check-label">jQuery</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="PHP"
                                                        name="skill[]" value="PHP">
                                                    <label class="form-check-label">PHP</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="Laravel"
                                                        name="skill[]" value="Laravel">
                                                    <label class="form-check-label">Laravel</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="category_name" class="control-label mb-1">Select City</label>
                                            <select id="city" name="city" class="form-control">
                                                <option selected disabled>Select City</option>
                                                <option value="surat">Surat</option>
                                                <option value="ahmedabad">Ahmedabad</option>
                                                <option value="vadodara">Vadodara</option>
                                                <option value="bharuch">Bharuch</option>
                                                <option value="vapi">Vapi</option>
                                            </select>
                                        </div>
                                    </div>
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
