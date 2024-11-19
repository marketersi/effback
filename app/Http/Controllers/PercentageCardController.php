<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PercentageCard;
use Illuminate\Support\Facades\Validator;

class PercentageCardController extends Controller
{
    public function percentageIndex()
    {
        $users = PercentageCard::all();
        
        // dd($users);
        return view('percentage-card.index' , compact('users'));
    }

    public function percentageCreate()
    {
        // $users = AddProjectModel::get();
        // dd($users);
        return view('percentage-card.create');
    }

    public function percentageStore(Request $request)
    {
        // dd($request->category);
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'percentage_value' => 'required',
            'website' => 'required',
            'category' => 'required',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try{
            $user = new PercentageCard;
            $user->title = $request->title;
            $user->percentage_value = $request->percentage_value;
            $user->website = $request->website;
            $user->category = $request->category;
            // dd($user); // Check the values here
            $user->save();
        
            return redirect()->route('percentage.index')->with('success', 'Percentage created successfully');
        }catch (\Exception $e) {
            return redirect()->route('percentage.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    

    public function percentageEdit(Request $request)
    {
        // dd($request->id);
        $userId = $request->input('user_id');
        // dd($userId);
        $user = PercentageCard::find($userId);
        // dd($user);
        return view('percentage-card.edit' , compact('user'));
    }

    public function percentageUpdate(Request $request)
    {
        $request -> validate([
            'title' => '',
            'p+ercentage_value' => '',
            'website' => '',
            'category' => '',
        ]);
        $userId = $request->input('user_id');
        $post = PercentageCard::find($userId);
        $post->update($request->all());

        if($post == false){
            return redirect()->route('percentage.update')->with('error','Somthing went wrong !!');
        }

        return redirect()->route('percentage.index')->with('success','Percentage Updated Successfully');
    }
}
