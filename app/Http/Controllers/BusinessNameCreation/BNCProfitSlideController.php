<?php

namespace App\Http\Controllers\BusinessNameCreation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BNCProfitSlideController extends Controller
{
    public function index(){
        $profitSlide_Details = DB::table('tbl_bnc_profit_slide')->get();
        return view('business-name-creation.profit-slide.index',compact('profitSlide_Details'));
    }
    public function add(){
        return view('business-name-creation.profit-slide.add');
    }
    public function store(Request $request){
      
        $status = DB::table('tbl_bnc_profit_slide')->insert([
            'title' => $request->input('title'),
            'subtitle' => $request->input('subtitle'),
            'text' => $request->input('text'),
            'image' =>json_encode($request->input('image')),
            
        ]);
        return redirect()->route('businessNameCreation.profitSlide')->with('success', 'Profit Slide data saved successfully');
    }
    public function edit(Request $request){
        $profitSlide_Details = DB::table('tbl_bnc_profit_slide')->where('id',$request->id)->first();
        return view('business-name-creation.profit-slide.edit',compact('profitSlide_Details'));
    }
    public function update(Request $request){
        $status = DB::table('tbl_bnc_profit_slide')->where('id',$request->id)->update($request->except('_token'));
        // dd($status);
        return redirect()->route('businessNameCreation.profitSlide')->with('success', 'Profit Slide data updated successfully');
    }
}
