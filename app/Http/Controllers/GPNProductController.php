<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GPNProduct;
use Illuminate\Support\Facades\Validator;

class GPNProductController extends Controller
{
    public function gpnProductIndex()
    {
        $details = GPNProduct::all();
        
        // dd($users);
        return view('gpn-product.index' , compact('details'));
    }

    public function gpnProductCreate()
    {
        // $users = AddProjectModel::get();
        // dd($users);
        return view('gpn-product.create');
    }

    public function gpnProductStore(Request $request)
    {
        // dd($request->category);
        $validator = Validator::make($request->all(), [
            'image' => 'required',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try{
            $user = new GPNProduct;
            $user->image = $request->image;
            // dd($user); // Check the values here
            $user->save();
        
            return redirect()->route('gpn.product.index')->with('success', 'GPN Product Logo Created Successfully');
        }catch (\Exception $e) {
            return redirect()->route('gpn.product.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    

    public function gpnProductEdit(Request $request)
    {
        // dd($request->id);
        $userId = $request->input('user_id');
        // dd($userId);
        $details = GPNProduct::find($userId);
        // dd($user);
        return view('gpn-product.edit' , compact('details'));
    }

    public function gpnProductUpdate(Request $request)
    {
        // dd($request->all());
        $request -> validate([
            'image' => '',
        ]);
        $userId = $request->input('user_id');
        $post = GPNProduct::find($userId);
        // dd($post);
        $post->update($request->all());

        if($post == false){
            return redirect()->route('gpn.product.update')->with('error','Somthing went wrong !!');
        }

        return redirect()->route('gpn.product.index')->with('success','GPN Product Logo Updated Successfully');
    }
}
