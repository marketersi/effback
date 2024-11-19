<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReceivePoints;
use Illuminate\Support\Facades\Validator;

class ReceivePointsController extends Controller
{
    public function pointsIndex()
    {
        $points = ReceivePoints::all();

        return view('receive-points.index' , compact('points'));
    }

    public function pointsCreate()
    {
        return view('receive-points.create');
    }

    public function pointsStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'point' => 'required',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try{
            $user = new ReceivePoints;
            $user->point = $request->point;
            // dd($user); // Check the values here
            $user->save();
        
            return redirect()->route('receive.points.index')->with('success', 'Receive Points created successfully');
        }catch (\Exception $e) {
            return redirect()->route('receive.points.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    

    public function pointsEdit(Request $request)
    {
        // dd($request->id);
        $userId = $request->input('user_id');
        // dd($userId);
        $point = ReceivePoints::find($userId);
        // dd($user);
        return view('receive-points.edit' , compact('point'));
    }

    public function pointsUpdate(Request $request)
    {
        // dd($request->all());
        $request -> validate([
            'point' => '',
        ]);
        // dd($request->all());
        $userId = $request->input('user_id');
        // dd($userId);
        $post = ReceivePoints::find($userId);
        // dd($post);
        $post->update(['point' => $request->point]);

        if($post == false){
            return redirect()->route('receive.points.update')->with('error','Somthing went wrong !!');
        }

        return redirect()->route('receive.points.index')->with('success','Receive Points Updated Successfully');
    }
}
