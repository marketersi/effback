<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FreeShops;

class FreeShopsController extends Controller
{
    public function freeShopsIndex()
    {
        $shopsDetail = FreeShops::get();
        // dd($logoDetail);
        return view('free-shops.index', compact('shopsDetail'));
    }
    
    public function freeShopsCreate()
    {
        $shopsDetails = FreeShops::get();
        return view('free-shops.create', compact('shopsDetails'));
    }

    public function freeShopsStore(Request $request)
    {
        
        $request->validate([
            'title' => 'required',
            'subtitle'  => 'required',
            'mainImageText1'  => 'required',
            'mainImageText2'  => 'required',
            'mainImageText3'  => 'required',
            'mainImage'  => 'required',
            'bannerImageTextAbove1'  => 'required',
            'bannerImageTextAbove2'  => 'required',
            'bannerimage'  => 'required',
            'bannerImageTextBelow1'  => 'required',
            'bannerImageTextBelow2'  => 'required',
        ]);

        try {
            $details = [
                'title' ,
                'subtitle'  ,
                'mainImageText1',
                'mainImageText2',
                'mainImageText3',
                'mainImage'  ,
                'bannerImageTextAbove1',
                'bannerImageTextAbove2',
                'bannerimage'  ,
                'bannerImageTextBelow1',
                'bannerImageTextBelow2',
            ];
            

            foreach ($details as $detail) {
                
                $value = $request->input($detail);
                
                $existingtest = FreeShops::where('type', $detail)->first();

                if ($existingtest) {
                    
                    $existingtest->update(['message' => $value]);
                    
                } else {
                    FreeShops::create(['type' => $detail, 'message' => $value]);
                }
            }

            return redirect()->route('free.shops.index')->with('success', 'Free Shops Data Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('free.shops.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }
}
