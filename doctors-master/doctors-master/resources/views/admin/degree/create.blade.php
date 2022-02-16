{{-- @extends('layouts.dashboard.app')

@section('title','degree')

@push('css')
<!-- Bootstrap Select Css -->
<link href="{{ asset('assets/dashboard/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="container-fluid">
    <!-- Vertical Layout | With Floating Label -->
    <form action="{{ isset($degree) ? route('admin.degree.update',$degree->id) : route('admin.degree.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @isset($degree)
            @method('PUT')
            @endisset
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            {{ isset($degree) ?  'Update Degree' : ' Add New Degree' }}
                        </h2>
                    </div>
                    <div class="body">
                        <div class="form-group form-float">
                              <label class="form-label">Degree Name</label>
                            <div class="form-line">   
                                <input type="text" id="degree_name" class="form-control" name="degree_name" value="{{ $degree->degree_name ?? old('degree_name') }}">     
                                    @error('degree_name')
                         <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                           @enderror  
                            </div>
                        </div>
                        <div class="form-group form-float">
                                <label class="form-label">Degree Duration</label>
                            <div class="form-line">
                                <input type="number" id="degree_duration" class="form-control" name="degree_duration" value="{{ $degree->degree_duration ?? old('degree_duration') }}">
                                    @error('degree_duration')
                         <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                           @enderror
                            </div>
                        </div>  
                        <div class="form-group form-float">
                               <label class="form-label">Degree Form</label>
                                <div class="form-line">
                                <input type="text" id="degree_form_to" class="form-control" name="degree_form_to" value="{{ $degree->degree_form_to ?? old('degree_form_to') }}">
                                    @error('degree_form_to')
                         <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                           @enderror
                            </div>
                        </div>
                          <a class="btn btn-danger m-t-15 waves-effect" href="{{ route('admin.degree.index') }}">BACK</a>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>

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

@endpush --}}