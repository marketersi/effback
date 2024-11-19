<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receive;

class ReceiveController extends Controller
{
    public function receiveIndex()
    {
        $receiveDetail = Receive::get();
        // dd($logoDetail);
        return view('receive.index', compact('receiveDetail'));
    }
    
    public function receiveCreate()
    {
        $receiveDetails = Receive::get();
        return view('receive.create', compact('receiveDetails'));
    }

    public function receiveStore(Request $request)
    {
        
        $request->validate([
            'title' => 'required',
            'subtitle'  => 'required',
            'image'  => 'required',
        ]);

        try {
            $details = [
                'title',
                'subtitle',
                'image',
            ];

            

            foreach ($details as $detail) {
                
                $value = $request->input($detail);
                
                $existingtest = Receive::where('type', $detail)->first();

                if ($existingtest) {
                    
                    $existingtest->update(['message' => $value]);
                    
                } else {
                    Receive::create(['type' => $detail, 'message' => $value]);
                }
            }

            return redirect()->route('receive.index')->with('success', 'Receive Data Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('receive.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }
}
