<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestaurantController extends Controller
{
    public function restaurantIndex()
    {
        $restaurantDetail = Restaurant::get();
        // dd($logoDetail);
        return view('restaurant.index', compact('restaurantDetail'));
    }
    
    public function restaurantCreate()
    {
        $restaurantDetails = Restaurant::get();
        return view('restaurant.create', compact('restaurantDetails'));
    }

    public function restaurantStore(Request $request)
    {
        
        $request->validate([
            'title' => 'required',
            'subtitle'  => 'required',
            'text1'  => 'required',
            'text2'  => 'required',
            'image_1'  => 'required',
            'text3'  => 'required',
            'text4'  => 'required',
            'image_2'  => 'required',
            'quote'  => 'required',
            'quoteAuthor'  => 'required',
        ]);

        try {
            $details = [
                'title',
            'subtitle' ,
            'text1',
            'text2',
            'image_1',
            'text3',
            'text4',
            'image_2',
            'quote' ,
            'quoteAuthor',
            ];
            

            foreach ($details as $detail) {
                
                $value = $request->input($detail);
                
                $existingtest = Restaurant::where('type', $detail)->first();

                if ($existingtest) {
                    
                    $existingtest->update(['message' => $value]);
                    
                } else {
                    Restaurant::create(['type' => $detail, 'message' => $value]);
                }
            }

            return redirect()->route('restaurant.index')->with('success', 'Restaurant Data Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->route('restaurant.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }
}
