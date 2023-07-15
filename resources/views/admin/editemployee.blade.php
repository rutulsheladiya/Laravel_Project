@extends('admin/layout')
@section('page_title', 'Manage User')
@section('category_select', 'active')
@section('mainContent')
    <h1 class="mb10">Edit Details</h1>
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
                            <form action="{{ url('/updateemployeedata') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <div class="row">
                                        <input type="hidden" class="form-control" name="empId" value="{{ $empdata['id'] }}">
                                        <div class="col-md-4">
                                            <label for="username" class="control-label mb-1">Enter Name</label>
                                            <input id="username" name="username" type="text" class="form-control"
                                                aria-required="true" aria-invalid="false" placeholder="Entetr Name"
                                                value="{{ $empdata['name'] }}">
                                        </div>

                                        <div class="col-md-4">
                                            <label for="email" class="control-label mb-1">Enter Email</label>
                                            <input id="email" name="email" type="email" class="form-control"
                                                aria-required="true" aria-invalid="false" placeholder="Entetr Email"
                                                value="{{ $empdata['email'] }}">
                                        </div>

                                        <div class="col-md-4">
                                            <label for="mobileno" class="control-label mb-1">Enter Mobile Number</label>
                                            <input id="mobileno" name="mobileno" type="text" class="form-control"
                                                aria-required="true" aria-invalid="false" placeholder="Entetr Mobile Number"
                                                value="{{ $empdata['mobileno'] }}">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <label for="">Select Gender</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender" value="male"
                                                    {{ $empdata['gender'] == 'male' ? 'checked' : '' }}>
                                                <label>Male</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender" value="female"
                                                    {{ $empdata['gender'] == 'female' ? 'checked' : '' }}>
                                                <label>Female</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender" value="other"
                                                    {{ $empdata['gender'] == 'other' ? 'checked' : '' }}>
                                                <label>Other</label>
                                            </div>
                                        </div>
                                        {{-- {{dd($empSkill)}} --}}
                                        <div class="col-md-4">
                                            <div class="form-group Skills">
                                                <label for="" class="py-2">Select Your Skills</label>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="HTML"
                                                        name="skill[]" value="HTML"
                                                        {{ in_array('HTML', $empSkill) ? 'checked' : '' }}>
                                                    <label class="form-check-label">HTML</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="CSS"
                                                        name="skill[]" value="CSS"
                                                        {{ in_array('CSS', $empSkill) ? 'checked' : '' }}>
                                                    <label class="form-check-label">CSS</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="jQuery"
                                                        name="skill[]" value="jQuery"
                                                        {{ in_array('jQuery', $empSkill) ? 'checked' : '' }}>
                                                    <label class="form-check-label">jQuery</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="PHP"
                                                        name="skill[]" value="PHP"
                                                        {{ in_array('PHP', $empSkill) ? 'checked' : '' }}>
                                                    <label class="form-check-label">PHP</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="Laravel"
                                                        name="skill[]" value="Laravel"
                                                        {{ in_array('Laravel', $empSkill) ? 'checked' : '' }}>
                                                    <label class="form-check-label">Laravel</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="category_name" class="control-label mb-1">Select City</label>
                                            <select id="city" name="city" class="form-control">
                                                <option selected disabled>Select City</option>
                                                <option value="surat" {{$empdata['city'] == "surat" ? 'selected' : ''}}>Surat</option>
                                                <option value="ahmedabad"  {{$empdata['city'] == "ahmedabad" ? 'selected' : ''}} >Ahmedabad</option>
                                                <option value="vadodara"  {{$empdata['city'] == "vadodara" ? 'selected' : ''}} >Vadodara</option>
                                                <option value="bharuch"  {{$empdata['city'] == "bharuch" ? 'selected' : ''}} >Bharuch</option>
                                                <option value="vapi"  {{$empdata['city'] == "vapi" ? 'selected' : ''}} >Vapi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                        Update
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
