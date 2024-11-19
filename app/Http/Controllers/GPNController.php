<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GPN;


class GPNController extends Controller
{
    public function gpnIndex()
    {
        $gpnDetail = GPN::get();
        // dd($logoDetail);
        return view('gpn.index', compact('gpnDetail'));
    }
    
    public function gpnCreate()
    {
        $gpnDetails = GPN::get();
        return view('gpn.create', compact('gpnDetails'));
    }

    public function gpnStore(Request $request)
    {
        
        $request->validate([
            'title' => 'required',
        ]);

        try {
            $details = [
                'title',
            ];
            

            foreach ($details as $detail) {
                
                $value = $request->input($detail);
                
                $existingtest = GPN::where('type', $detail)->first();

                if ($existingtest) {
                    
                    $existingtest->update(['message' => $value]);
                    
                } else {
                    GPN::create(['type' => $detail, 'message' => $value]);
                }
            }

            return redirect()->route('gpn.index')->with('success', 'GPN Data Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('gpn.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }
}
