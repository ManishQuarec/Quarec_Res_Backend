<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Resume;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;


class ResumeController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resumes = Resume::latest()->paginate(5);
    
        return view('auth.resume.index',compact('resumes'))
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
       
        return view('auth.resume.create');
    }

      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'job_role' => 'required',
            'year_of_exp' => 'required',
            'current_ctc' => 'required',
            'exp_ctc' => 'required',
            'job_sector' => 'required',
            
        ]);
      
        $resume = new Resume;
        $resume->name = $request->name;
        $resume->email = $request->email;
        $resume->phone = $request->phone;
        $resume->job_role = $request->job_role;
        $resume->yeao_of_exp = $request->yeao_of_exp;
        $resume->current_ctc = $request->current_ctc;
        $resume->expected_ctc = $request->expected_ctc;
        $resume->job_sector = $request->job_sector;
      
        $resume->save();

        return redirect(url('auth/resume'))
        ->with('success','Resume created successfully.');
    }


    public function downloadFile($id)
    {
        $path = Resume::where("id", $id)->value("resume");
        return Storage::download($path);
    }

  
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id )
    {
        $resume = Resume::where("id", $id)->first();
   
        return view('auth.resume.show',compact('resume'));    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resume = Resume::where("id", $id)->first();
        $categories=Category::all();

        return view('auth.resume.edit',compact('resume','categories'));

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
        $resume = Resume::where("id", $id)->first();

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
         
        ]);
  
        $resume->update($request->all());
  
        return redirect(url('auth/resume'))->with('success','Resume updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $resume = Resume::where("id", $id)->first();

        $resume->delete();
    
        return redirect(url('auth/resume'))
                        ->with('success','Resume deleted successfully');
    }
}
