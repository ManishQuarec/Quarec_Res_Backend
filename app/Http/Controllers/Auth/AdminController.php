<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;

class AdminController extends Controller
{
    public function getProfile()
    {
        $user=auth()->user()->id;
        return view('auth.profile.profile',compact('user'));
    }

    public function updateProfile(Request $request,$id)
    {
      
         $request->only([
            'name',
            'last_name',
            'email',
            'phone',
        ]);

        $post=User::find($id);
        $post->name = $request->name;
        $post->last_name = $request->last_name;
        $post->email = $request->email;
        $post->phone = $request->phone;

        if($request->hasfile('profile_pic'))
        {
            $file = $request->file('profile_pic');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/profile/', $filename);
            $post->profile_pic = $filename;
        }
         $res= $post->update();
         if($res){
             $user=auth()->user()->id;
              return back()->with("status", "Profile update successfully!");
          
         }
         else{
            return back()->with("error", "Profile update successfully!");
         }

    }


    public function changePassword(Request $request)
    {
        return view('auth.profile.ChangePassword');
    }

    /**
     * It takes old password, if it is correct, it matches new password and confirm password then
     * updated old password to new password.
     *
     * @param Request request The request object.
     *
     * @return the view of the change password form.
     */
    public function updatePassword(Request $request)
    {
            # Validation
            $request->validate([
                'old_password' => 'required',
                'new_password' => 'required|confirmed',
            ]);
    
    
            #Match The Old Password
            if(!Hash::check($request->old_password, auth()->user()->password)){
                return back()->with("error", "Old Password Doesn't match!");
            }
    
    
            #Update the new Password
            User::whereId(auth()->user()->id)->update([
                'password' => Hash::make($request->new_password)
            ]);
    
            return back()->with("status", "Password changed successfully!");
    }


}
