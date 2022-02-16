@extends('layouts.dashboard.app')
@section('title','Profile')
@push('css')
@endpush
@section('content')
<div class="profile_set_box">
    <div class="row">
        <h3>Make Your Profile</h3>

        @include('layouts.dashboard.partial.profile')

        @include('layouts.dashboard.partial.template')

        @include('layouts.dashboard.partial.blog')
    </div>
</div>
</div>
@endsection
@push('js')


 <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
    <script>

        $(document).ready(function (){

            $('#add_span').hide();


            $(document).on('submit', '#DegreeForm', function (e){
                e.preventDefault();
                let formData = new FormData($('#DegreeForm')[0]);
                $.ajax({
                    type:"POST",
                    url:"/cart",
                    data:formData,
                    contentType:false,
                    processData:false,
                    success:function (response){
                        // alert(response.msg)
                        console.log(response.carts);
                        location.reload()
                    }
                })
            })

            $(document).on('click', '.clear_btn', function (e){
                e.preventDefault();

                $.ajax({
                    type:'GET',
                    url:"/clear",
                    success:function (response){
                        location.reload();
                        alert('success')
                    }
                })
            })


            $(document).on('click', '.delete-session', function (e){
                e.preventDefault();
                let id = $(this).val();
                // console.log(id);
                // alert(id)
                $.ajax({
                    type:'GET',
                    url:"/delete/"+id,
                    success:function (response){
                        location.reload();
                        alert(response.data)

                    }
                })
            })


            $(document).on('submit', '#session', function (e){
                e.preventDefault();
                let formData = new FormData($('#session')[0]);
                $.ajax({
                    type:"POST",
                    url:"/add_edu",
                    data:formData,
                    contentType:false,
                    processData:false,
                    success:function (response){
                        alert(response.data)
                        location.reload()
                    }
                })
            })
        })

    </script>

{{--<script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>--}}
{{--  <script type="text/javascript">--}}
{{--       $(document).ready(function () {--}}
{{--        $('.add-to-degree').click(function (e) {--}}
{{--            e.preventDefault();--}}
{{--            $.ajaxSetup({--}}
{{--                headers: {--}}
{{--                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
{{--                }--}}
{{--            });--}}
{{--            var product_id = $(this).closest('#degree_name').find('#product_id').val();--}}
{{--            var quantity = $(this).closest('.degree_name').find('.qty-input').val();--}}
{{--            $.ajax({--}}
{{--                url: "/add-to-cart",--}}
{{--                method: "POST",--}}
{{--                data: {--}}
{{--                    'quantity': quantity,--}}
{{--                    'product_id': product_id,--}}
{{--                },--}}
{{--                success: function (response) {--}}
{{--                    alertify.set('notifier','position','top-right');--}}
{{--                    alertify.success(response.status);--}}
{{--                },--}}
{{--            });--}}
{{--        });--}}
{{--    });--}}
{{--  </script>--}}
@endpush