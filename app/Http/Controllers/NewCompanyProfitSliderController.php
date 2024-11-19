<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewCompanyProfitSlider;
use Illuminate\Support\Facades\Validator;

class NewCompanyProfitSliderController extends Controller
{
    public function newCompanyProfitIndex()
    {
        $images = NewCompanyProfitSlider::all();
        
        // dd($users);
        return view('new-company-profit-slider.index' , compact('images'));
    }

    public function newCompanyProfitCreate()
    {
        // $users = AddProjectModel::get();
        // dd($users);
        return view('new-company-profit-slider.create');
    }

    public function newCompanyProfitStore(Request $request)
    {
        // dd($request->category);
        $validator = Validator::make($request->all(), [
            'image' => 'required',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try{
            $user = new NewCompanyProfitSlider;
            $user->image = $request->image;
            // dd($user); // Check the values here
            $user->save();
        
            return redirect()->route('new.company.profit.index')->with('success', 'New Company Profit Slider Created Successfully');
        }catch (\Exception $e) {
            return redirect()->route('new.company.profit.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    

    public function newCompanyProfitEdit(Request $request)
    {
        // dd($request->id);
        $userId = $request->input('user_id');
        // dd($userId);
        $image = NewCompanyProfitSlider::find($userId);
        // dd($user);
        return view('new-company-profit-slider.edit' , compact('image'));
    }

    public function newCompanyProfitUpdate(Request $request)
    {
        // dd($request->all());
        $request -> validate([
            'image' => '',
        ]);
        $userId = $request->input('user_id');
        $post = NewCompanyProfitSlider::find($userId);
        $post->update($request->all());

        if($post == false){
            return redirect()->route('new.company.profit.update')->with('error','Somthing went wrong !!');
        }

        return redirect()->route('new.company.profit.index')->with('success','New Company Profit Slider Updated Successfully');
    }
}
