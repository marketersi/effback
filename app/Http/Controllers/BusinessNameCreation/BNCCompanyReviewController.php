<?php

namespace App\Http\Controllers\BusinessNameCreation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BNCCompanyReviewController extends Controller
{
    public function index(){
        $company_review_Details = DB::table('tbl_bnc_company_review')->get();
        
        return view('business-name-creation.company-review.index',compact('company_review_Details'));
    }
    public function add(){
        return view('business-name-creation.company-review.add');
    }
    public function store(Request $request){
        $status = DB::table('tbl_bnc_company_review')->insert($request->except('_token'));
        return redirect()->route('businessNameCreation.companyReview')->with('success', 'Comapny Review data saved successfully');
    }
    public function edit(Request $request){
        $company_review_Details = DB::table('tbl_bnc_company_review')->where('id',$request->id)->first();
        return view('business-name-creation.company-review.edit',compact('company_review_Details'));
    }
    public function update(Request $request){
        $status = DB::table('tbl_bnc_company_review')->where('id',$request->id)->update($request->except('_token'));
        // dd($status);
        return redirect()->route('businessNameCreation.companyReview')->with('success', 'Comapny Review data updated successfully');
    }
}
