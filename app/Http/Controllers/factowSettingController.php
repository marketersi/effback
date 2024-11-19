<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FactowSetting;

class factowSettingController extends Controller
{
    public function factowIndex()
    {
        $factowCard = FactowSetting::orderBy('id', 'desc')->get();
        return view('factow.index', compact('factowCard'));
    }

    public function factowCreate()
    {
        $details = FactowSetting::get();
        return view('factow.create', compact('details'));
    }

    public function factowStore(Request $request)
    {
            $factowSetting = [
                'title',
                'subtitle',
                'video_url',
            ];
            
            foreach ($factowSetting as $factow) {
                $value = $request->input($factow);
                $existingSetting = FactowSetting::where('type', $factow)->first();
                
                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    FactowSetting::create(['type' => $factow, 'message' => $value]);
                }
            }
            return redirect()->route('factow.index')->with('success', 'Contact settings updated successfully');
    }

    public function factowStatus($id)
    {
        $user = FactowSetting::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }
        
        return redirect()->back()->with('error', 'User not found.');
    }
   
}
