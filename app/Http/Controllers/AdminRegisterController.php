<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Mail\RegisterToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AdminRegisterController extends Controller
{
	public function adminregister()
    {
    	if(Auth::guard('admin')->check())
    	{
    		return redirect('admin/main');
    	}
    	else
    	{
    		return view('admin.register');
    	}
    }  

    public function adminstore(Request $request)
    {
    	// return $request->all();

    	$request->validate([
    		'name' => 'required',
    		'email' => 'required|email',
    		'password' => 'confirmed'
    	]);

    	$admin = new Admin;
    	$admin->name = $request->name;
    	$admin->email = $request->email;
    	$admin->password = bcrypt($request->password);
        $admin->cpassword = $request->password;
        // $admin->token = Str::random(30);
    	$admin->save();
        return redirect('/adminlogin');
    }

    public function adminlogin()
    {
    	if(Auth::guard('admin')->check())
    	{
    		return redirect('admin/main');
    	}
    	else
    	{
    		return view('admin.login');
	    }
    }    

    public function adminlog(Request $request)
    {
    	$request->validate([
    		'email' => 'required|email',
    		'password' => 'required'
    	]);

    	if(Auth::guard('admin')->attempt(['email' => $request->email , 'password' => $request->password ]))
    	{
    		return redirect('admin/main');
    	}
        else
        {
            return redirect()->back();
        }
    }

    public function changepassword()
    {
        return view('admin.changepassword');
    }

    public function updatepassword(Request $request)
    {
        $request->validate([
            'oldpassword' => 'required',
            'newpassword' => 'required'
        ]);
        $user = Auth::guard('admin')->user();
        if($user->cpassword == $request->oldpassword)
        {

            if($request->newpassword == $request->password_confirmation)
            {
                $admin = Admin::find($user->id);
                $admin->password = bcrypt($request->newpassword);
                $admin->cpassword = $request->newpassword;
                $admin->save();
                return redirect('changepassword')->with('success','Your Password Updated Successfully');
            }
            else
            {
                return redirect('changepassword')->with('danger','Your New Password Not Match With Confirm Password');
            }
        }
        else
        {
            return redirect('changepassword')->with('danger','Old Password Is Not Match');
        }
    }

    public function forgetpassword()
    {
        return view('admin.forgetpassword');
    }

    public function recoverpassword(Request $request)
    {
        $admin = Admin::where('email','=',$request->email)->first();
        if($admin)
        {   
            if($admin->email == $request->email)
            {
                $admin = Admin::find($admin->id);
                $admin->token = Str::random(20);
                $admin->save();
                $token = 'http://127.0.0.1:8000/recoverpassword/'.$admin->token;
                Mail::send(new RegisterToken($token));
                return redirect('/adminlogin')->with('token','Please check your email');
            }
        }
        else
        {
            return redirect('forgetpassword')->with('emailerror','Email Doesnot Exist');
        }
    }

    public function recoverpasswords($token)
    {
        $token;
        return view('admin.recoverpassword',compact('token'));
    }

    public function repassword($token, Request $request)
    {
        // return $request->newpassword;
        $request->validate([
            'newpassword' => 'required|max:10|min:6',
            'password_confirmation' => 'required|max:10|min:6'
        ]);
        $admin = Admin::where('token','=',$token)->first();
          
            if($admin)
            {
                if($admin->token == $token)
                {
                    $admin->password = bcrypt($request->newpassword);
                    $admin->cpassword = $request->newpassword;
                    $admin->save();
                    return redirect('adminlogin');
                }
                else
                {
                    return redirect('adminlogin')->with('token','Token Doesnot Match');
                }
            }
            else
            {
                return redirect('forgetpassword');
            }
         
    }
}
