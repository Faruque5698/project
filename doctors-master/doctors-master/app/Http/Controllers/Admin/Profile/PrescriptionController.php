<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use App\Models\Template;
use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
    public function index($id){
        $template_details = Template::find($id);
        return view('layouts.dashboard.prescription.pres',[
            'template_details'=>$template_details
        ]);
    }

}
