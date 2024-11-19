<?php

namespace App\Http\Controllers\BusinessNameCreation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BNCHeroSectionController extends Controller
{
    public function index(){
        $herosection_Details = DB::table('tbl_bnc_hero_section')->get();
        return view('business-name-creation.hero-section.index',compact('herosection_Details'));
    }
    public function add(){
        return view('business-name-creation.hero-section.add');
    }
    public function store(Request $request){
        $status = DB::table('tbl_bnc_hero_section')->insert($request->except('_token'));
        return redirect()->route('businessNameCreation.heroSection')->with('success', 'Hero data saved successfully');
    }
    public function edit(Request $request){
        $herosection_Details = DB::table('tbl_bnc_hero_section')->where('id',$request->id)->first();
        return view('business-name-creation.hero-section.edit',compact('herosection_Details'));
    }
    public function update(Request $request){
        $status = DB::table('tbl_bnc_hero_section')->where('id',$request->id)->update($request->except('_token'));
        return redirect()->route('businessNameCreation.heroSection')->with('success', 'Hero data updated successfully');
    }




    // public function index(){
    //     return view('business-name-creation.hero-section.index');
    // }
    // public function add(){
    //     return view('business-name-creation.hero-section.index');
    // }
    // public function store(Request $request){
    //     return back()->with('success','true');
    // }
    // public function edit($id){
    //     return view('business-name-creation.hero-section.index');
    // }
    // public function update($id, Request $request){
    //     return back()->with('success','true');
    // }
}
