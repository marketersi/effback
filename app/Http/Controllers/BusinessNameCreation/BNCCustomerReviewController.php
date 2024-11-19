<?php

namespace App\Http\Controllers\BusinessNameCreation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BNCCustomerReviewController extends Controller
{
    public function index(){
        $customer_review_Details = DB::table('tbl_bnc_customer_review')->get();
        return view('business-name-creation.customer-review.index',compact('customer_review_Details'));
    }
    public function add(){
        return view('business-name-creation.customer-review.add');
    }
    public function store(Request $request){
        $status = DB::table('tbl_bnc_customer_review')->insert($request->except('_token'));
        return redirect()->route('businessNameCreation.customerReview')->with('success', 'Customer Review data saved successfully');
    }
    public function edit(Request $request){
        $customer_review_Details = DB::table('tbl_bnc_customer_review')->where('id',$request->id)->first();
        return view('business-name-creation.customer-review.edit',compact('customer_review_Details'));
    }
    public function update(Request $request){
        $status = DB::table('tbl_bnc_customer_review')->where('id',$request->id)->update($request->except('_token'));
        // dd($status);
        return redirect()->route('businessNameCreation.customerReview')->with('success', 'Customer Review  data updated successfully');
    }
}
