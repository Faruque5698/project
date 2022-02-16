@extends('layouts.dashboard.app')

@section('title','Show User')

@push('css')
<!-- Bootstrap Select Css -->
<link href="{{ asset('assets/dashboard/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="container-fluid">
        <div class="row clearfix">
            
              <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h4>Name: {{ $user->name }}</h4>
                        <h4>Email: {{ $user->email }}</h4>
                       <h4>Number: {{ $user->number }}</h4>
                       <h4>Age: {{ $user->age }}</h4>
                    </div>
                    <div class="body">
                         <h3>Job Description</h3>
                        {!! $user->job_description !!}

                    </div>  

                     <div class="body">
                            <h3>Job Designation</h3>
                        {!! $user->job_designation !!}

                    </div> 

                    <div class="body">
                            <h3>Job Speciality</h3>
                        {!! $user->speciality !!}

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header bg-cyan">
                        <h2>
                           Retired At 
                        </h2>
                    </div>
                    <div class="body">
                       <h4>   {{ $user->retired_at }}</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="header bg-cyan">
                        <h2>
                            Joining Form
                        </h2>
                    </div>
                    <div class="body">
                       <h4>{{ $user->joining_form }}</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="header bg-amber">
                        <h2>
                          Doctors Image
                        </h2>
                    </div>
                    <div class="body">
                        <img class="img-responsive thumbnail" src="" alt="">
                    </div>
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
<!-- TinyMCE -->
<script src="{{ asset('assets/dashboard/plugins/tinymce/tinymce.js') }}"></script>

<script type="text/javascript">
      $(function() {
        //TinyMCE
        tinymce.init({
            selector: "textarea#tinymce",
            theme: "modern",
            height: 300,
            plugins: [
                'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'insertdatetime media nonbreaking save table contextmenu directionality',
                'emoticons template paste textcolor colorpicker textpattern imagetools'
            ],
            toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            toolbar2: 'print preview media | forecolor backcolor emoticons',
            image_advtab: true
        });
        tinymce.suffix = ".min";
             tinyMCE.baseURL = '{{ asset('assets/dashboard/plugins/tinymce') }}';
    });

</script>


 <script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>
<script>

    function approvePost(id) {
        swal({
            title: 'Are you sure?',
            text: "You went to approve this post!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Approve it!',
            cancelButtonText: 'No, cancel!',
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            buttonsStyling: false,
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                event.preventDefault();
                document.getElementById('approval-form').submit();
            } else if (
                // Read more about handling dismissals
                result.dismiss === swal.DismissReason.cancel
            ) {
                swal(
                    'Cancelled',
                    'The post remain pending :)',
                    'error'
                )
            }
        })
    }

  

</script>

@endpush
