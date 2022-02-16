<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Str;
use Image;
use Storage;
use Auth;
use Carbon\Carbon;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         // $blogs = Blog::latest('id')->get();
         //  return view('admin.blog.index',compact('blog'));
    }

    public function BlogDetails($slug)
    {
          $blog = Blog::where('blog_slug',$slug)->first();
          return view('admin.blog.create',compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
          $request->validate([
             'blog_title'              => 'required',
             'blog_sub_title'          => 'required',
            ' blog_edit_textarea'      => 'required',
             'blog_image'              => 'required',
        ]);

            $image = $request->file('blog_image');
            $slug  = Str::slug($request->blog_title);
         
          if (isset($image))
        {
           //  make unique name for image
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
           //    check blog dir is exists
            if (!Storage::disk('public')->exists('blog'))
            {
                Storage::disk('public')->makeDirectory('blog');
            }
         //  resize image for blog and upload
        
            Image::make($image)->resize(1528, 1040)->save(storage_path('app/public/blog').'/'.$imagename);

        }


        $blog = new Blog();
        $blog->blog_image           = $imagename;
        $blog->blog_title           = $request->blog_title;
        $blog->blog_sub_title       = $request->blog_sub_title;
        $blog->blog_slug            = $slug;
        $blog->blog_edit_textarea   = $request->blog_edit_textarea;
        $blog->save();

        notify()->success("Blog Added", "Success");
        return redirect()->route('admin.profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('admin.blog.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
       return view('admin.blog.create',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
          $request->validate([
             'blog_title'             => 'required',
             'blog_sub_title'          => 'required',
            ' blog_edit_textarea'     => 'required',
        ]);

            $image = $request->file('blog_image');
            $slug  = Str::slug($request->blog_title);
         
          if (isset($image))
        {
           //  make unique name for image
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
           //    check blog dir is exists
            if (!Storage::disk('public')->exists('blog'))
            {
                Storage::disk('public')->makeDirectory('blog');
            }

              if (Storage::disk('public')->exists('blog/'.$blog->blog_image)) {
                Storage::disk('public')->delete('blog/'.$blog->blog_image);
            }


         //  resize image for blog and upload
        
            Image::make($image)->resize(1528, 1040)->save(storage_path('app/public/blog').'/'.$imagename);

        }else{
           $imagename = $blog->blog_image;
        }


        $blog->blog_image           = $imagename;
        $blog->blog_title           = $request->blog_title;
        $blog->blog_sub_title       = $request->blog_sub_title;
        $blog->blog_slug            = $slug;
        $blog->blog_edit_textarea   = $request->blog_edit_textarea;
        $blog->save();

        notify()->success("Blog Updated", "Success");
        return redirect()->route('admin.profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
          if (Storage::disk('public')->exists('blog/'.$blog->blog_image)) {
                Storage::disk('public')->delete('blog/'.$blog->blog_image);
            }

        $blog->blog_title =  $blog->blog_title.'deleted'.$blog->id;
        $users = Auth::user()->id;
        $blog->deleted_by = $users;
        $blog->deleted = 'yes';
        $blog->save();

        notify()->success("Blog Deleted", "Success");
        return redirect()->back();
    }
}
