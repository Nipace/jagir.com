<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\JobSkill;
use App\SkillQuestion;

class JobSkillTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skill_test = JobSkill::all();
        return view('backend.skilltest.index',compact('skill_test'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.skilltest.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       try {
           $skill_test = JobSkill::create($request->all());
           return redirect(route('question.create',$skill_test));
       } catch (\Exception $th) {
           return redirect()->back()->withStatus($th->getmessage());
    }
}
    public function createQuestion($job_skill_id)
    {
        $skill_test = JobSkill::find($job_skill_id);
        return view('backend.skilltest.question.create');
    }
    public function storeQuestion(Request $request, $job_skill_id)
    {
        $request['job_skill_id']=$job_skill_id;
        try {
            SkillQuestion::create($request->all());
            switch ($request->submit) {
                case 'next':
                    return redirect()->back();
                    break;
                case 'save':
                    return redirect(route('skill-test.index'));
                    break;
            }
        } catch (\Exception $th) {
            return redirect()->back()->withStatus($th->getmessage());
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
