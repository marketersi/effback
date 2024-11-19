<?php

namespace App\Http\Controllers\BusinessNameCreation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BNCAnatomyController extends Controller
{
    public function index(){
        $anatomy_Details = DB::table('tbl_bnc_anatomy')->get();
        return view('business-name-creation.anatomy.index',compact('anatomy_Details'));
    }
    public function add(){
        return view('business-name-creation.anatomy.add');
    }
    public function store(Request $request){
        $status = DB::table('tbl_bnc_anatomy')->insert($request->except('_token'));
        return redirect()->route('businessNameCreation.anatomy')->with('success', 'Anatomy data saved successfully');
    }
    public function edit(Request $request){
        $anatomy_Details = DB::table('tbl_bnc_anatomy')->where('id',$request->id)->first();
        return view('business-name-creation.anatomy.edit',compact('anatomy_Details'));
    }
    public function update(Request $request){
        $status = DB::table('tbl_bnc_anatomy')->where('id',$request->id)->update($request->except('_token'));
        // dd($status);
        return redirect()->route('businessNameCreation.anatomy')->with('success', 'Anatomy data updated successfully');
    }
}
