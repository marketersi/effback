<?php

namespace App\Http\Controllers;

use App\Models\KreatywnyRating;
use Illuminate\Http\Request;

class KreatywnyRatingController extends Controller
{
    public function kreatywnyRatingIndex()
    {
        $ratingSection = KreatywnyRating::orderBy('id', 'desc')->get();
        return view('kreatywny-rating.index', compact('ratingSection'));
    }

    public function kreatywnyRatingCreate()
    {
        $details = KreatywnyRating::get();
        return view('kreatywny-rating.create', compact('details'));
    }

    public function kreatywnyRatingStore(Request $request)
    {
            $ratingSetting = [
                'main_title',
                'subtitle_1',
                'image_url',
                'subtitle_2',
                'rating_no',
            ];
            
            foreach ($ratingSetting as $rating) {
                $value = $request->input($rating);
                $existingSetting = KreatywnyRating::where('type', $rating)->first();
                
                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    KreatywnyRating::create(['type' => $rating, 'message' => $value]);
                }
            }
            return redirect()->route('kreatywny-rating.index')->with('success', 'Rating updated successfully');
    }

    public function kreatywnyRatingStatus($id)
    {
        $user = KreatywnyRating::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }
        
        return redirect()->back()->with('error', 'User not found.');
    }
}
