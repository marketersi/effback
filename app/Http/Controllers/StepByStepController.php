<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StepByStep;

class StepByStepController extends Controller
{
    public function StepByStepIndex()
    {
        $stepDetail = StepByStep::get();
        // dd($logoDetail);
        return view('step-by-step.index', compact('stepDetail'));
    }
    
    public function StepByStepCreate()
    {
        $stepDetails = StepByStep::get();
        return view('step-by-step.create', compact('stepDetails'));
    }

    public function StepByStepStore(Request $request)
    {
        
        $request->validate([
            'title' => 'required',
            'subtitle'  => 'required',
            'image'  => 'required',
            'imageTitle'  => 'required',
            'imageSubTitle'  => 'required',
            'secondaryImage'  => 'required',
            'secondaryImageTitle'  => 'required',
            'secondaryImageSubtitle'  => 'required',
            'secondaryImageSubtitle2' => 'required',
            'bannerImage'  => 'required',
            'bannerImageTitle'  => 'required',
            'bannerImageSubtitle'  => 'required',
        ]);

        try {
            $details = [
                'title' ,
                'subtitle'  ,
                'image'  ,
                'imageTitle'  ,
                'imageSubTitle'  ,
                'secondaryImage'  ,
                'secondaryImageTitle'  ,
                'secondaryImageSubtitle'  ,
                'secondaryImageSubtitle2',
                'bannerImage'  ,
                'bannerImageTitle'  ,
                'bannerImageSubtitle'  ,
            ];
            

            foreach ($details as $detail) {
                
                $value = $request->input($detail);
                
                $existingtest = StepByStep::where('type', $detail)->first();

                if ($existingtest) {
                    
                    $existingtest->update(['message' => $value]);
                    
                } else {
                    StepByStep::create(['type' => $detail, 'message' => $value]);
                }
            }

            return redirect()->route('step.by.step.index')->with('success', 'Step By Step Data Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('step.by.step.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }
}
