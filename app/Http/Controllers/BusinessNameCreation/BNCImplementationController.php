<?php

namespace App\Http\Controllers\BusinessNameCreation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BNCImplementationController extends Controller
{
    public function index(){
        $implementation_Details = DB::table('tbl_bnc_implementation')->get();
        return view('business-name-creation.implementation.index',compact('implementation_Details'));
    }
    public function add(){
        return view('business-name-creation.implementation.add');
    }
    public function store(Request $request){
        $status = DB::table('tbl_bnc_implementation')->insert($request->except('_token'));
        return redirect()->route('businessNameCreation.implementation')->with('success', 'Implementation data saved successfully');
    }
    public function edit(Request $request){
        $implementation_Details = DB::table('tbl_bnc_implementation')->where('id',$request->id)->first();
        return view('business-name-creation.implementation.edit',compact('implementation_Details'));
    }
    public function update(Request $request){
        $status = DB::table('tbl_bnc_implementation')->where('id',$request->id)->update($request->except('_token'));
        // dd($status);
        return redirect()->route('businessNameCreation.implementation')->with('success', 'Implementation data updated successfully');
    }
}
