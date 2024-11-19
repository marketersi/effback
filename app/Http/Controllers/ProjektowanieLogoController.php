<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjektowanieLogo;

class ProjektowanieLogoController extends Controller
{
    public function logoIndex()
    {
        $logoDetail = ProjektowanieLogo::get();
        // dd($logoDetail);
        return view('projektowanie-logo.index', compact('logoDetail'));
    }
    public function logoCreate()
    {
        $logodetails = ProjektowanieLogo::get();
        return view('projektowanie-logo.create', compact('logodetails'));
    }

    public function logoStore(Request $request)
    {
        try {
            $details = [
                'title',
                'image',
                'subtitle',
                'text',
                'buttontext',
            ];
            

            foreach ($details as $detail) {
                
                $value = $request->input($detail);
                
                $existingtest = ProjektowanieLogo::where('type', $detail)->first();

                if ($existingtest) {
                    
                    $existingtest->update(['message' => $value]);
                    
                } else {
                    ProjektowanieLogo::create(['type' => $detail, 'message' => $value]);
                }
            }

            return redirect()->route('projekto.logo.index')->with('success', 'Projektowanie Logo Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('projekto.logo.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }
}
