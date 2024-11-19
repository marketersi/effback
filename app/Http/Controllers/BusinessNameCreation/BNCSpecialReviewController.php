<?php

namespace App\Http\Controllers\BusinessNameCreation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BNCSpecialReviewController extends Controller
{
    public function index(){
        $specialReview_Details = DB::table('tbl_bnc_special_review')->get();
        $specialReview_Details2 = DB::table('tbl_bnc_special_review2')->get();
        return view('business-name-creation.special-review.index',compact('specialReview_Details','specialReview_Details2'));
    }
    public function add(){
        return view('business-name-creation.special-review.add');
    }
    public function store(Request $request){
        $status = DB::table('tbl_bnc_special_review')->insert($request->except('_token'));
        return redirect()->route('businessNameCreation.specialReview')->with('success', 'Special Review data saved successfully');
    }
    public function edit(Request $request){
        $specialReview_Details = DB::table('tbl_bnc_special_review')->where('id',$request->id)->first();
        return view('business-name-creation.special-review.edit',compact('specialReview_Details'));
    }
    public function update(Request $request){
        $status = DB::table('tbl_bnc_special_review')->where('id',$request->id)->update($request->except('_token'));
        // dd($status);
        return redirect()->route('businessNameCreation.specialReview')->with('success', 'Special Review data updated successfully');
    }
    public function add2(){
        return view('business-name-creation.special-review.add2');
    }
    public function store2(Request $request){
        $status = DB::table('tbl_bnc_special_review2')->insert($request->except('_token'));
        return redirect()->route('businessNameCreation.specialReview')->with('success', 'Special Review 2 data saved successfully');
    }
    public function edit2(Request $request){
        $specialReview_Details = DB::table('tbl_bnc_special_review2')->where('id',$request->id)->first();
        return view('business-name-creation.special-review.edit2',compact('specialReview_Details'));
    }
    public function update2(Request $request){
        $status = DB::table('tbl_bnc_special_review2')->where('id',$request->id)->update($request->except('_token'));
        // dd($status);
        return redirect()->route('businessNameCreation.specialReview')->with('success', 'Special Review 2 data updated successfully');
    }
}
