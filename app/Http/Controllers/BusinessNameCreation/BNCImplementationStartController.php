<?php

namespace App\Http\Controllers\BusinessNameCreation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BNCImplementationStartController extends Controller
{
    public function index(){
        $implementation_start_Details = DB::table('tbl_bnc_implementation_start')->get();
        return view('business-name-creation.implementation-start.index',compact('implementation_start_Details'));
    }
    public function add(){
        return view('business-name-creation.implementation-start.add');
    }
    public function store(Request $request){
        $status = DB::table('tbl_bnc_implementation_start')->insert($request->except('_token'));
        return redirect()->route('businessNameCreation.implementationStart')->with('success', 'Implementation Start data saved successfully');
    }
    public function edit(Request $request){
        $implementation_start_Details = DB::table('tbl_bnc_implementation_start')->where('id',$request->id)->first();
        return view('business-name-creation.implementation-start.edit',compact('implementation_start_Details'));
    }
    public function update(Request $request){
        $status = DB::table('tbl_bnc_implementation_start')->where('id',$request->id)->update($request->except('_token'));
        // dd($status);
        return redirect()->route('businessNameCreation.implementationStart')->with('success', 'Implementation Start data updated successfully');
    }
}
