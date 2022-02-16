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
        <h2 contenteditable>Your Blog Title Is Here</h2>
        <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, voluptate necessitatibus praesentium quisquam quas nobis?</h4>
        <img src="../img/6d044b7318cf19556a437a8c3eb8e82b.png" alt="">
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis rerum eos harum ratione distinctio, facilis soluta molestias alias ipsa officia dolorum sed animi at exercitationem sequi quaerat quas ut facere molestiae quod expedita natus nam numquam. Dicta nostrum perferendis quo, nisi labore sequi reprehenderit temporibus, delectus quas blanditiis libero tenetur perspiciatis aspernatur eos dolorum? Veniam voluptatum, aliquam temporibus rerum rem iure, sequi molestias earum vel consequatur consectetur quod facilis repudiandae corrupti eos beatae tempora laudantium est unde deleniti. Ab veritatis alias, dignissimos mollitia ipsum sequi? Commodi quasi laudantium aliquid fuga officiis, quibusdam quas corrupti blanditiis, quo laborum voluptatibus nam non, molestiae nostrum necessitatibus nisi repellat temporibus? Praesentium voluptatem vel vero. Ex maxime eius, nemo numquam distinctio aspernatur similique facere quae non voluptas, laudantium culpa? Sequi vero veritatis pariatur, sint, illum officia autem adipisci reiciendis quaerat recusandae illo totam harum? Reprehenderit iste eum delectus adipisci culpa odit aliquam ut, cum dolorem maiores, dicta inventore! Iste quo adipisci magnam facilis quae, quis voluptate nam quasi nisi qui modi possimus deleniti magni rerum accusantium a at quidem consequatur inventore maiores, consectetur placeat exercitationem, id quaerat! Modi, doloremque in exercitationem nostrum, deleniti amet facilis suscipit provident ex corporis possimus doloribus est nihil ipsam! Pariatur, velit. Vitae numquam in dolore excepturi aliquam quod exercitationem temporibus, corrupti enim! Iure ea laborum quidem vero esse. Nobis voluptatem atque quia? No
        </p>
        
        
    </div>
    <div class="container">
        <h2>Write Your Blog</h2>
        <div class="blog_box">
            <form action="{{ isset($blog) ? route('admin.blog.update', $blog->id) : route('admin.blog.store')  }}" method="POST" enctype="multipart/form-data">
                @csrf
                @isset($blog)
                @method('PUT')
                @endisset
                <div>
                    <label for="">Blog title</label>
                    <input type="text" name="blog_title" placeholder="Blog Title Here" class="form_title" value="{{ $blog->blog_title ?? old('blog_title') }}">
                    @error('blog_title')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                
                <div>
                    <label for="">Blog subtitle</label>
                    <input type="text" name="blog_sub_title" placeholder="Blog subTitle Here" class="form_subtitle" value="{{ $blog->blog_sub_title ?? old('blog_sub_title') }}">
                    @error('blog_sub_title')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div>
                    <!-- <input type="file" > -->
                    <label for="">Blog Image</label>
                    <input type="file" name="blog_image" class="img_file">
                    @isset ($blog)
                    <div style="padding: 10px;">
                        <img width="200" src="{{ Storage::disk('public')->url('blog/'.$blog->blog_image) }}" alt="blog_image">
                    </div>
                    @endisset
                    @error('blog_image')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div>
                    <div>
                        <label for="">Blog Description</label>
                        <textarea placeholder="Write your blog description" name="blog_edit_textarea" class="form_desc">{{ $blog->blog_edit_textarea ?? old('blog_edit_textarea') }}</textarea>
                        @error('blog_edit_textarea')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div>
                        <button type="submit" class='btn btn-primary'>
                        @isset ($blog)
                        Update
                        @else
                        Save
                        @endisset
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('js')
<script src="{{ asset('assets/frontend/js/blog_page.js') }}"></script>
@endpush