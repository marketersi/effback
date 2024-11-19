<?php

namespace App\Http\Controllers\BusinessNameCreation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BNCLaunchEssentialsController extends Controller
{
    public function index(){
        $launch_essentials_Details = DB::table('tbl_bnc_launch_essentials')->get();
        return view('business-name-creation.launch-essentials.index',compact('launch_essentials_Details'));
    }
    public function add(){
        return view('business-name-creation.launch-essentials.add');
    }
    public function store(Request $request){
        $status = DB::table('tbl_bnc_launch_essentials')->insert($request->except('_token'));
        return redirect()->route('businessNameCreation.launchEssentials')->with('success', 'Launch essentials data saved successfully');
    }
    public function edit(Request $request){
        $launch_essentials_Details = DB::table('tbl_bnc_launch_essentials')->where('id',$request->id)->first();
        return view('business-name-creation.launch-essentials.edit',compact('launch_essentials_Details'));
    }
    public function update(Request $request){
        $status = DB::table('tbl_bnc_launch_essentials')->where('id',$request->id)->update($request->except('_token'));
        return redirect()->route('businessNameCreation.launchEssentials')->with('success', 'Launch essentials data updated successfully');
    }
}
