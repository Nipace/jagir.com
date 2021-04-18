<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\UserApply;

class ResposneController extends Controller
{
    public function index(){
        $job = UserApply::all();
        return view('backend.response.index',compact('job'));
    }
    public function viewcv($id)
    {
        $response = UserApply::find($id);
        return view('backend.response.show',compact('response'));
    }
    
}
