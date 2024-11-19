<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FaqSection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class FaqController extends Controller
{
    public function faqIndex()
    {
        $users = FaqSection::all();
        
        // dd($users);
        return view('faq.index' , compact('users'));
    }

    public function faqCreate()
    {
        $details = FaqSection::get();
        // dd($users);
        return view('faq.create', compact('details'));
    }

    public function faqStore(Request $request)
    {
        // dd($request->all());   
        try{
            $existingSetting = FaqSection::where('id', $request->id)->first();

                if ($existingSetting) {
                    $existingSetting->update(['title' => $request->title]);
                } else {
                    FaqSection::create(['title' => $request->title,]);
                }
        
            return redirect()->route('faq.index')->with('success', 'FAQ Title Updated Successfully');
        }catch (\Exception $e) {
            return redirect()->route('faq.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    

    // public function faqEdit(Request $request)
    // {
    //     // dd($request->id);
    //     $userId = $request->input('user_id');
    //     // dd($userId);
    //     $user = FaqSection::find($userId);
    //     // dd($user);
    //     return view('faq.edit' , compact('user'));
    // }

    // public function faqUpdate(Request $request)
    // {
    //     $request -> validate([
    //         'title' => '',
    //     ]);
    //     $userId = $request->input('user_id');
    //     $post = FaqSection::find($userId);
    //     $post->update($request->all());

    //     if($post == false){
    //         return redirect()->route('faq.update')->with('error','Somthing went wrong !!');
    //     }

    //     return redirect()->route('faq.index')->with('success','Project Updated Successfully');
    // }    
}
