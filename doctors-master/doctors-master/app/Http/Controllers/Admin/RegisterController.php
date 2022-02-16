<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\State;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        $role = auth()->user()->role;
        if ($role == '1'){
            $countries = Country::all();
            return view('auth.register',[
                'countries'=>$countries
            ]);
        }else{
            return "Error";
        }
    }

    public function getCities($id){

        $cities = State::where('country_id','=',$id)->get();
        return response()->json([
            'cities'=>$cities
        ]);
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'country'=>'required',
            'city'=>'required',
            'password'=>'required',
            'checkbox'=>'accepted'

        ]);
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->country = $request->country;
        $user->city = $request->city;
        $user->password = Hash::make($request->password);

        $user->save();
        return redirect('/');

    }
}
