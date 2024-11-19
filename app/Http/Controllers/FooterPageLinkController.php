<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FooterPageLink;
use Illuminate\Support\Facades\Validator;

class FooterPageLinkController extends Controller
{
    public function pageLinkIndex()
    {
        $links = FooterPageLink::all();
        
        // dd($users);
        return view('projektowanie-footer-page-link.index' , compact('links'));
    }

    public function pageLinkCreate()
    {
        // $users = AddProjectModel::get();
        // dd($users);
        return view('projektowanie-footer-page-link.create');
    }

    public function pageLinkStore(Request $request)
    {
        // dd($request->category);
        $validator = Validator::make($request->all(), [
            'label' => 'required',
            'content' => 'required',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try{
            $user = new FooterPageLink;
            $user->label = $request->label;
            $user->content = $request->content;
            // dd($user); // Check the values here
            $user->save();
        
            return redirect()->route('footer.page.link.index')->with('success', 'Footer Page Link Created Successfully');
        }catch (\Exception $e) {
            return redirect()->route('footer.page.link.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    

    public function pageLinkEdit(Request $request)
    {
        // dd($request->id);
        $userId = $request->input('user_id');
        // dd($userId);
        $links = FooterPageLink::find($userId);
        // dd($user);
        return view('projektowanie-footer-page-link.edit' , compact('links'));
    }

    public function pageLinkUpdate(Request $request)
    {
        // dd($request->all());
        $request -> validate([
            'label' => '',
            'content' => '',
        ]);
        $userId = $request->input('user_id');
        $post = FooterPageLink::find($userId);
        $post->update($request->all());

        if($post == false){
            return redirect()->route('footer.page.link.update')->with('error','Somthing went wrong !!');
        }

        return redirect()->route('footer.page.link.index')->with('success','Footer Page Link Updated Successfully');
    }
}
