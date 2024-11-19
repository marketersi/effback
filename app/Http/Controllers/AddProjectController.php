<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddProjectModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class AddProjectController extends Controller
{
    public function projectIndex()
    {
        $users = AddProjectModel::get();
        
        // dd($users);
        return view('project.index' , compact('users'));
    }

    public function projectCreate()
    {
        // $users = AddProjectModel::get();
        // dd($users);
        return view('project.create');
    }

    public function projectStore(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'name' => 'required',
            'image' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try{
        
            // dd(45);
            // foreach ($projects as $project) {
                
            //     $value = $request->input($project);
            //     // dd($value);
            //     $addproject = AddProjectModel::where('type', $project)->first();

            //     if ($addproject) {
            //         $addproject->update(['message' => $value]);
            //     } else {
            //         AddProjectModel::create(['type' => $project, 'message' => $value]);
            //     }
            // }
            

            $user = new AddProjectModel;
$user->title = $request->title;
$user->name = $request->name;
$user->image = $request->image;
$user->email = $request->email;
$user->phone = $request->phone;
// dd($user); // Check the values here
$user->save();
        
            return redirect()->route('project.index')->with('success', 'Projects updated successfully');
        }catch (\Exception $e) {
            return redirect()->route('project.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    public function projectStatus($id)
    {
        $user = AddProjectModel::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }
        
        return redirect()->back()->with('error', 'User not found.');
    }

    public function projectEdit(Request $request)
    {
        // dd($request->id);
        $userId = $request->input('user_id');
        // dd($userId);
        $user = AddProjectModel::find($userId);
        // dd($user);
        return view('project.edit' , compact('user'));
    }

    public function projectUpdate(Request $request)
    {
        $request-> validate([
            'title' => '',
            'name' => '',
            'image' => '',
            'email' => '',
            'phone' => '',
        ]);
        $userId = $request->input('user_id');
        $post = AddProjectModel::find($userId);
        $post->update($request->all());
        // dd($post,$request);

        if($post == false){
            return redirect()->route('project.update')->with('error','Somthing went wrong !!');
        }

        return redirect()->route('project.index')->with('success','Project Updated Successfully');
    }
    
}
