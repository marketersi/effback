<?php

namespace App\Http\Controllers\BusinessNameCreation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BNCProjectValueController extends Controller
{
    public function index(){
        $projectValue_Details = DB::table('tbl_bnc_project_value')->get();
        return view('business-name-creation.project-value.index',compact('projectValue_Details'));
    }
    public function add(){
        return view('business-name-creation.project-value.add');
    }
    public function store(Request $request){
        $status = DB::table('tbl_bnc_project_value')->insert($request->except('_token'));
        return redirect()->route('businessNameCreation.projectValue')->with('success', 'Project Value data saved successfully');
    }
    public function edit(Request $request){
        $projectValue_Details = DB::table('tbl_bnc_project_value')->where('id',$request->id)->first();
        return view('business-name-creation.project-value.edit',compact('projectValue_Details'));
    }
    public function update(Request $request){
        $status = DB::table('tbl_bnc_project_value')->where('id',$request->id)->update($request->except('_token'));
        // dd($status);
        return redirect()->route('businessNameCreation.projectValue')->with('success', 'Project Value data updated successfully');
    }
}
