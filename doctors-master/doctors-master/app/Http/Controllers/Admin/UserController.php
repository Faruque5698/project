<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Template;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Blog;
use App\Models\Degree;
use Carbon\Carbon;
use Auth;
use Storage;
use Image;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest('id')->where('deleted','=','no')->get();
        return view('admin.alluser.index',compact('users'));
    }

    public function View($id)
    {
        $user = User::find($id);
        return view('admin.alluser.view',compact('user'));
    }


    public function Profile()
    {

        $blogs = Blog::latest('id')->where('deleted','no')->get();
        $user = User::first();
        $degrees = Degree::latest('id')->get();

        $templates = Template::all();

        return view('admin.profile.index',compact('user','blogs','degrees'),[
            'templates'=>$templates
        ]);
    }


    public function Update(Request $request)
    {

        $request->validate([
            'name'                => 'required',
            'city'                => 'required',
            'country'             => 'required',
             'bio'                => 'required',
             'specialist_in'      => 'required',
        ]);


            $image = $request->file('image');
            $slug  = Str::slug($request->name);
             $user = User::findOrFail(Auth::id());

          if (isset($image))
        {
           //  make unique name for image
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
           //    check category dir is exists
            if (!Storage::disk('public')->exists('avatar'))
            {
                Storage::disk('public')->makeDirectory('avatar');
            }

              if (Storage::disk('public')->exists('avatar/'.$user->image)) {
                Storage::disk('public')->delete('avatar/'.$user->image);
            }
         //  resize image for category and upload

            Image::make($image)->resize(350, 350)->save(storage_path('app/public/avatar').'/'.$imagename);
        }

        else{
        $imagename = $user->image;
     }

     $user->name          = $request->name;
     $user->city          = $request->city;
     $user->country       = $request->country;
     $user->bio           = $request->bio;
     $user->specialist_in = $request->specialist_in;
     $user->image         = $imagename;
     $user->save();

     notify()->success('Profile Update', "Success");
    return redirect()->back();


    }
}
