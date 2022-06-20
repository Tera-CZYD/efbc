<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\admin;
Use Illuminate\Support\Facades\Hash;

class adminController extends Controller
{
//---------------------------------------------------------------------------------------------------- VIEWS
    public function login(){
        return view('etr/admin/login');
    }
    // public function register(){
    //     return view('etr/admin/register');
    // }
    public function register(){
        if(session()->has('LoggedUser')){
            $admins = admin::where('id','=',session('LoggedUser'))->first();

            $data = [
                'LoggedUserInfo'=>$admins
            ];
        }
        return view('etr/admin/register',$data);
    }
//---------------------------------------------------------------------------------------------------- REGISTRATION
    public function reg(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:admins',
            'password'=>'required|min:5|max:12'
        ]);

        $admin = new admin;
        $admin->name=$request->name;
        $admin->email=$request->email;
        $admin->password=Hash::make($request->password);
        $query = $admin->save();

        if($query){
            return back()->with('success','Registration Successful');
        }
        else{
            return back()->with('fail','Something went Wrong. Registration Failed');
        }
    }
//---------------------------------------------------------------------------------------------------- CHECKER
    public function check(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12'
        ]);
        $admins = admin::where('email','=',$request->email)->first();
        if($admins){
            if(Hash::check($request->password,$admins->password)){
                $request->session()->put('LoggedUser',$admins->id);
                return redirect('profile');
            }
            else{
                return back()->with('fail','Invalid Password');
            }
        }
        else{
            return back()->with('fail','No account found with this email ');
        }
    }
//---------------------------------------------------------------------------------------------------- SESSION & LOGIN
    public function profile(){
        if(session()->has('LoggedUser')){
            $admins = admin::where('id','=',session('LoggedUser'))->first();
            $lists = DB::select('select * from admins');
            $data = [
                'LoggedUserInfo'=>$admins
            ];
        }
        return view('etr/admin/admin',$data,['lists'=>$lists]);
    }
    public function adminhome(){
        if(session()->has('LoggedUser')){
            $admins = admin::where('id','=',session('LoggedUser'))->first();
            $heros = DB::select('select * from hero');
            $scheds = DB::select('select * from sched');
            $data = [
                'LoggedUserInfo'=>$admins
            ];
        }
        return view('etr/admin/edithome',$data,['heros'=>$heros,'scheds'=>$scheds]);
    }
    public function adminministries(){
        if(session()->has('LoggedUser')){
            $admins = admin::where('id','=',session('LoggedUser'))->first();
            $captions = DB::select('select * from ministrycaption');
            $ministry = DB::select('select * from ministries');
            $data = [
                'LoggedUserInfo'=>$admins
            ];
        }
        return view('etr/admin/editministries',$data,['captions'=>$captions,'ministries'=>$ministry]);
    }
    public function adminabout(){
        if(session()->has('LoggedUser')){
            $admins = admin::where('id','=',session('LoggedUser'))->first();
            $abouts = DB::select('select * from about');
            $pastors = DB::select('select * from pastors');
            $data = [
                'LoggedUserInfo'=>$admins
            ];
        }
        return view('etr/admin/editabout',$data,['abouts'=>$abouts,'pastors'=>$pastors]);
    }

    public function adminAnnounce(){
        if(session()->has('LoggedUser')){
            $admins = admin::where('id','=',session('LoggedUser'))->first();
            $announces = DB::select('select * from announcement');
            $data = [
                'LoggedUserInfo'=>$admins
            ];
        }
        return view('etr/admin/addAnnouncement',$data,['announces'=>$announces]);
    }
//---------------------------------------------------------------------------------------------------- LOGOUT
    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/login');
        }
    }
}
