<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GalleryImageGroup;
use Illuminate\Support\Facades\Validator;

class GalleryImageGroupController extends Controller
{
    public function galleryimageGroupIndex()
    {
        $images = GalleryImageGroup::all();
        
        // dd($users);
        return view('gallery-image-group.index' , compact('images'));
    }

    public function galleryimageGroupCreate()
    {
        // $users = AddProjectModel::get();
        // dd($users);
        return view('gallery-image-group.create');
    }

    public function galleryimageGroupStore(Request $request)
    {
        // dd($request->category);
        $validator = Validator::make($request->all(), [
            'image' => 'required',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try{
            $user = new GalleryImageGroup;
            $user->image = $request->image;
            // dd($user); // Check the values here
            $user->save();
        
            return redirect()->route('gallery.image.group.index')->with('success', 'Gallery created successfully');
        }catch (\Exception $e) {
            return redirect()->route('gallery.image.group.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    

    public function galleryimageGroupEdit(Request $request)
    {
        // dd($request->id);
        $userId = $request->input('user_id');
        // dd($userId);
        $image = GalleryImageGroup::find($userId);
        // dd($user);
        return view('gallery-image-group.edit' , compact('image'));
    }

    public function galleryimageGroupUpdate(Request $request)
    {
        // dd($request->all());
        $request -> validate([
            'image' => '',
        ]);
        $userId = $request->input('user_id');
        $post = GalleryImageGroup::find($userId);
        $post->update($request->all());

        if($post == false){
            return redirect()->route('gallery.image.group.update')->with('error','Somthing went wrong !!');
        }

        return redirect()->route('gallery.image.group.index')->with('success','Gallery Image Group Updated Successfully');
    }
}
