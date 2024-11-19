<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Park;

class ParkController extends Controller
{
    public function parkIndex()
    {
        $parkDetail = Park::get();
        // dd($logoDetail);
        return view('park.index', compact('parkDetail'));
    }
    
    public function parkCreate()
    {
        $parkDetails = Park::get();
        return view('park.create', compact('parkDetails'));
    }

    public function parkStore(Request $request)
    {
        
        $request->validate([
            'title' => 'required',
            'subtitle'  => 'required',
            'text'  => 'required',
            'logoImage'  => 'required',
            'bannerImage'  => 'required',
        ]);

        try {
            $details = [
                'title',
            'subtitle' ,
            'text' ,
            'logoImage',
            'bannerImage',
            ];
            

            foreach ($details as $detail) {
                
                $value = $request->input($detail);
                
                $existingtest = Park::where('type', $detail)->first();

                if ($existingtest) {
                    
                    $existingtest->update(['message' => $value]);
                    
                } else {
                    Park::create(['type' => $detail, 'message' => $value]);
                }
            }

            return redirect()->route('park.index')->with('success', 'Park Data Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('park.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }
}
