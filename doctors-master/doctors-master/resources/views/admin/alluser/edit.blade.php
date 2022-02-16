@extends('layouts.dashboard.app')

@section('title','Update Users')

@push('css')
<!-- Bootstrap Select Css -->
<link href="{{ asset('assets/dashboard/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="container-fluid">
    <!-- Vertical Layout | With Floating Label -->
    <form action="{{ route('admin.user.update',$user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Update User
                        </h2>
                    </div>
                    <div class="body">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" id="name" class="form-control" name="name" value="{{ $user->name }}">
                                <label class="form-label">User Name</label>
                            </div>
                        </div> 
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="email" id="email" class="form-control" name="email" value="{{ $user->email }}">
                                <label class="form-label">User Email</label>
                            </div>
                        </div>  
                         <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" id="number" class="form-control" name="number" value="{{ $user->number }}">
                                <label class="form-label">User Email</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="image">User Image</label>
                            <input type="file" name="image">
                        </div>

                        <div class="form-group">
                        	 <label class="form-label">Retired At</label>
                            <input type="date" id="retired_at" class="form-control" name="retired_at" value="{{ $user->retired_at }}">
                               
                        </div> 

                         <div class="form-group">
                         	 <label class="form-label">Age</label>
                            <input type="number" id="age" class="form-control" name="age" value="{{ $user->age }}">
                               
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Joining Form and Speciality
                        </h2>
                    </div>
                    <div class="body">
                         <div class="form-group">
                         	 <label class="form-label">Joining Form</label>
                            <input type="date" id="joining_form" class="form-control" name="joining_form" value="{{ $user->joining_form }}">
                               
                        </div> 
                        <div class="form-group">
                        	<label class="form-label">Speciality</label>
                            <input type="text" id="speciality" class="form-control" name="speciality" value="{{ $user->speciality }}">
                                
                        </div>
                        <a class="btn btn-danger m-t-15 waves-effect" href="{{ route('admin.user') }}">BACK</a>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">UPDATE</button>

                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Job Description And Designation
                        </h2>
                    </div>
                    <div class="body">
                        <textarea class="form-control" rows="4" name="job_description">{{ $user->job_description }}</textarea>
                    </div>
                    <div class="body">
                        <textarea class="form-control" rows="4" name="job_designation">{{ $user->job_designation }}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

@push('js')
<!-- Select Plugin Js -->
<script src="{{ asset('assets/dashboard/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>


@endpush
