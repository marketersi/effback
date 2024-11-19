<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LogoAccordion;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class LogoAccordionController extends Controller
{
    public function logoAccordion1Index(){
        $details = DB::table('tbl_projekto_logo_accordion')->get();
        return view('projektowanie-logo-accordion.logoIndex',compact('details'));
    }
    public function logoAccordion1Create(){
        $details =  DB::table('tbl_projekto_logo_accordion')->get();
        
        return view('projektowanie-logo-accordion.logoCreate',compact('details'));
    }
    public function logoAccordion1Store(Request $request){
        try{
        // dd($request->all());
        $settingContact = [
            'title',
            'description',
        ];
        
        foreach ($settingContact as $contactus) {
            $value = $request->input($contactus);
            $existingSetting = DB::table('tbl_projekto_logo_accordion')->where('type', $contactus)->first();
        
            if ($existingSetting) {
                DB::table('tbl_projekto_logo_accordion')->where('type', $contactus)->update(['message' => $value]);
            } else {
                DB::table('tbl_projekto_logo_accordion')->insert(['type' => $contactus, 'message' => $value]);
            }
        }
        
        return redirect()->route('logo.accordion1.index')->with('success', 'Data updated successfully');
    } catch (\Exception $e) {
        return redirect()->route('logo.accordion1.index')->with('error', 'Error: ' . $e->getMessage());
    }
    }
    
    public function logoAccordionIndex()
    {
        $details = LogoAccordion::all();
        
        // dd($users);
        return view('projektowanie-logo-accordion.index' , compact('details'));
    }

    public function logoAccordionCreate()
    {
        // $users = AddProjectModel::get();
        // dd($users);
        return view('projektowanie-logo-accordion.create');
    }

    public function logoAccordionStore(Request $request)
    {
        // dd($request->category);
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'content' => 'required',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try{
            $user = new LogoAccordion;
            $user->title = $request->title;
            $user->content = $request->content;
            // dd($user); // Check the values here
            $user->save();
        
            return redirect()->route('logo.accordion.index')->with('success', 'Logo Accordion Created Successfully');
        }catch (\Exception $e) {
            return redirect()->route('logo.accordion.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    

    public function logoAccordionEdit(Request $request)
    {
        // dd($request->id);
        $userId = $request->input('user_id');
        // dd($userId);
        $details = LogoAccordion::find($userId);
        // dd($user);
        return view('projektowanie-logo-accordion.edit' , compact('details'));
    }

    public function logoAccordionUpdate(Request $request)
    {
        // dd($request->all());
        $request -> validate([
            'title' => '',
            'content' => '',
        ]);
        $userId = $request->input('user_id');
        $post = LogoAccordion::find($userId);
        // dd($post);
        $post->update($request->all());

        if($post == false){
            return redirect()->route('logo.accordion.update')->with('error','Somthing went wrong !!');
        }

        return redirect()->route('logo.accordion.index')->with('success','Logo Accordion Updated Successfully');
    }
}
