<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GPNCompany;
use Illuminate\Support\Facades\Validator;

class GPNCompanyController extends Controller
{
    public function gpnCompanyIndex()
    {
        $details = GPNCompany::all();
        
        // dd($users);
        return view('gpn-company.index' , compact('details'));
    }

    public function gpnCompanyCreate()
    {
        // $users = AddProjectModel::get();
        // dd($users);
        return view('gpn-company.create');
    }

    public function gpnCompanyStore(Request $request)
    {
        // dd($request->category);
        $validator = Validator::make($request->all(), [
            'image' => 'required',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try{
            $user = new GPNCompany;
            $user->image = $request->image;
            // dd($user); // Check the values here
            $user->save();
        
            return redirect()->route('gpn.company.index')->with('success', 'GPN Company Logo Created Successfully');
        }catch (\Exception $e) {
            return redirect()->route('gpn.company.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    

    public function gpnCompanyEdit(Request $request)
    {
        // dd($request->id);
        $userId = $request->input('user_id');
        // dd($userId);
        $details = GPNCompany::find($userId);
        // dd($user);
        return view('gpn-company.edit' , compact('details'));
    }

    public function gpnCompanyUpdate(Request $request)
    {
        // dd($request->all());
        $request -> validate([
            'image' => '',
        ]);
        $userId = $request->input('user_id');
        $post = GPNCompany::find($userId);
        // dd($post);
        $post->update($request->all());

        if($post == false){
            return redirect()->route('gpn.company.update')->with('error','Somthing went wrong !!');
        }

        return redirect()->route('gpn.company.index')->with('success','GPN Company Logo Updated Successfully');
    }
}
