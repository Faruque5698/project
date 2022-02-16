<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use App\Models\Degree;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EducationController extends Controller
{
    public function cart(Request $request){
        $cart = session()->get('cart');

        $i=mt_rand(1,10);
        $cart[$i] = [

            'degree_name'=>$request->degree_name,
            'degree_year'=>$request->degree_year,
            'degree_from'=>$request->degree_from
        ];

        session()->put('cart',$cart);

        return response()->json([
            'data'=>'success'
        ]);
    }

    public function clear(Request $request){
//        $request->session()->flush();
        $request->session()->forget('cart');
        return response()->json([
            'data'=>'success',

        ]);
    }

    public function delete(Request $request,$id){

        $cart = session()->get('cart');

        if (isset($cart[$id])){
            unset($cart[$id]);
            session()->put('cart',$cart);
        }

        return response()->json([
            'data'=>'success'
        ]);
    }

    public function add_edu(Request $request){
        $edu = new Degree();

        foreach ($request->degree_name as $key => $insert){

            $saveRecords = [
                'degree_name'=>$request->degree_name[$key],
                'degree_year'=>$request->degree_year[$key],
                'degree_from'=>$request->degree_from[$key],
                'user_id'=>auth()->id()
            ];

            DB::table('degrees')->insert($saveRecords);
            $request->session()->forget('cart');


        }


        return response()->json([
            'data'=>'success'
        ]);
    }
}
