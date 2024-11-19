<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjektowanieProject;

class ProjektowanieProjectController extends Controller
{
    public function projectValueIndex()
    {
        $projectDetail = ProjektowanieProject::get();
        // dd($logoDetail);
        return view('projektowanie-project.index', compact('projectDetail'));
    }
    
    public function projectValueCreate()
    {
        $projectDetails = ProjektowanieProject::get();
        return view('projektowanie-project.create', compact('projectDetails'));
    }

    public function projectValueStore(Request $request)
    {
        try {
            $details = [
                'title',
                'subtitle',
                'image',
                'imageTitle',
                'imageSubtitle',
                'galleryTitle',
                'galleryImage'
            ];
            

            foreach ($details as $detail) {
                
                $value = $request->input($detail);
                
                $existingtest = ProjektowanieProject::where('type', $detail)->first();

                if ($existingtest) {
                    
                    $existingtest->update(['message' => $value]);
                    
                } else {
                    ProjektowanieProject::create(['type' => $detail, 'message' => $value]);
                }
            }

            return redirect()->route('project.value.index')->with('success', 'Project Data Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('project.value.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }
}
