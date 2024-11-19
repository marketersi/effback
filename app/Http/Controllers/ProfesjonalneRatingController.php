<?php

namespace App\Http\Controllers;

use App\Models\ProfesjonalneRating;
use Illuminate\Http\Request;

class ProfesjonalneRatingController extends Controller
{
    public function profesjonalneRatingIndex()
    {
        $ratingSection = ProfesjonalneRating::orderBy('id', 'desc')->get();
        return view('profesjonalne-rating.index', compact('ratingSection'));
    }

    public function profesjonalneRatingCreate()
    {
        $details = ProfesjonalneRating::get();
        return view('profesjonalne-rating.create', compact('details'));
    }

    public function profesjonalneRatingStore(Request $request)
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
                $existingSetting = ProfesjonalneRating::where('type', $rating)->first();
                
                if ($existingSetting) {
                    $existingSetting->update(['message' => $value]);
                } else {
                    ProfesjonalneRating::create(['type' => $rating, 'message' => $value]);
                }
            }
            return redirect()->route('profesjonalne-rating.index')->with('success', 'Rating updated successfully');
    }

    public function profesjonalneRatingStatus($id)
    {
        $user = ProfesjonalneRating::findOrFail($id);
        if ($user) {
            $user->status = ($user->status == 'Active') ? 'Inactive' : 'Active';
            $user->save();

            return redirect()->back()->with('success', 'Status updated successfully.');
        }
        
        return redirect()->back()->with('error', 'User not found.');
    }
}
