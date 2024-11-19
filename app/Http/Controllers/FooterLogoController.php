<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FooterLogo;

class FooterLogoController extends Controller
{
    public function footerLogoIndex()
    {
        $footerDetail = FooterLogo::get();
        // dd($logoDetail);
        return view('projektowanie-footer.index', compact('footerDetail'));
    }
    
    public function footerLogoCreate()
    {
        $footerDetails = FooterLogo::get();
        return view('projektowanie-footer.create', compact('footerDetails'));
    }

    public function footerLogoStore(Request $request)
    {
        
        $request->validate([
            'downloadButtonText' => 'required',
            'formButtonText'  => 'required',
        ]);

        try {
            $details = [
                'downloadButtonText',
            'formButtonText' ,
            ];
            

            foreach ($details as $detail) {
                
                $value = $request->input($detail);
                
                $existingtest = FooterLogo::where('type', $detail)->first();

                if ($existingtest) {
                    
                    $existingtest->update(['message' => $value]);
                    
                } else {
                    FooterLogo::create(['type' => $detail, 'message' => $value]);
                }
            }

            return redirect()->route('footer.logo.index')->with('success', 'Footer Logo Data Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('footer.logo.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }
}
