<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GoodBusiness;
class GoodBusinessController extends Controller
{
    public function goodBusinessIndex()
    {
        $businessDetail = GoodBusiness::get();
        // dd($logoDetail);
        return view('good-business.index', compact('businessDetail'));
    }
    
    public function goodBusinessCreate()
    {
        $businessDetails = GoodBusiness::get();
        return view('good-business.create', compact('businessDetails'));
    }

    public function goodBusinessStore(Request $request)
    {
        try {
            $details = [
                'title',
                'subtitle',
                'text',
                'image',
            ];
            

            foreach ($details as $detail) {
                
                $value = $request->input($detail);
                
                $existingtest = GoodBusiness::where('type', $detail)->first();

                if ($existingtest) {
                    
                    $existingtest->update(['message' => $value]);
                    
                } else {
                    GoodBusiness::create(['type' => $detail, 'message' => $value]);
                }
            }

            return redirect()->route('good.business.index')->with('success', 'Good Business Data Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('good.business.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }
}
