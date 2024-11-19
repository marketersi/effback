<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResearchResult;

class ResearchController extends Controller
{
    public function researchIndex()
    {
        $contactDetail = ResearchResult::orderBy('id', 'desc')->get();
        return view('research.index', compact('contactDetail'));
    }
    public function researchCreate()
    {

        $details = ResearchResult::get();
        return view('research.create', compact('details'));
    }

    public function researchStore(Request $request)
    {
        
        // dd($request->sub_title);   
        try {
            $researchs = [
                'title',
                'sub_title',
            ];

            foreach ($researchs as $research) {
                 
                $value = $request->input($research);
                
                $existingSetting = ResearchResult::where('type', $research)->first();
                
                if (!empty($existingSetting)) {

                    $existingSetting->update(['message' => $value]);
                }else {
                    // dd($research);   
                    $researchSection = new ResearchResult;
                    $researchSection->type = $research;
                    $researchSection->message = $value;

                    $researchSection->save();
                }
            }
            return redirect()->route('research.index')->with('success', 'Research updated successfully');
        } catch (\Exception $e) {
            
            return redirect()->route('research.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }
}
