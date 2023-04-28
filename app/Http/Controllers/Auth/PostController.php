<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;


class PostController extends Controller
{
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->paginate(5);
    
        return view('auth.posts.index',compact('posts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $categories=Category::all();
        // $tags=Tag::all();

        return view('auth.posts.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

     
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $id = Auth::user()->id;
        $name = Auth::user()->name;
        $user_image = Auth::user()->profile_pic;

// dd($request->all());
        // $post=Post::create([
        //     'user_id'=>$id,
        //     'title'=>$request->title,
        //     'description'=> $request->description,
        //     'status'=>$request->status,
        //     'category_id'=>$request->category,
        // ]);

        $post = new Post;
        $post->user_id =$id ;
        $post->user_name =$name ;
        $post->title = $request->title;
        $post->description = $request->description;

        if($request->hasfile('profile_image'))
        {
            $file = $request->file('profile_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/posts/', $filename);
            $post->profile_image = $filename;
        }
          $post->save();

        return redirect()->route('posts.index')
                        ->with('success','Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('auth.posts.show',compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('auth.posts.edit',compact('post'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $post=Post::find($id);
      $post->title = $request->input('title');
      $post->description = $request->input('description');

      if($request->hasfile('profile_image'))
      {
        $file = $request->file('profile_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/posts/', $filename);
            $post->profile_image = $filename; 
      }
      $post->update();

        return redirect()->route('posts.index')->with('success', 'Post has been updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
    
        return redirect()->route('posts.index')
                        ->with('success','post deleted successfully');
    }
}
