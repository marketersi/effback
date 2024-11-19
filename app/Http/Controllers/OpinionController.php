<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Opinion;

class OpinionController extends Controller
{
    public function opinionIndex()
    {
        $opinionsDetail = Opinion::get();
        // dd($logoDetail);
        return view('opinion.index', compact('opinionsDetail'));
    }
    
    public function opinionCreate()
    {
        $opinionsDetails = Opinion::get();
        return view('opinion.create', compact('opinionsDetails'));
    }

    public function opinionStore(Request $request)
    {
        try {
            $details = [
                'image',
                'imageText',
            ];
            

            foreach ($details as $detail) {
                
                $value = $request->input($detail);
                
                $existingtest = Opinion::where('type', $detail)->first();

                if ($existingtest) {
                    
                    $existingtest->update(['message' => $value]);
                    
                } else {
                    Opinion::create(['type' => $detail, 'message' => $value]);
                }
            }

            return redirect()->route('exam-opinion.index')->with('success', 'Opinion Data Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('exam-opinion.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }
}
