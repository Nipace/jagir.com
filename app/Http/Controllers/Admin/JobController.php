<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Job;
use App\Company;

class JobController extends Controller
{
    
    public function index()
    {
        $job = Job::all();        
        return view('backend.job.index',compact('job'));
    }

    public function create()
    {
        $user_id = \Auth::user()->id;
        $company = Company::where('user_id',$user_id)->first();
        return view('backend.job.create',compact('company'));
    }

    public function store(Request $request)
    {
       
        Job::create($request->all());
        return redirect()->back();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
