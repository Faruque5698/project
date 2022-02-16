<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Degree;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class DegreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $degrees = Degree::latest('id')->where('deleted','=','no')->get();
        return view('admin.degree.index',compact('degrees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.degree.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (count($request->degree_name) > 0) {
            foreach ($request->degree_name as $item=>$v) {
                $data2 =array(
                    'user_id'  => Auth::id(),
                    'degree_name'  => $request->degree_name[$item],
                    'degree_year'  => $request->degree_year[$item],
                    'degree_from'  => $request->degree_from[$item],
                );

                Degree::insert($data2);
            }
        }
         notify()->success('Degree Added', "Success");
             return redirect()->back();
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Degree  $degree
     * @return \Illuminate\Http\Response
     */
    public function show(Degree $degree)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Degree  $degree
     * @return \Illuminate\Http\Response
     */
    public function edit(Degree $degree)
    {
        return view('admin.degree.create',compact('degree'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Degree  $degree
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Degree $degree)
    {
        $degree->degree_name     = $request->degree_name;
        $degree->degree_duration = $request->degree_duration;
        $degree->degree_form_to  = $request->degree_form_to;
        $degree->save();

        return redirect()->route('admin.degree.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Degree  $degree
     * @return \Illuminate\Http\Response
     */
    public function destroy(Degree $degree)
    {
        $degree->degree_name =  $degree->degree_name.'deleted'.$degree->id;
        $users = Auth::user()->id;
        $degree->deleted_by = $users;
        $degree->deleted = 'yes';
        $degree->status = 'Inactive';
        $degree->save();
        return redirect()->back();
    }
}
