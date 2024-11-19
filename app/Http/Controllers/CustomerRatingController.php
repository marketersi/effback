<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerRating;

class CustomerRatingController extends Controller
{
    public function ratingIndex()
    {
        $ratingSection = CustomerRating::orderBy('id', 'desc')->get();
        return view('rating-section.index', compact('ratingSection'));
    }

    public function ratingCreate()
    {
        $details = CustomerRating::get();
        return view('rating-section.create', compact('details'));
    }

    public function ratingStore(Request $request)
    {
            $ratingSetting = [
                'label',
                'brand_image_1',
                'barnd_image_2',
                'rating_text',
                'rating',
                'review',
                'name',
                'designation',
                'company',
                'rating_image_1',
                'rating_image_2',
                'question',
                'answer',
            ];
            
            foreach ($ratingSetting as $rating) {
                $value = $request->input($rating);
                $existingSetting = CustomerRating::where('type', $rating)->first();
                
                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    CustomerRating::create(['type' => $rating, 'message' => $value]);
                }
            }
            return redirect()->route('rating.section.index')->with('success', 'Rating updated successfully');
    }
}
