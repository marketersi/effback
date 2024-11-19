<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Implementation;

class ImplementationController extends Controller
{
    public function index(){
        $details = Implementation::get();
        return view('implementation.index',compact('details'));
    }

    public function create(){
        $details = Implementation::get();
        return view('implementation.create',compact('details'));
    }

    public function store(Request $request)
    {
        try {
            $settingContact = [
                'title',
                'subtitle',
                'image'
            ];

            foreach ($settingContact as $contactus) {
                $value = $request->input($contactus);
                $existingSetting = Implementation::where('type', $contactus)->first();

                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    Implementation::create(['type' => $contactus, 'message' => $value]);
                }
            }

            return redirect()->route('implementation.implementationIndex')->with('success', 'Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('implementation.implementationIndex')->with('error', 'Error: ' . $e->getMessage());
        }
    }
    
}
