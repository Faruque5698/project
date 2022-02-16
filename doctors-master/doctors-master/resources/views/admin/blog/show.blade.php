@extends('layouts.dashboard.app')
@section('title','Blog')

@push('css')
@endpush

@section('content')
<div class="navigation login_page reg_p_b">
    <div class="logo">
        <a href="#">Ps<span>cribe</span></a>
    </div>
    @include('layouts.dashboard.partial.sidebar')
</div>
<div class="blog_box_html">
    <div class="container_show">
        <h2 contenteditable> {{ $blog->blog_title }}</h2>
        <h4>{{ $blog->blog_sub_title }}</h4>
        <img src="{{ Storage::disk('public')->url('blog/'.$blog->blog_image) }}" alt="$blog->blog_image">
        <p> {!! $blog->blog_edit_textarea !!} </p>
    </div>
  
</div>
@endsection

@push('js')
<script src="{{ asset('assets/frontend/js/blog_page.js') }}"></script>
@endpush