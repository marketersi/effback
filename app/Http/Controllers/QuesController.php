<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;
use Illuminate\Support\Facades\Validator;

class QuesController extends Controller
{
    public function quesIndex()
    {
        $users = Faq::all();
        
        // dd($users);
        return view('faq-questions.index' , compact('users'));
    }

    public function quesCreate()
    {
        // $users = AddProjectModel::get();
        // dd($users);
        return view('faq-questions.create');
    }

    public function quesStore(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'question' => 'required',
            'answer' => 'required'
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try{
            $user = new Faq;
            $user->question = $request->question;
            $user->answer = $request->answer;
            // dd($user); // Check the values here
            $user->save();
        
            return redirect()->route('ques.index')->with('success', 'FAQ Updated Successfully');
        }catch (\Exception $e) {
            return redirect()->route('ques.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    

    public function quesEdit(Request $request)
    {
        // dd($request->id);
        $userId = $request->input('user_id');
        // dd($userId);
        $user = Faq::find($userId);
        // dd($user);
        return view('faq-questions.edit' , compact('user'));
    }

    public function quesUpdate(Request $request)
    {
        $request -> validate([
            'question' => '',
            'p+answer' => '',
        ]);
        $userId = $request->input('user_id');
        $post = Faq::find($userId);
        $post->update($request->all());

        if($post == false){
            return redirect()->route('ques.update')->with('error','Somthing went wrong !!');
        }

        return redirect()->route('ques.index')->with('success','Questions Updated Successfully');
    }
}
