<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\UserApply;
use App\Job;


class ApplyController extends Controller
{
    public function apply($id)
    {
        $job = Job::find($id);
        $company = $job->company;
        return view('frontend.apply.apply',compact('company'));

    }
    public function store(Request $request, $id){
        if ($request->hasFile('cv')) {
            $image = $request->cv->store('cvs');
        }
        $apply = new UserApply;
        $apply->user_id = auth()->user()->id;
        $apply->job_id = $id;
        $apply->experience = $request->experience;
        $apply->position = $request->postion;
        $apply->cv = $image;
        $job = Job::find($id);
        $apply->company_id = $job->company->id;
        $apply->save();
        return redirect()->back()->withStatus(__("You have applied to the job sucesssfully"));
    }

}

