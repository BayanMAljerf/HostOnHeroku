<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function update(Request $request){


 $this->validate($request,[

"blog_name"=>"required",
"phone_number"=>"required",
"blog_email"=>"required",
"address"=>"required"


 ]);
 $setting=Setting::first();

 
 $setting->blog_name=$request->blog_name;
 $setting->phone_number=$request->phone_number;
 $setting->blog_email=$request->blog_email;
 $setting->address=$request->address;
    
 $setting->save();
 return redirect()->back();
    }
    public function index(){

       return view('settings.settings')->with('setting',Setting::first());
                
            }
}
