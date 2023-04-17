<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use Hash;
use Session;

class LogAndRegistration extends Controller
{
    public function getUser()
    {
        return view('user');
    }
    public function login(){
        return view("auth_admin.login");
    }
    public function registration(){
        return view("auth_admin.registration");
    }
    public function RequestToCollect()
    {
        return view('requestToCollect');
    }
    
    public function registerUser(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'gender'=>'required',
            'address'=>'required',
            // 'image'=>'store'

        ]);
        $user = new users();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->gender = $request->gender;
        $user->address = $request->address;
        $res = $user->save();
        if($res) {
            $request->session()->put('loginId', $user->id);
            return redirect('loginAsAdmin');
            
        } else{
            return back()->with('fail', 'created');
        }

    }
    public function loginUser(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        $user = users::where('email','=',$request->email)->first();
        if($user){
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('loginId', $user->id);
                return redirect('deshboard');
            }else{
                return back()->with('fail', 'enter correct password');
            }
        }else{
            return back()->with('fail', 'create account first');
        }
  
}
public function deshboard(){

    $data = array();
    if(session::has('loginId')){
        $data = users::where('id','=', session::get('loginId'))->first();

    }

    return view('admin_dashboard', compact('data'));
    return view('test', compact('data'));
}
public function logout(){
    if(session::has('loginId')){
        session::pull('loginId');
        return redirect('/');
}
}
}