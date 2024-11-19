<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guarantee;
use Illuminate\Support\Facades\Validator;

class GuaranteeController extends Controller
{
    public function guaranteeIndex()
    {
        $guaranteeDetail = Guarantee::get();
        // dd($logoDetail);
        return view('guarantee.index', compact('guaranteeDetail'));
    }
    
    public function guaranteeCreate()
    {
        $guaranteeDetails = Guarantee::get();
        return view('guarantee.create', compact('guaranteeDetails'));
    }

    public function guaranteeStore(Request $request)
    {
        
        $request->validate([
            'title' => 'required',
            'subtitle'  => 'required',
            'buttonText'  => 'required',
        ]);

        try {
            $details = [
                'title',
                'subtitle',
                'buttonText',
            ];

            

            foreach ($details as $detail) {
                
                $value = $request->input($detail);
                
                $existingtest = Guarantee::where('type', $detail)->first();

                if ($existingtest) {
                    
                    $existingtest->update(['message' => $value]);
                    
                } else {
                    Guarantee::create(['type' => $detail, 'message' => $value]);
                }
            }

            return redirect()->route('guarantee.index')->with('success', 'Guarantee Data Updated Successfully');
        } catch (\Exception $e) {
            
            return redirect()->route('guarantee.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }
}
