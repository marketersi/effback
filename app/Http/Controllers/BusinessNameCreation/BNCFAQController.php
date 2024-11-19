<?php

namespace App\Http\Controllers\BusinessNameCreation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BNCFAQController extends Controller
{
    public function index(){
        $faq_Details = DB::table('tbl_bnc_faq')->get();
        return view('business-name-creation.faq.index',compact('faq_Details'));
    }
    public function add(){
        return view('business-name-creation.faq.add');
    }
    public function store(Request $request){
        $status = DB::table('tbl_bnc_faq')->insert($request->except('_token'));
        return redirect()->route('businessNameCreation.faq')->with('success', 'FAQ data saved successfully');
    }
    public function edit(Request $request){
        $faq_Details = DB::table('tbl_bnc_faq')->where('id',$request->id)->first();
        return view('business-name-creation.faq.edit',compact('faq_Details'));
    }
    public function update(Request $request){
        $status = DB::table('tbl_bnc_faq')->where('id',$request->id)->update($request->except('_token'));
        // dd($status);
        return redirect()->route('businessNameCreation.faq')->with('success', 'FAQ data updated successfully');
    }
}
