<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use Auth;


class DashboardController extends Controller
{
    public function dashboard()
    {
        if(auth()->check())
        {
        
            $category=Category::all();
            $categories= count($category);
       
            $tag=Tag::all();
            $tags= count($tag);
    
            $posts=Post::count();
           
            $users=User::count();
    
            return view('auth/dashboard',compact('posts','categories','tags','users'));
    
        }
        else{
            return redirect('/login')->withSuccess('login Please');

        }
       
        }
}
