<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImageGroup;
use Illuminate\Support\Facades\Validator;

class ImageGroupController extends Controller
{
    public function imageGroupIndex()
    {
        $images = ImageGroup::all();
        // dd($images);
        // $images = json_decode($images->group);
        // dd($images);
        return view('images-group.index' , compact('images'));
    }

    public function imageGroupCreate()
    {
        return view('images-group.create');
    }

    public function imageGroupStore(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'group' => 'required',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try{
            $user = new ImageGroup;
            $user->image = json_encode($request->group);
            // dd($user->image); // Check the values here
            $user->save();
        
            return redirect()->route('image.group.index')->with('success', 'Images created successfully');
        }catch (\Exception $e) {
            return redirect()->route('image.group.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    

    public function imageGroupEdit(Request $request)
    {
        // dd($request->id);
        $userId = $request->input('user_id');
        // dd($userId);
        $user = ImageGroup::find($userId);
        // dd($user);
        return view('images-group.edit' , compact('user'));
    }

    public function imageGroupUpdate(Request $request)
    {
        $request -> validate([
            'image' => ''
        ]);
        $userId = $request->input('user_id');
        $post = ImageGroup::find($userId);
        $post->update($request->all());

        if($post == false){
            return redirect()->route('image.group.update')->with('error','Somthing went wrong !!');
        }

        return redirect()->route('image.group.index')->with('success','Updated Successfully');
    }
}
