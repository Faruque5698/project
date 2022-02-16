<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use App\Models\Template;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function add_template(Request $request){
        $template = new Template();

        $tmplate_image = $request->file('template_logo');
        $template->user_id = auth()->user()->id;
        $template->template_name = $request->template_name;
        $template->location = $request->location;

        if ($tmplate_image) {
            $imageName = $tmplate_image->getClientOriginalName();
            $directory = 'image/employee/';
            $imageUrl = $directory . $imageName;
            $tmplate_image->move($directory, $imageName);
            $template->template_logo = $imageUrl;
        }
        $template->save();

        return response()->json([
            'status'=>200,
            'message' =>'successfully data save'
        ]);
    }


    public function fetch_template(){
        $templates = Template::all();

        return response()->json([
           'tempaltes'=>$templates
        ]);
    }

}
