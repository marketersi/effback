<?php

namespace App\Http\Controllers\BusinessNameCreation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BNCAnatomyGuideController extends Controller
{
    public function index(){
        $anatomy_Details = DB::table('tbl_bnc_anatomy_guide')->get();
        return view('business-name-creation.anatomy-guide.index',compact('anatomy_Details'));
    }
    public function add(){
        return view('business-name-creation.anatomy-guide.add');
    }
    public function store(Request $request){
        $status = DB::table('tbl_bnc_anatomy_guide')->insert($request->except('_token'));
        return redirect()->route('businessNameCreation.anatomyGuide')->with('success', 'Anatomy Guide data saved successfully');
    }
    public function edit(Request $request){
        $anatomy_Details = DB::table('tbl_bnc_anatomy_guide')->where('id',$request->id)->first();
        return view('business-name-creation.anatomy-guide.edit',compact('anatomy_Details'));
    }
    public function update(Request $request){
        $status = DB::table('tbl_bnc_anatomy_guide')->where('id',$request->id)->update($request->except('_token'));
        // dd($status);
        return redirect()->route('businessNameCreation.anatomyGuide')->with('success', 'Anatomy Guide data updated successfully');
    }
}
